<!DOCTYPE html>         {{--menandakan jenis file yaitu html file--}}
<html>                  {{--awal elemen html--}}
    <head>               {{--awal elemen head--}}
        <title>Add Item</title>
    </head>
    <body>
        <h1>Add Item</h1>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
            <br>
            <button type="submit">Add Item</button>
        </form>
        <a href="{{ route('items.index') }}">Back to List</a>
    </body>
</html>