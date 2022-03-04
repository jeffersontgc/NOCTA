@extends('layouts.app')
@section('title', 'Detail Products')

@section('content')

<div>

  <h1>{{ $category->description }}</h1>

  @foreach ($category->productos as $product )
  <tr>
    <td>{{ $product->description }}</td>
    <td class="text-danger">{{ $product->id_categoria}}</td>
  </tr>
  @endforeach
</div>


@endsection