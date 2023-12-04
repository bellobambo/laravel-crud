<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create Product</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                   {{$error}}
                </li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label> <br>
            <input type="text" name="name" placeholder="name"><br><br>
        </div>

        <div>
            <label for="name">Qty:</label> <br>
            <input type="text" name="qty" placeholder="qty"><br><br>

        </div>

        <div>

            <label for="name">Price:</label> <br>
            <input type="text" name="price" placeholder="Price"><br><br>
        </div>
        <div>

            <label for="name">Description:</label> <br>
            <input type="text" name="description" placeholder="description"><br><br>
        </div>
        <div>
            <input type="submit" value="Save Product">
        </div>

    </form>
</body>

</html>
