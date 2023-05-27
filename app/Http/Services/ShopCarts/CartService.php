<?php
namespace App\Http\Services\ShopCarts;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartService{

    public function cartProduct($iduser, $idproduct, $slug, $price, $amount)
    {
        $cart = Cart::where('member_id', $iduser)
            ->where('product_id', $idproduct)
            ->first();

        if ($cart) {
            Cart::where('member_id', 1)
            ->where('product_id', 17)
            ->update([
                'amount' => DB::raw("amount + $amount"),
                'total' => DB::raw("$price * amount"),
            ]);
        }
        else {
            Cart::create([
                'member_id' => $iduser,
                'product_id' => $idproduct,
                'price' => $price,
                'amount' => $amount,
                'total' => $price * $amount,
            ]);
        }

        return redirect()->route('product.slug', $slug);
    }
}
