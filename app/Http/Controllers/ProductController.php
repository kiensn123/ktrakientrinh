<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Product;


class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_type' => ['required', Rule::in(['ABC', 'DEF', 'GHI'])],
            'product_code' => ['required', 'regex:/^[a-zA-Z0-9]+$/'],
            'product_name' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string|max:60',
        ]);

        // Create new product
        Product::create($validatedData);

        // Redirect or return response
        return response()->json(['message' => 'Product created successfully'], 201);
    }
    public function create()
    {
        return view('products.create');
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string|max:3',
            'product_code' => 'required|string|max:6',
            'product_name' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string|max:60',
        ]);

        Product::create($request->all());

        return redirect('/products/create')->with('success', 'Product added successfully!');
    }

    
}

    

    

