@extends('template')

@section('main')
<div id="mahasiswa">
	<h2>Edit Mahasiswa</h2>

	{!! Form::model($mahasiswa, ['method' => 'PATCH', 'action' => ['mahasiswaController@update', $mahasiswa->id]]) !!}
	@include('mahasiswa.form', ['submitButtonText' => 'Update'])
	{!! Form::close() !!}
	
</div>
@stop

@section('footer')

@stop

