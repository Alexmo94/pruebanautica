@extends('layouts.app')

@section('content')
@include('layouts.search')
<script type="text/javascript">

</script>
<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">{{$movies['Title']}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img class="mx-auto d-block" src="{{$movies['Poster']}}" alt="Poster" width="80%" >
        </div>
        <div class="col-2 text-justify">
                <h4>Año</h4>
                <p>{{$movies['Year']}}</p>
                <h4>Pais</h4>
                <p>{{$movies['Country']}}</p>
                <h4>Director</h4>
                <p>{{$movies['Director']}}</p>
                <h4>Actores</h4>
                <p>{{$movies['Actors']}}</p>
                <h4>Clasificación</h4>
                <p>{{$movies['Rated']}}</p>
            </div>
            <div class="col-6 text-justify">
                <h3>Sinopsis</h3>
                <p>{{$movies['Plot']}}</p>
            </div>
            <div class="col-4 text-center">
                {!! Form::open(['route' => 'movies.store']) !!}
                   {!!	Form::hidden('Id', $movies['imdbID']) !!}
                   {!! Form::submit('Votar',['class'=> 'btn btn-primary btn-lg btn-block' ])!!}
                {!! Form::close() !!}	
            </div>
        </div>
    </div>
</div>
@endsection