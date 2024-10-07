<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::with('products')->get();
        return view('buyers.index', compact('buyers'));
    }
    
    public function fnbuyers()
    {
        $buyers = Buyer::with('products')->get();
        return view('frontend.buyers', compact('buyers'));
    }

    public function create()
{
    $products = Product::all();
    return view('buyers.create', compact('products'));
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'city' => 'required',
        'products' => 'array',
    ]);

    $buyer = Buyer::create($request->only(['name', 'city']));


    $buyer->products()->sync($request->products);

    return redirect()->route('buyers.index')->with('success', 'Buyer created successfully.');

}


    public function edit(Buyer $buyer)
{
    $products = Product::all(); 
    return view('buyers.edit', compact('buyer', 'products'));
}


    public function update(Request $request, Buyer $buyer)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        $buyer->update($request->all());
        return redirect()->route('buyers.index')->with('success', 'Buyer updated successfully.');
    }

    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect()->route('buyers.index')->with('success', 'Buyer deleted successfully.');
    }
}

