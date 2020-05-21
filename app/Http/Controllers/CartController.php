<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'product_img' => $product->product_img,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');

    }

    public function index()
    {

        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.index', compact('cartItems'));
    }

    public function destroy($itemId)
    {

       \Cart::session(auth()->id())->remove($itemId);

        return back()->with('destroy', 'Item was been DELETED!');
    }

    // public function update($rowId)
    // {

    //     \Cart::session(auth()->id())->update($rowId, [
    //         'quantity' => [
    //             'relative' => false,
    //             'value' => request('quantity')
    //         ]
    //     ]);

    //     return back();
    // }

    public function checkout()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.checkout', compact('cartItems'));
    }


    public function ordercomplete()
    {
        return view('cart.order-complete');
    }
    // public function applyCoupon()
    // {
    //     $couponCode = request('coupon_code');

    //     $couponData = Coupon::where('code', $couponCode)->first();

    //     if(!$couponData) {
    //         return back()->withMessage('Sorry! Coupon does not exist');
    //     }

    //     //coupon logic
    //     $condition = new \Darryldecode\Cart\CartCondition(array(
    //         'name' => $couponData->name,
    //         'type' => $couponData->type,
    //         'target' => 'total',
    //         'value' => $couponData->value,
    //     ));

    //     return back()->withMessage('coupon applied');

    // }
}
