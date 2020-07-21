@extends('template')

@section('main')
<div id="mahasiswa">
	<h2>Tambah Mahasiswa</h2>
	{!! Form::open(['url' => 'mahasiswa']) !!}
	@include('mahasiswa.form', ['submitButtonText' => 'Simpan'])
	{!! Form::close() !!}

</div>
@stop

@section('footer')
<div id="footer">
	<p>&copy; 2020 Alia Ismayanti</p>
</div>
@stop