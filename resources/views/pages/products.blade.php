@extends('templates.base')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">Products</h1>
            <form hx-get="/api/products"
                  hx-target="#products-list"
                  hx-trigger="submit"
                  class="flex">
                <input type="text" name="filter" placeholder="Search products..." class="p-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="p-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Search</button>
            </form>
        </div>

        <hr class="mb-4">

        <div class="flex justify-end mb-4">
            <a href="/create-product" class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Create New Product</a>
        </div>

        <hr class="mb-4">

        <div id="products-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" hx-get="/api/products" hx-trigger="load delay:500ms" hx-swap="innerHTML"></div>
    </div>
@endsection
