@extends('template')


@section('main')
	<div id='mahasiswa'>
		<h2>Mahasiswa</h2>
		
		@if (!empty($mahasiswa_list))
		<table class="table">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>JK</th>
					<th>Prodi</th>
					<th>Jurusan</th>
					<th>Kelas</th>
					<th>Angkatan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($mahasiswa_list as $mahasiswa)
				<tr>
					<td>{{ $mahasiswa->nim }}</td>
					<td>{{ $mahasiswa->nama }}</td>
					<td>{{ $mahasiswa->alamat }}</td>
					<td>{{ $mahasiswa->jenis_kelamin }}</td>
					<td>{{ $mahasiswa->prodi }}</td>
					<td>{{ $mahasiswa->jurusan }}</td>
					<td>{{ $mahasiswa->kelas }}</td>
					<td>{{ $mahasiswa->angkatan }}</td>
					<td><div class="box-button">
						{{ link_to('mahasiswa/' . $mahasiswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
					</div>
						<div class="box-button">
						{{ link_to('mahasiswa/' . $mahasiswa->id. '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
					</div>
					
					<div class="box-button">
						{!! Form::open(['method' => 'DELETE', 'action' => ['mahasiswaController@destroy', $mahasiswa->id]]) !!}
						{!! Form::submit('Delete',['class' =>'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<p>Tidak ada data mahasiswa.</p>
		@endif
		<div class="table-nav">
		<!--<div class="table-button">-->
		<div class="jumlah-data">
			<strong> Jumlah mahasiswa : {{ $jumlah_mahasiswa }} </strong>
		</div>
		<div class="paging"></div>
		{{$mahasiswa_list->links()}}
		<!--<div class="pull-right">-->
			Pagination
		</div>
	</div>

	<div class="tombol-nav">
		<a href="{{url('mahasiswa/create')}}" class="btn btn-primary">Tambah mahasiswa</a>
	</div>
</div>
@stop

@section('footer')
	<div id='footer'>
		<p>&copy; Alia Ismayanti.uts</p>
	</div>
@stop