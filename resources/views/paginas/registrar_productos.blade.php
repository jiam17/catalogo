@extends('template')

@section('contenido')
    <h1>Registrar productos</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo">

        <label for="">Descripcion</label>
        <input type="text" name="descripcion">

        <label for="">Precio</label>
        <input type="text" name="precio">

        <label for="">Imagen</label>
        <input type="text" name="imagen" class="form-control">

        <input type="submit" class="btn btn-success my-4" value="Registrar">

    </form>
@endsection