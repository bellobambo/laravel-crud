<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Products</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <button style="margin-bottom: 20px"><a  style="margin-bottom: 20px" href="{{route('products.create')}}">New Product</a></button>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty.</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Edit</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href=" {{ route('products.edit', ['product' => $product]) }}">
                            Edit</a>

                    </td>
                    <td>
                       <form action="{{route('products.destroy', ['product'=> $product])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" style="cursor: pointer" value="Delete">
                       </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
