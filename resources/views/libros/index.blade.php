<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Libros</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }

        .libros {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .libro-card {
            background-color: #fafafa;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }

        .libro-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .libro-card h2 {
            margin-top: 0;
            font-size: 20px;
            color: #222;
        }

        .libro-card p {
            margin: 5px 0;
            color: #555;
        }

        .libro-card .estado {
            font-weight: bold;
            color: #4CAF50;
        }

        .ver-btn {
            display: inline-block;
            margin-top: 12px;
            padding: 8px 16px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .ver-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Catálogo de Libros</h1>

        <div class="libros">
            @foreach ($libros as $libro)
                <div class="libro-card">
                    <h2>{{ $libro->titulo }}</h2>
                    <p><strong>Autor:</strong> {{ $libro->autor }}</p>
                    <p><strong>Género:</strong> {{ $libro->genero }}</p>
                    <p><strong>Año:</strong> {{ $libro->fecha_publicacion }}</p>
                    <p class="estado"><strong>Estado:</strong> {{ $libro->estado }}</p>

                    <a href="{{ route('libros.show', $libro->id) }}" class="ver-btn">Ver detalle</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
