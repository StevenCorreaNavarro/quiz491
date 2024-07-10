<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body style="padding: 10% ;">
    <center>
    <h1>Lista de libros:</h1>
    <a href="{{ route('book.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar otro dato</a>
   
    <table class="table" >
        <td>
            <h4>codigo
        </td>
        <td>
            <h4>isbn
        </td>
        <td>
            <h4>titulo
        </td>
        <td>
            <h4>editorial
        </td>
        <td>
            <h4>paginas
        </td>
        
        
        
        @foreach ($books as $book)
        
            <tr>
                <td>{{ $book->codigo }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->titulo }}</td>
                <td>{{ $book->editorial }}</td>
                <td>{{ $book->paginas }}</td>
                {{-- <td>{{ $book->descripcion }} </td> --}}
                <td><a href="{{ route('book.show', $book->id) }}" style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('book.edit', $book->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</center>
</body>
</html>
