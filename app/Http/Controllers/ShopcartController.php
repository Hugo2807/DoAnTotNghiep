<?php

namespace App\Http\Controllers;

use App\Http\Services\ShopCarts\CartService;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
    protected $carts;

    public function __construct(CartService $carts){
        $this->carts = $carts;
    }

    public function index(Request $request, $slug){
        // $cartProduct = $this->carts->cartProduct($request->iduser, $request->idproduct, $slug, $request->price, $request->amount);
        // return $cartProduct;
    }

    public function store(Request $request, $slug){
        $cartProduct = $this->carts->cartProduct($request->iduser, $request->idproduct, $slug, $request->price, $request->amount);
        return $cartProduct;
    }

    public function cartDetail(){
        $user_id = Auth::guard('webuser')->user()->id;
        $cartDetails = Cart::where('member_id', $user_id)->get();
        $count_cartDetails = $cartDetails->count();
        $products = Product::all();
        $units = Unit::all();
        $total = Cart::where('member_id', $user_id)->sum('total');

        return view('user.page.cart.detail', compact('cartDetails', 'count_cartDetails', 'total', 'products', 'units'));
    }

    public function deleteCartItem($id)
    {
        Cart::find($id)->delete();
        return redirect()->back();
    }
}
