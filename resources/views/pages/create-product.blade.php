@extends('templates.base')

@section('content')

    <div class="max-w-lg mx-auto mt-10 p-5 bg-white shadow-lg rounded">
        <h2 class="text-2xl mb-5">Create Product</h2>
        <form hx-post="/api/products"
              hx-target="#form-messages"
              hx-swap="innerHTML oob:beforeend"
              hx-on="htmx:afterOnLoad: this.reset()">

            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded w-full">
                <div id="name-error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <input type="text" name="description" id="description" class="p-2 border border-gray-300 rounded w-full">
                <div id="description-error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" step="0.01" class="p-2 border border-gray-300 rounded w-full">
                <div id="price-error" class="text-red-500"></div>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image URL</label>
                <input type="text" name="image" id="image" class="p-2 border border-gray-300 rounded w-full">
                <div id="image-error" class="text-red-500"></div>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="p-2 bg-blue-500 text-white rounded">Save Product</button>
                <a href="/product" class="p-2 bg-red-500 text-white rounded">Cancel</a>
            </div>
        </form>
        <div id="form-messages"></div>
    </div>

@endsection

@section('scripts')
<script>
document.addEventListener('htmx:afterRequest', (event) => {
    const response = event.detail.xhr.response;
    if (event.detail.xhr.status === 422) {
        const errors = JSON.parse(response);
        document.getElementById('name-error').innerText = errors.name || '';
        document.getElementById('description-error').innerText = errors.description || '';
        document.getElementById('price-error').innerText = errors.price || '';
        document.getElementById('image-error').innerText = errors.image || '';
    } else {
        document.getElementById('name-error').innerText = '';
        document.getElementById('description-error').innerText = '';
        document.getElementById('price-error').innerText = '';
        document.getElementById('image-error').innerText = '';
    }
});
</script>
@endsection
