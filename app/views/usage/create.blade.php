@extends ('layouts.default')

@section('content')
	{{ Form::model((array('url' => 'test')) }}
		{{ Form::label('prom_usages)', 'Tipo de tarifa:') }}
		{{ Form::text('range_usages', null, array('placeholder' => 'Rango de uso')) }}
			{{ Form::submit('Siguiente') }}
	{{ Form::close() }}