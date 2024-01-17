<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Tagp;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    
    public function index(Request $request) : View
    {
        $categories = CategoryProduct::all();
        $subcategories = Subcategory::all();
        $products = Product::query();
        if($search = $request -> search){
            $products  -> where(fn(Builder $query) => $query 
            -> where('name', 'LIKE', '%'.$search.'%')
            -> orWhere('description', 'LIKE', '%'.$search.'%'));
        }
        

        return view('product.index', [
            'products' => Product::latest()->paginate(10),
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

   public function getSubcategories(Request $request)
    {
        $slug = $request->input('slug');
        if ($slug) {
            $category = CategoryProduct::where('slug', $slug)->first();
            $subcategoriesAjax = $category->subcategories()->inRandomOrder()->limit(4)->get();
            return response()->json(['subcategoriesAjax' => $subcategoriesAjax]);
        }
        return response()->json(['message' => 'Slug not found'], 404);
    }

    public function show(Product $product) : View
    {
        $categories = CategoryProduct::all();
        $subcategories = Subcategory::all();

        return view('product.productpage', [
            'product' => $product,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    public function productByCategory(CategoryProduct $category) : View
    {
        //$products = $category -> product()-> paginate(3);

        return view('product.productByCategory', [
            'products' => Product::where(
                                    'category_product_id', $category->id
                                    )->latest()
                                    ->paginate(3),
            'category' => $category
        ]);
    }

    public function productByTag(Tagp $tag) : View
    {
        //$products = $tag -> product()-> paginate(3);

        return view('product.productByTag', [
            'products' => Product::whereRelation(
            'tagps', 'tagps.id', $tag->id
            )->latest()->paginate(3)
        ]);
    }
}
