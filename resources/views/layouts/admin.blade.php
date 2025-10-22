<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f0f2f5;
        }

        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            flex-shrink: 0;
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 12px 0;
            padding: 10px;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .main-content {
            flex: 1;
            padding: 30px;
        }

        .main-content h1 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .main-content p {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Dilesin Admin</h2>
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
        <a href="#">Pengguna</a>
        <a href="#">Kursus</a>
        <a href="#">Logout</a>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
