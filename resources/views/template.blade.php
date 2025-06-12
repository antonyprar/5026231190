<!DOCTYPE html>
<html lang="en">

<head>
    <title>Antony Purnamarasid August Ratulangi : 5026231190</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        color: #333;
    }

    .jumbotron {
        background: linear-gradient(to right, #74ebd5, #9face6);
        padding: 2rem;
        margin-bottom: 30px;
        border-radius: 0 0 30px 30px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .jumbotron h1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    .navbar {
        background-color: transparent !important;
        justify-content: center;
        flex-wrap: wrap;
        padding-top: 0;
    }

    .navbar-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-top: -20px;
    }

    .nav-item {
        list-style: none;
    }

    .nav-link {
        display: inline-block;
        padding: 12px 24px;
        margin: 5px;
        border-radius: 50px;
        background: linear-gradient(145deg, #ffffff, #e6e6e6);
        color: #007bff !important;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.05), -4px -4px 10px rgba(255, 255, 255, 0.9);
        position: relative;
        overflow: hidden;
    }

    .nav-link:hover {
        color: #fff !important;
        background: linear-gradient(to right, #6dd5fa, #2980b9);
        box-shadow: 0 5px 20px rgba(0, 123, 255, 0.3);
        transform: translateY(-2px);
    }

    .nav-link::after {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.4);
        transform: skewX(-20deg);
        transition: left 0.5s ease;
        pointer-events: none;
    }

    .nav-link:active::after {
        left: 150%;
        transition: left 0.2s ease;
    }

    .container {
        padding-bottom: 50px;
    }
</style>


</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231190 : Antony Purnamarsid August Ratulangi</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tugascrud">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="latihan3">Latihan 3</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/week2">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/latihan3">Latihan 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/js1">Latihan 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/js2">Latihan 5</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/pertemuan6">Tugas Linktree</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
