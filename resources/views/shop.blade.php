@extends('layouts.index')
@section('title_bar')
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button type="submit" class="input-group-addon close-search "></button>
            <span class="input-group-addon close-search "><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
<!-- Start Top Search -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb">
                <form action="/shop">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button type="submit" class="btn btn-outline-primary "
                            style="background: #14BFF4">Search</button>
                    </div>
                </form>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Search -->
@endsection
@section('content')
<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                            class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                            class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <img src="{{$product->image}}" class="img-fluid"
                                                    alt="Image" style="width: 300px; height:300px">
                                            </div>
                                            <div class="why-text">
                                                <h4>{{$product->name}}</h4>
                                                <h5> Rp{{$product->price}}</h5>
                                                <form action="/add_to_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                    <input type="hidden" name="product_store"
                                                        value="{{$product['store_id']}}">
                                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                                </form>
                                                <form action="/add_to_wishlist" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                    <input type="hidden" name="product_store"
                                                        value="{{$product['store_id']}}">
                                                    <button type="submit" class="btn btn-primary addToCart">Add to
                                                        Wishlist</button>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">Store : {{ $product->store->storeName }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <div class="list-view-box">
                                    <div class="row">
                                        @foreach ($products as $product)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid"
                                                        alt="Image" style="width: 300px; height:300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <input type="hidden" name="product_id" value={{$product->id}}>
                                                <h4>{{$product->name}}</h4>
                                                <h5> Rp{{$product->price}}</h5>
                                                <p>{{$product->description}}</p>
                                                <form action="/add_to_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                    <input type="hidden" name="product_store"
                                                        value="{{$product['store_id']}}">
                                                    <button type="submit" class="btn btn-primary addToCart">Add to
                                                        Cart</button>
                                                </form>
                                                <form action="/add_to_wishlist" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                    <button type="submit" class="btn btn-primary addToCart">Add to
                                                        Wishlist</button>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">Store : {{ $product->store->storeName }}
                                                </small>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->
@endsection