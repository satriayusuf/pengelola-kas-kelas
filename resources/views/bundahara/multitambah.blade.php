@extends('layouts.bundahara')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card shadow-sm ml-5">
				<h1 class="text-center pt-5 pb-5">TAMBAH MEDIA</h1>
				<div class="container">
					<form method="post" action="/multiproses" enctype="multipart/form-data">

						{{ csrf_field() }}
						<div class="form-group">
							<h3>Masukan Media</h3>
							<div class="col-md-5">
								<input type="file" class="uploads" style="margin-top: 20px;" name="file" onchange="previewFile()">
							</div>  
						</div>

						<div class="form-group">
							<label>Nama Media</label>
							<input type="text" name="name" class="form-control">

							@if($errors->has('name'))
							<div class="text-danger">
								{{ $errors->first('name')}}
							</div>
							@endif

						</div>

						<div class="form-group">
							<label>Waktu</label>
							<input type="text" readonly name="time" class="form-control" value="<?php
									date_default_timezone_set('Asia/Jakarta');
									echo date(' H:i:s');?>">

							@if($errors->has('time'))
							<div class="text-danger">
								{{ $errors->first('time')}}
							</div>
							@endif

						</div>

						<div class="form-group">
							<label>Tanggal</label>
							<input type="text" readonly name="date" class="form-control"  value="<?php
									date_default_timezone_set('Asia/Jakarta');
									echo date(' Y-m-d');?>" readonly="">

							@if($errors->has('date'))
							<div class="text-danger">
								{{ $errors->first('date')}}
							</div>
							@endif

						</div>

						<div class="form-group mt-5">
							<input type="submit" class="btn btn-success float-right" value="Simpan">
							<a href="{{route('multi')}}" class="btn btn-primary float-left">Kembali</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection