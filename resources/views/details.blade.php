@extends('layouts.base')

@section('title', 'Upload')

@section('content')

<div class="container-item h-100vh">
    {{-- <h1 class="text-danger">{{ $teams->nombre }}</h1> --}}

    <div class="container-form_detail">

        <form action="{{ route('updateTeam',$teams->id ) }}" method="post">
            @csrf
            <h1 class="text-danger mb-5 updateTitle">Update Team</h1>

            <div class="form-group">
                <input type="text" class="form-control mb-4" value="{{ $teams->nombre }}" name="nombre" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control mb-4" value="{{ $teams->estadio }}" name="estadio" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control mb-4" value="{{ $teams->fundacion }}" name="fundacion" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control mb-4" value="{{ $teams->jugadores }}" name="jugadores" />
            </div>
            <button type="submit" class="btn btn-danger form-control btn-block mb-3">Actualizar Equipo</button>
            <button class="btn btn-danger form-control btn-block">
                <a class="text-light  text-decoration-none" href="{{ route('teams.index') }}">Back
                    Teams</a>
            </button>


        </form>
    </div>

    <div class="content-shows_details">
        <div class="clubs">
            <h2 class="text-light mb-2 textClub"> Club <p class="text-danger">{{ $teams->nombre }}</p>
            </h2>
            <h2 class="text-light mb-2 textClub"> Fundacion <p class="text-danger">{{
                    $teams->fundacion}}</p>
            </h2>
            <h2 class="text-light mb-2 textClub">Estadio: <p class="text-danger">{{
                    $teams->estadio}}</p>
            </h2>
            <h2 class="text-light mb-2 textClub">Jugadores <p class="text-danger">{{
                    $teams->jugadores}}</p>
            </h2>

        </div>
    </div>
</div>

@endsection