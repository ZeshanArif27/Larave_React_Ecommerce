<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class Categories_Controller extends Controller
{
    public function get_Categories(){ 
        $category = Categories::select('id','categories')->get();

        return $category;

    }
}
