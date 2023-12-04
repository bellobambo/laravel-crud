<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Product</h1>



    <form action="{{route('products.update', ['product' => $product]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name:</label> <br>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"><br><br>
        </div>

        <div>
            <label for="name">Qty:</label> <br>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}"><br><br>

        </div>

        <div>

            <label for="name">Price:</label> <br>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}"><br><br>
        </div>
        <div>

            <label for="name">Description:</label> <br>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}"><br><br>
        </div>
        <div>
            <input type="submit" value=" Update">
        </div>

    </form>
</body>

</html>
