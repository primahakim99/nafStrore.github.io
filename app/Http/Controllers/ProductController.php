<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::join('stores', 'products.store_id', '=', 'stores.id')->where('user_id', auth()->user()->id)->get();
        return view('owner.product.index', compact('products'), [
            'title' => 'Product List',
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $store = Store::where('user_id', auth()->user()->id)->get();
        return view('owner.product.create', [
            'title' => 'Product List Add',
            'categories' => $category,
            'stores' => $store,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request ->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'store_id' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('products','public');
        }

        Product::create($validateData);
        return redirect('/product')->with('success', 'New Product Succesful Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('owner.product.show', [
            'title' => 'Product List Show',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $store = Store::where('user_id', auth()->user()->id)->get();
        return view('owner.product.edit', [
            'title' => 'Product List Edit',
            'product' => $product,
            'categories' => Category::all(),
            'stores' => $store,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id);

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->category_id = $request->category_id;
        $product->store_id = $request->store_id;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->weight = $request->weight;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            if ($product->image && file_exists(storage_path('app/public/'. $product->image))) {
                Storage::delete(['public/', $product->image]);
            }
            $image_name = $request->file('image')->store('products', 'public');
            $product->image = $image_name;
        }
        $product->save();
        return redirect('/product')
                ->with('success', 'Product Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);
        return redirect('/product')->with('success', 'Product Succesful Delete');
    }

    public function addWishlist(Request $request)
    {
        $product_id = $request->input('product_id');
        if(Auth::check()){
            if(
                Wishlist::where('product_id',$product_id)
                ->where('user_id',Auth::id())
                ->exists()
                )
            {
                return redirect()->back()->with('message', 'Product Already in the Wish List');
            }else{

                Wishlist::create([
                    'product_id' => $product_id,
                    'user_id' => Auth::id(),
                ]);
                return redirect()->back()->with('message', 'Product Successfully Added to Wish List');
            }
        }else{
            return redirect('/sign-in');
        }
    }

    public function destroyWishlist($id){
        $cart = Wishlist::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Product Successfully Delete from Wish List');
    }
}
