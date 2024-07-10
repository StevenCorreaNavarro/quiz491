<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Actualizar libro</h1>

    <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')
        <label>
            codigo
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $book->codigo) }}">
        </label>
        <br>
        <label>
            isbn
            <br>
            <input type="text" name="isbn" value="{{ old('isbn', $book->isbn) }}">
        </label>
        <br>
        <label>
            titulo
            <br>
            <input type="text" name="titulo" value="{{ old('titulo', $book->titulo) }}">
        </label>
        <br>
        <label>
            editorial
            <br>
            <input type="editorial" name="editorial" value="{{ old('editorial', $book->editorial) }}">
        </label>
        <br>
        <label>
            paginas
            <br>
            <input type="text" name="paginas" value="{{ old('paginas', $book->paginas) }}">
        </label>


        <br>

        <button type="submit">Enviar Formulario:</button>
    </form>

</body>

</html>
