<div class="container">
    <div class="row justify-content-center">         
		<div class="search">            
		    {!! Form::open(['url' => '/search', 'method' => 'get']) !!}
		        {!! Form::text('s', '', array('placeholder' => 'Buscar')) !!}
		        {!! Form::submit('Buscar') !!}
		    {!! Form::close() !!}
		</div>
	</div>
</div>