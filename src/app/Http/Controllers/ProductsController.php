<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 
 */
class ProductsController extends Controller
{
    /**
     * @return view
     */
    public function index()  {
        $title = "Welcome to my Laravel 8 course.";
        $description = "Create By Dary";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // Compact method
        //return view('products.index', compact('title', 'description'));

        // With method
        //return view('products.index')->with('title', $title);
        //return view('products.index')->with('data', $data);

        // Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    /**
     *
     * @return string
     */
    public function about(): string {
        return 'About Us Page';
    }
}
