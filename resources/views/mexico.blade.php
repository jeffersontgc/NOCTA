@extends('layouts.app')
@section('title', 'Example View')

@section('content')
<div class="">
  <div class="d-flex justify-content-around w-100">

    <div class="w-25">
      <table class="table table-bordered table-dark">
        <h1 class="pb-2">Categoria</h1>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $Categoria)
          <tr>
            <th class="text-danger" scope="row">{{ $Categoria->id }}</th>
            <td><a class=" text-decoration-none text-light" href={{ route('detailcategorie', $Categoria->id) }}>{{
                $Categoria->description }}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- <div class="w-25">
      <table class="table table-bordered table-dark">
        <h1 class="pb-2">Productos</h1>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Description</th>
            <th scope="col">ID Categoria</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categoriaid as $Producto)
          <tr>
            <th scope="row">{{ $Producto->id }}</th>
            <td>{{ $Producto->description }}</td>
            <td class="text-danger">{{ $Producto->id_categoria}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> --}}


  </div>
</div>



@endsection