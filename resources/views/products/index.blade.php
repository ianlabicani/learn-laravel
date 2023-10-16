<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app-crud</title>
</head>

<body>

    <h1>Products</h1>

    @if (count($products) != 0)
        <table border=1>
            <thead>

                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>qty</th>
                    <th>price</th>
                    <th>description</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('product.edit', ['product' => $product]) }}">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No products</h1>
    @endif

</body>

</html>
