<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f4f8;
            color: #1e293b;
        }

        /* Navbar Atas (Biru & Putih) */
        .navbar {
            background-color: #1d4ed8;
            color: #ffffff;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .brand {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .navbar .nav-links {
            display: flex;
            gap: 12px;
        }

        .navbar .nav-links a {
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .navbar .nav-links a:hover,
        .navbar .nav-links a.active {
            background-color: #ffffff;
            color: #1d4ed8;
        }

        /* Kotak Konten Utama di Tengah Layar */
        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(30, 58, 138, 0.08);
            border-top: 4px solid #2563eb;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding-bottom: 14px;
            border-bottom: 1px solid #e2e8f0;
        }

        .card-header h1 {
            font-size: 22px;
            color: #1e3a8a;
        }

        /* Tombol */
        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: #2563eb;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-outline {
            background-color: #ffffff;
            color: #2563eb;
            border: 1px solid #2563eb;
        }

        .btn-outline:hover {
            background-color: #eff6ff;
        }

        .btn-danger {
            background-color: #ef4444;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #eff6ff;
            color: #1e3a8a;
            text-align: left;
            padding: 12px 16px;
            font-size: 14px;
            border-bottom: 2px solid #bfdbfe;
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f8fafc;
        }

        .action-group {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        /* Formulir Terpusat */
        .form-card {
            max-width: 520px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #1e3a8a;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            color: #1e293b;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 24px;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background-color: #dbeafe;
            color: #1e40af;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="brand">Inventory System</div>
        <div class="nav-links">
            <a href="{{ url('/products') }}" class="{{ request()->is('products*') ? 'active' : '' }}">Products</a>
            <a href="{{ url('/stocks') }}" class="{{ request()->is('stocks*') ? 'active' : '' }}">Stocks</a>
            <a href="{{ url('/transactions') }}"
                class="{{ request()->is('transactions*') ? 'active' : '' }}">Transactions</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>