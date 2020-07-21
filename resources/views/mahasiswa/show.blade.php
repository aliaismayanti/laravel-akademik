@extends('template')


@section('main')
	<div id='mahasiswa'>
		<h2>Detail Mahasiswa</h2>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>NIM</th>
					<td>{{ $mahasiswa->nim }}</td>
				</tr>
				<tr>
					<th>Nama</th>
					<td>{{ $mahasiswa->nama }}</td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>{{ $mahasiswa->alamat }}</td>
				</tr>
				<tr>
					<th>JK</th>
					<td>{{ $mahasiswa->jenis_kelamin }}</td>
				</tr>
				<tr>
					<th>Prodi</th>
					<td>{{ $mahasiswa->prodi }}</td>
				</tr>
				<tr>
					<th>Jurusan</th>
					<td>{{ $mahasiswa->jurusan }}</td>
				</tr>
				<tr>
					<th>Kelas</th>
					<td>{{ $mahasiswa->kelas }}</td>
				</tr>
				<tr>
					<th>Angkatan</th>
					<td>{{ $mahasiswa->angkatan }}</td>
				</tr>
				
			</thead>
		</table>
	</div>
@stop

@section('footer')
	<div id='footer'>
		<p>&copy; 2020 Alia Ismayanti.uts</p>
	</div>
@stop