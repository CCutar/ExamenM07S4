<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prova d’avaluació DAW2324M7UF2S4_Cutar')</title>
    <style>
        /* Estilos CSS personalizados */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #276;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #123;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Prova d’avaluació DAW2324M7UF2S4_Cutar</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Institut Montsià - Curs 2023-24</p>
    </footer>
</body>
</html>
