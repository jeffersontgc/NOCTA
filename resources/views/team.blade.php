@extends('layouts.base')

@section('title', 'Create')

@section('content')

<div class="container-item">

    <div class="container-form ">

        <form action="{{ route('createClub') }}" method="post">
            @csrf
            <h1 class="text-danger mb-5 view">Create</h1>

            <div class="form-group">
                <input type="text" class="form-control mb-4" placeholder=" nombre" name="nombre"
                    value="{{old('nombre')}}" />
            </div>

            <div class="form-group">
                <input class="form-control mb-4" type="text" placeholder="estadio" name="estadio"
                    value="{{old('estadio')}}" />
            </div>

            <div class=" form-group">
                <input type="text" class="form-control mb-4" placeholder="fundacion" name="fundacion"
                    value="{{old('fundacion')}}" />
            </div>

            <div class=" form-grou">
                <input type="text" class="form-control mb-4" placeholder="jugadores" name="jugadores"
                    value="{{old('jugadores')}}" />
            </div>
            <button type="submit" class="btn btn-danger form-control btn-block mb-2">Crear</button>
            <a class="btn btn-danger form-control btn-block" href="{{ route('viewnext') }}">keyprimary</a>
            @if ($errors->any())
            <div class="alert alert-danger bg-danger border-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="list-unstyled text-dark font-weight-light">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>

    <div class="content-shows">
        <h1 class=" text-danger mb-5 asgh">Equipos</h1>
        <div class="cc">
            @foreach ($teams as $Teams)
            <div class="clubs">
                <div class="name_club">
                    <h2 class="text-light mb-0 asfe"> Club: </h2>
                    <h4 class="text-danger mb-0 pr-2">{{ $Teams->nombre }}</h4><br>
                </div>
                {{-- <h2 class="text-light mb-2"> Fundacion: <p class="text-danger">{{
                        $Teams->fundacion}}</p>
                </h2>
                <h2 class="text-light mb-2">Estadio: <p class="text-danger">{{
                        $Teams->estadio}}</p>
                </h2>
                <h2 class="text-light mb-2">Jugadores: <p class="text-danger">{{
                        $Teams->jugadores}}</p>
                </h2> --}}
                <div class="eventsClicks">
                    <div class="events_clicks_details">
                        <a href="{{ route('teamsDetailsT',$Teams->id ) }}">Detalles</a>
                    </div>
                    <div class="events_clicks_delete">
                        <a href="{{ route('deleteTeam',$Teams->id ) }}">Delete</a>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection