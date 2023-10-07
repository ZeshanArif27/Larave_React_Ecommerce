<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\prod;
use Illuminate\Support\Facades\Response;
use function PHPUnit\Framework\isEmpty;

class Products_Controller extends Controller
{
    public function showProds($cat_id){
        $products = prod::select('cat_id', 'title', 'dimensions', 'features', 'stock', 'price')->where('cat_id', $cat_id)->get();
        
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found for Cat_id: ' . $cat_id], 404);
        }
        return $products;
    }
    // public function get_Products(){
    //     $product = Products::select('id','cat_id','title')->get();
    //     return $product;
    // }

    // public function showProducts($cat_id){
        
    //     $products = Products::where('cat_id', $cat_id)->first();
    //     if (!$products) {
    //         return response()->json(['message' => 'Product not found'], 404);
    //     }
    //     $prod = Products::select('cat_id','title','dimensions','features','stock','price')->get();
    //     return $prod;
    // }
    

    
}

