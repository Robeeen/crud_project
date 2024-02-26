<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto px-10">
    <h3>Create New Products Page</h3>
    <div class="w-96">
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
    <label for="name">Full Name</label>
        <input type="text" name="product_name" id="product_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
        <label for="price">Price</label>
        <input type="number" name="price" id="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
        <div class="mt-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>
    </div>
    </div>
</body>
</html>