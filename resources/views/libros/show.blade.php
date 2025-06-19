<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $libro->titulo }} - Detalle</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            margin: 6px 0;
            color: #555;
        }

        label, select {
            display: block;
            margin-top: 20px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fdfdfd;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .estado {
            margin-top: 10px;
            font-weight: bold;
            color: #4CAF50;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $libro->titulo }}</h1>

        <p><strong>Autor:</strong> {{ $libro->autor }}</p>
        <p><strong>Género:</strong> {{ $libro->genero }}</p>
        <p><strong>Año de publicación:</strong> {{ $libro->fecha_publicacion }}</p>
        <p class="estado"><strong>Estado actual:</strong> {{ $libro->estado }}</p>

        <form method="POST" action="{{ url('/api/libros/' . $libro->id . '/estado') }}">
            @csrf
            @method('PUT')

            <label for="estado">Cambiar estado del libro:</label>
            <select name="estado" id="estado">
                <option value="disponible" {{ $libro->estado === 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="no_disponible" {{ $libro->estado === 'no_disponible' ? 'selected' : '' }}>No disponible</option>
            </select>

            <button type="submit">Actualizar estado</button>
        </form>

        <a href="{{ url('/') }}">← Volver al listado de libros</a>
    </div>
    @if(session('success'))
    <p style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 8px;">
        {{ session('success') }}
    </p>
    @endif
</body>
</html>
