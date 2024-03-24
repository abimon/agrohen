@extends('layouts.dash',['title'=>'Products'])
@section('dashboard')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Stock</h4>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="#" class="fw-normal"></a></li>
                </ol>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Product
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <div class="row mb-3">
                                        <label for="productImage" class="col-md-4 col-form-label">Product Image</label>
                                        <div class="col-md-6">
                                            <img id="output" src="{{asset('storage/product/image')}}" style="width:100px;" />
                                            <input type="file" accept="image/jpeg, image/png" name="file" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                    document.getElementById('output').value == image.src;
                                                };
                                            </script>
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm " title="Upload new product image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Product Image</label></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Product Price') }}</label>
                                        <div class="col-md-6">
                                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="desc" class="col-md-4 col-form-label text-md-end">{{ __('Product description') }}</label>
                                        <div class="col-md-6">
                                            <textarea id="desc" type="number" class="form-control @error('desc') is-invalid @enderror" name="desc" required autocomplete="desc">{{ old('desc') }}</textarea>

                                            @error('desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Stock Inventory</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Picture</th>
                                <th class="border-top-0">Product Name</th>
                                <th class="border-top-0">Category</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <img src="{{asset('storage/images/products/'.$product['path'])}}" width='60'>
                                </td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Edit{{$product->id}}">Edit Product
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Edit{{$product->id}}" tabindex="-1" aria-labelledby="Edit{{$product->id}}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="Edit{{$product->id}}Label">Add Product</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">

                                                        <div class="row mb-3">
                                                            <label for="productImage" class="col-md-4 col-form-label">Product Image</label>
                                                            <div class="col-md-6">
                                                                <img id="output" src="{{asset('storage/images/products/'.$product['path'])}}" style="width:100px;" />
                                                                <input type="file" accept="image/jpeg, image/png" name="file" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

                                                                <script>
                                                                    var loadFile = function(event) {
                                                                        var image = document.getElementById('output');
                                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                                        document.getElementById('output').value == image.src;
                                                                    };
                                                                </script>
                                                                <div class="pt-2">
                                                                    <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Change Image</label></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>
                                                            <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$product->title}}" required>

                                                                @error('title')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Product Price') }}</label>
                                                            <div class="col-md-6">
                                                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$product->price}}" required autocomplete="price">

                                                                @error('price')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="desc" class="col-md-4 col-form-label text-md-end">{{ __('Product description') }}</label>
                                                            <div class="col-md-6">
                                                                <textarea id="desc" type="number" class="form-control @error('desc') is-invalid @enderror" name="desc" required>{{$product->desc}}</textarea>

                                                                @error('desc')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="{{route('product.edit',$product->id)}}"><button type="button" class="btn btn-danger">Destroy</button></a>
                                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection