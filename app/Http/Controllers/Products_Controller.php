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
        $products = prod::select('id','cat_id', 'title', 'dimensions', 'image', 'features', 'stock', 'price')->where('cat_id', $cat_id)->get();
        
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found for Cat_id: ' . $cat_id], 404);
        }
    
        // Create an array to store the results
        $result = [];
    
        foreach ($products as $product) {
            $productData = [
                'id' => $product->id,
                'cat_id' => $product->cat_id,
                'title' => $product->title,
                'dimensions' => $product->dimensions,
                'image' => $product->image ? base64_encode($product->image) : null, // Encode image if it exists
                'features' => $product->features,
                'stock' => $product->stock,
                'price' => $product->price,
            ];
            $result[] = $productData;
        }
    
        return $result;
    }
    public function showProducts($id){
        $products = prod::select('id','cat_id', 'title', 'dimensions', 'image', 'features', 'stock', 'price')->where('id', $id)->get();
        
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found for Cat_id: ' . $id], 404);
        }

        // Create an array to store the results
        $result = [];

        foreach ($products as $product) {
            $productData = [
                'id' => $product->id,
                'cat_id' => $product->cat_id,
                'title' => $product->title,
                'dimensions' => $product->dimensions,
                'image' => $product->image ? base64_encode($product->image) : null, // Encode image if it exists
                'features' => $product->features,
                'stock' => $product->stock,
                'price' => $product->price,
            ];
            $result[] = $productData;
        }

        return $result;
    }

    /**The Working One  **/

    // public function showProds($cat_id){
    //     $products = prod::select('cat_id', 'title', 'dimensions', 'features', 'stock', 'price')->where('cat_id', $cat_id)->get();
        
    //     if ($products->isEmpty()) {
    //         return response()->json(['message' => 'No products found for Cat_id: ' . $cat_id], 404);
    //     }
    //     return $products;
    // }

    /**  **/

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

