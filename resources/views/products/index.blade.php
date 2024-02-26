<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Index Page</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto px-4">
    <h3 class="text-3xl font-bold underline">Product Index Page.</h3>

    <table class="border-separate border-spacing-2 border border-slate-400 ...">
        <thead>
            <tr>
            <th class="border border-slate-300">Serial</th>
            <th class="border border-slate-300">Product Name</th>
            <th class="border border-slate-300">Quantity</th>
            <th class="border border-slate-300">Price</th>
            <th class="border border-slate-300">Descriptions</th>
            <th class="border border-slate-300">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border border-slate-300">{{$product->id}}</td>
                <td class="border border-slate-300">{{$product->product_name}}</td>
                <td class="border border-slate-300">{{$product->quantity}}</td>
                <td class="border border-slate-300">{{$product->price}}</td>
                <td class="border border-slate-300">{{$product->description}}</td>
                <td class="border border-slate-300"><a href="{{route('product.edit', ['products' => $product])}}"></a>Edit</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
</body>
</html>