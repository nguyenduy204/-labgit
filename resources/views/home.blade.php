<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }
        nav ul li {
            position: relative;
            margin: 0 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        nav ul li a:hover {
            background-color: #0056b3;
        }
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #007BFF;
            list-style-type: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
            z-index: 1;
        }
        nav ul li ul li {
            width: 100%;
        }
        nav ul li ul li a {
            padding: 10px;
            color: white;
        }
        nav ul li:hover ul {
            display: block;
        }
        .container {
            padding: 20px;
        }
        .content {
            margin-bottom: 40px;
        }
        h1 {
            color: #333;
        }
        .content ul {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .content ul li {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .content a {
            text-decoration: none;
            color: #007BFF;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .content img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }
        .book-info {
            margin-top: 10px;
        }
        footer {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }

        form {
            margin-top: 25px;
            margin-left: 750px;
            /* margin-bottom: 10px; */
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 300px;
            margin-right: 10px;
            font-size: 16px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="#">Categories</a>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="{{ url('/category/' . $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <form action="{{ url('/') }}" method="GET">
        <input type="text" name="query" placeholder="Search books" value="{{ request()->input('query') }}">
        <button type="submit">Search</button>
    </form>

    <div class="container">
        <div class="content new-books">
            <h1>New Books</h1>
            <ul>
                @foreach($newBooks as $book)
                    <li>
                        <img src="{{ $book->thumbnail }}" alt="">
                        <div class="book-info">
                            <a href="{{ url('/book/' . $book->id) }}">Title: {{ $book->title }}</a>
                            <p>Price: {{ $book->price }}</p> 
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="content best-sellers">
            <h1>Best Selling Books</h1>
            <ul>
                @foreach($bestSellingBooks as $book)
                    <li>
                        <img src="{{ $book->thumbnail }}" alt="">
                        <div class="book-info">
                            <a href="{{ url('/book/' . $book->id) }}">Title: {{ $book->title }}</a>
                            <p>Price: {{ $book->price }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <footer>
        &copy; 2024 Book Store. All rights reserved.
        </footer>
    </div>
</body>
</html>
