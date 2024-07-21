<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 20px;
            display: flex;
            align-items: center;
        }
        .content {
            flex: 1;
            padding-right: 20px;
        }
        .content h1 {
            color: #333333;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .content p {
            color: #666666;
            font-size: 18px;
            margin: 10px 0;
        }
        .content a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .content a:hover {
            background-color: #0056b3;
        }
        .image {
            flex-shrink: 0;
        }
        .image img {
            max-width: 200px;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>{{ $book->title }}</h1>
            <p>Author: {{ $book->author }}</p>
            <p>Publisher: {{ $book->publisher }}</p>
            <p>Publication Date: {{ $book->publication }}</p>
            <p>Price: {{ $book->price }}</p>
            <p>Quantity: {{ $book->quantity }}</p>
            <a href="{{ url('/') }}">Back to Home</a>
        </div>
        <div class="image">
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
        </div>
    </div>
</body>
</html>
