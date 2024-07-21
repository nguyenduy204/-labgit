<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books by Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        ul li a {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
            flex: 1;
        }
        ul li a:hover {
            text-decoration: underline;
        }
        ul li img {
            width: 100px;
            height: auto;
            border-radius: 5px;
            margin-left: 20px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        a{
            display: inline-block;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <ul>
            @foreach($books as $book)
                <li>
                    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                    <a href="{{ url('/book/' . $book->id) }}">Title:{{ $book->title }} - Price: {{ $book->price }}</a>
                    
                </li>
            @endforeach
        </ul>
        <div class="btn"><a href="{{ url('/') }}">Back to Home</a></div>
    </div>
</body>
</html>
