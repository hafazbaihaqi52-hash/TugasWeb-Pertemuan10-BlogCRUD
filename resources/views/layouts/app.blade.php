<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog CRUD')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            color: #333;
        }

        nav {
            background: #2563eb;
            padding: 16px 0;
        }

        nav .nav-container {
            max-width: 900px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .alert {
            padding: 12px 15px;
            background: #dcfce7;
            color: #166534;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .post {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .post h2 {
            margin-top: 0;
        }

        .post p {
            color: #555;
       }

       .empty {
            text-align: center;
            color: #777;
            padding: 30px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

    <nav>
        <div class="nav-container">

            <a href="{{ route('posts.index') }}">
                📝 Blog CRUD
            </a>

            <a href="{{ route('posts.create') }}">
                + Tambah Post
            </a>

        </div>
    </nav>

    <main class="container">

        @yield('content')

    </main>

    <footer>
        &copy; {{ date('Y') }} Blog CRUD Laravel
    </footer>

</body>
</html>