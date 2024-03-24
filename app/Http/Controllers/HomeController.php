<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Viewer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $users = User::where('isAdmin', false)->get();
        return view('admin.dashboard', compact('users'));
    }
    public function articles()
    {
        $article = Article::latest()->take(1)->first();
        $articles = [];
        if ($article!=null) {
            $new_key = uniqid() . '_' . gethostbyaddr($_SERVER["REMOTE_ADDR"]);
            $md_key = md5($new_key);
            if (!isset($_COOKIE['visitor_id' . ($article->id)])) {
                $view = Viewer::where([['user_ip', $md_key], ['post_id', $article->id]])->get();
                if ($view->count() > 0) {
                } else {
                    Viewer::create([
                        'user_ip' => $md_key,
                        'post_id' => $article->id,
                    ]);
                    setcookie('visitor_id' . ($article->id), $md_key, time() + (86400 * 30), "/");
                }
            }
            if (!isset($_COOKIE['visitor_id' . ($article->id)])) {
                if (!$view) {
                    setcookie('visitor_id' . ($article->id), $md_key, time() + (86400 * 30), "/");
                }
            }
            $articles =Article::where('id', '!=', $article->id)->get();
        }
        
        return view('article', compact('article', 'articles'))->with('comments');
    }
    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $new_key = uniqid() . '_' . gethostbyaddr($_SERVER["REMOTE_ADDR"]);
        $md_key = md5($new_key);
        if (!isset($_COOKIE['visitor_id' . ($article->id)])) {
            $view = Viewer::where([['user_ip', $md_key], ['post_id', $article->id]])->get();
            if ($view->count() > 0) {
            } else {
                Viewer::create([
                    'user_ip' => $md_key,
                    'post_id' => $article->id,
                ]);
                setcookie('visitor_id' . ($article->id), $md_key, time() + (86400 * 30), "/");
            }
        }
        if (!isset($_COOKIE['visitor_id' . ($article->id)])) {
            if (!$view) {
                setcookie('visitor_id' . ($article->id), $md_key, time() + (86400 * 30), "/");
            }
        }
        $articles = Article::where('id', '!=', $article->id)->get();
        return view('article', compact('article', 'articles'));
    }
}
