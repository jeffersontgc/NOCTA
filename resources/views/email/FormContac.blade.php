@extends('layouts.base')

@section('title', 'Create')

@section('content')
<div class="form-contac">
    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <h1 class=" text-danger mb-5 custom">Contactanos</h1>
        <div class="form-group">
            <input type="text" class="form-control mb-2 w-100" placeholder=" nombre" name="usercontac" />
            @error('usercontac')
            <p class=" text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control mb-2 w-100" type="text" placeholder="email" name="emailcontac" />
            @error('emailcontac')
            <p class=" text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <textarea class=" p-3 mb-2" name="descriptioncontac" placeholder="Enter your comentary" id="" cols="50"
                rows="10"></textarea>
            @error('descriptioncontac')
            <p class=" text-danger mb-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100 " type="submit">Enviar</button>
        </div>
    </form>
    @if (session('alert'))
    <script>
        alert("{{session('alert')}}")
    </script>
    @endif
</div>
@endsection