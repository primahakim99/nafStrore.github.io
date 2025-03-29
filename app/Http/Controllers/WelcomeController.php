<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\Evidence_shipping;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "title" => "NAF-STORE",
            'categories' => Category::all(),
        ]);
    }
    public function indexAdmin()
    {
        return view('welcomeAdmin', [
            "title" => "NAF-STORE-Admin",

        ]);
    }
    public function indexOwner()
    {
        return view('welcomeOwner', [
            "title" => "NAF-STORE-Owner"
        ]);
    }

    public function shop()
    {
        return view('Shop', [
            "title" => "Shop",
            "products" => Product::latest()->filter(request(['category','search']))->get(),
        ]);
    }

    public function product()
    {
        return view('productAdmin', [
            "title" => "Product",
            "products" => Product::latest()->filter(request(['category','search']))->get(),
        ]);
    }

    public function wishlist()
    {
        if (Auth::check()) {
            $wishlist = Wishlist::where('user_id', Auth::id())->get();
            return view('wishlist', [
                "title" => "Wishlist",
                'wishlists' => $wishlist,
            ]);
        } else {
            return view('Wishlist', [
                "title" => "Wishlist",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }
    public function order()
    {
        if (Auth::check()) {
            $orders = Order::where('user_id', Auth::id())->get();
            return view('order', [
                "title" => "Order",
                'orders' => $orders,
            ]);
        } else {
            return view('Wishlist', [
                "title" => "Order",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }

    public function updateOrder($id, $status){
        $cart = Order::where('id', $id)->increment('status', $status);
        return redirect()->back();
    }

    // public function updateOrder($id)
    // {
    //     if (Auth::check()) {
    //         $orders = Order::find($id);
    //         $orders->status = '3';
    //         $orders->update();
    //         return redirect('order');
    //     } else {
    //         return view('order', [
    //             "title" => "Order",
    //             'errors' => 'You need to login first. :)'
    //         ]);
    //     }
    // }


    //admin side
    public function ownerData()
    {
        return view('admin.ownerData', [
            "title" => "owner_data"
        ]);
    }

    public function customerData()
    {
        return view('admin.customerData', [
            "title" => "customer_data"
        ]);
    }

    public function transaction()
    {
        $order = Order::all();
        $evidence = Evidence_shipping::join('orders', 'Evidence_shipping.order_id', '=', 'orders.id')
                                        ->get();
                                    // dd($evidence);
        // $evidences = Evidence_shipping::where('order_id', Order::id())->get();
        return view('admin.transaction', [
            "title" => "transaction",
            'orders' => $order,
            'evidence'=> $evidence,
        ]);
    }

    //Owner Side
    public function product_list()
    {
        return view('owner.productList', [
            "title" => "product_list"
        ]);
    }
    public function storeOwner()
    {
        return view('owner.storeOwner', [
            "title" => "storeOwner"
        ]);
    }
    public function orderOwner()
    {
        return view('owner.orderOwner', [
            "title" => "orderOwner"
        ]);
    }

    public function SignIn()
    {
        return view('auth.login', [
            "title" => "Sign In"
        ]);
    }
    public function SignUp()
    {
        return view('auth.register', [
            "title" => "Sign Up"
        ]);
    }
    public function profile()
    {
        $model = Auth::user();

        return view('profile',compact('model'), [
            "title" => "Profile"
        ]);
    }
}
