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

    /**
     * 
     * @return void
     */
    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? ('Product ' . $name . ' does not exist!')
        ]);
    }
}
