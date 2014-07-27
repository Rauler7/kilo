@extends ('layouts.default')

@section('content')
	{{ Form::open(array('url' => 'usage')) }}
		{{ Form::label('fee_type', 'Tipo de tarifa:') }}
		{{ Form::text('real_amount', null, array('placeholder' => 'Monto')) }}
			{{ Form::submit('Siguiente') }}
	{{ Form::close() }}