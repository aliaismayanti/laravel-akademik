
	<div class="form-group">
		
	{!! Form::label ('nim', 'NIM:', ['class'=>'control-label']) !!}
	{!! Form::text ('nim', null, ['class' => 'form-control']) !!}
	
		</div>
		<div class="form-group">
			{!! Form::label ('nama', 'Nama:', ['class'=>'control-label']) !!}
	{!! Form::text ('nama', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label ('alamat', 'Alamat:', ['class'=>'control-label']) !!}
	{!! Form::text ('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
		</div>
		<div class="form-group">
			{!! Form::label ('jenis_kelamin', 'Jenis Kelamin:', ['class'=>'control-label']) !!}
	
			<div class="radio">
				<label>{!! Form::radio ('jenis_kelamin', 'L') !!} Laki-Laki</label>
			</div>
			<div class="radio">
				<label>{!! Form::radio ('jenis_kelamin', 'P') !!} Perempuan</label>
			</div>
			<div class="form-group">
			{!! Form::label ('prodi', 'Prodi:', ['class'=>'control-label']) !!}
	{!! Form::text ('prodi', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label ('jurusan', 'Jurusan:', ['class'=>'control-label']) !!}
	{!! Form::text ('jurusan', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label ('kelas', 'Kelas:', ['class'=>'control-label']) !!}
	{!! Form::text ('kelas', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label ('angkatan', 'Angkatan:', ['class'=>'control-label']) !!}
	{!! Form::text ('angkatan', null, ['class' => 'form-control']) !!}
		</div>
		</div>
		<div class="form-group">
			{!! Form::submit ($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close()!!}
</div>
