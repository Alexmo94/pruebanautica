@extends('layouts.app')

@section('content')
<video autoplay muted loop id="myVideo">
    <source src="{{ asset('videos/myvideo.webm') }}" type="video/webm">
</video>

<div class="container welcome" >
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">Ranking de peliculas</h1>
			<p>
				El festival de cine de Bogotá, es un espacio que busca promover la cultura cinematográfica mediante un concurso que permita a los Colombianos visualizar y seleccionar la mejor pelicula que cumpla con los lineamientos que en su conjunto contemplen la mejor pelicula de todos los tiempos. Para ello se invita a todos el público a conocer y participar en la selección y promición del arte cinematográfico. 
			</p>
			<p>
				En esta página, usted podrá seleccionar la mejor pelicula de todos los tiempos, y cer e ranking de las peliculas votadas por otros usuarios, y así conocer y experimentar nuevos generos del septimo arte. 
			</p>
			<p>
				Para poder realizar si debida votación primero debe registrarse.
			</p>
		</div>			
		<div class="col-md-4">
			<button class="btn btn-primary">
				<a class="nav-link" href="{{ route('register') }}" style="color: #FFFFFF">{{ __('Registrarse') }}</a>
            </button>
		</div>		
	</div>
</div>

@endsection
