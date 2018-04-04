@extends('layouts.app')

@section('content')
	@include('layouts.search')
	<div class="content">
		<div class="row" style="border:2px">
			@foreach ($movies as $m)
			<div class="col-4 text-center" style="margin-bottom: 30px" >
			<a href="{{action('movieController@show',['id' => $m->imdbID])}}">
				<img class="mx-auto d-block rounded" src="{{$m->Poster}}" width="50%" alt="Poster">
			</a>
			<h2 class="text-center">{{$m->Title}}</h2>
			<div>
				<table class="table">
					<thead></thead>
						<tbody>
						<tr>
							<th scope="row"><h4>Año</h4></th>
							<td><h4>{{$m->Year}}</h4></td>
						</tr>
						</tbody>
				</table>
			</div>
				{!! Form::open(['route' => 'movies.store']) !!}
					{!!	Form::hidden('Id', "$m->imdbID") !!}
					{!! Form::submit('Votar',['class'=> 'btn btn-primary btn-lg btn-block','style'=>'margin-top: -30px' ])!!}
				{!! Form::close() !!}	
			</div>	
			@endforeach
		</div>	
	</div>	
@endsection