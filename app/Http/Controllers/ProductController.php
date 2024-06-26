<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::orderBy('name');

        if ($request->filter) {
            $products->where('name', 'like', "%$request->filter%")
                     ->orWhere('description', 'like', "%$request->filter%");
        }

        $html = "";

        foreach ($products->get() as $prod) {
            $html .= "
                <div class='p-4 rounded bg-blue-200 flex items-center'>
                    <div class='w-1/4'>
                        <img src='{$prod->image}' alt='{$prod->name}' class='rounded w-full'>
                    </div>
                    <div class='w-3/4 pl-4'>
                        <h2 class='text-xl font-bold'>{$prod->name}</h2>
                        <p>{$prod->description}</p>
                        <p class='text-green-500 font-semibold'>\${$prod->price}</p>
                    </div>
                </div>
            ";
        }
        return $html;
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|url|max:1500',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'name' => $errors->first('name'),
                'description' => $errors->first('description'),
                'price' => $errors->first('price'),
                'image' => $errors->first('image'),
            ], 422);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();

        return '<div class="bg-green-500 text-white p-2 rounded">Product has been added successfully!</div>';
    }
}
