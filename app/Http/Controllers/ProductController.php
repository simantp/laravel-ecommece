<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        }else{
            $products = Product::take(12)->get();
        }

        return view('products.index', compact('products', 'categoryName'));
    }

    // public function search(Request $request)
    // {

    //     $query = $request->input('query');

    //     $products = Product::where('name','LIKE',"%$query%")->paginate(12);

    //     return view('product.catalog',compact('products'));
    // }

    public function single($id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        return view('products.product-detail')->with('product', $product);

    }


}
