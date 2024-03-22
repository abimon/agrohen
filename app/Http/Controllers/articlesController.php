<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Like;
use App\Models\Viewer;
use Illuminate\Support\Str;

class articlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }
    public function create()
    {
        return view('admin.article.create');
    }
    public function store()
    {
        Article::create([
            'title' => request()->title,
            'category' => request()->category,
            'body' => request()->body,
            'slug' => Str::slug(request()->title, '_'),
            'author' => Auth()->user()->id,
            'isPublished' => true
        ]);
        return redirect(route('articles.index'));
    }
    public function show($id)
    {

        return view('admin.article.show', compact('article'));
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }
    public function update($id)
    {
        Article::where('id', $id)->update([
            'title' => request()->title,
            'category' => request()->category,
            'body' => request()->body,
            'slug' => Str::slug(request()->title, '_'),
        ]);
        return redirect(route('articles.index'));
    }
    public function destroy($id)
    {
        if (((Article::findOrfail($id))->author == Auth()->user()->id) || (Auth()->user()->isAdmin == true)) {
            Article::destroy($id);
        }
        return redirect()->back()->with('message', 'Article deleted successfully.');
    }
    public function like($id)
    {
        $new_key = uniqid() . '_' . gethostbyaddr($_SERVER["REMOTE_ADDR"]);
        $md_key = md5($new_key);
        $like = Like::where([['user_id', $md_key], ['post_id', $id]])->get();
        if ($like->count()<=0) {
            Like::create([
                'user_id' => $md_key,
                'post_id' => $id,
            ]);
        }
        return  redirect()->back();
    }
}
