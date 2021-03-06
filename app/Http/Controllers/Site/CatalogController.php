<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adfm\Catalog\Product;

class CatalogController extends Controller
{
    public function showCatalog()
    {
        $catalog = Product::get();
        return view('adfm::public.catalog.catalog', compact('catalog'));
    }

    public function showProduct(Product $product)
    {
        $products = Product::where('id', '!=', $product->id)->inRandomOrder()->limit(3)->get();
        return view('adfm::public.catalog.product', compact('product', 'products'));
    }
}
