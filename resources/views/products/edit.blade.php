<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
        @csrf
        @method('post')
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="qty" value="{{ $product->qty }}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="{{ $product->description }}">
        </div>
        <input type="submit" value="Update">
    </form>
</body>

</html>
