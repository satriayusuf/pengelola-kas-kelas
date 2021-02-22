@extends('layouts.bundahara')

@section('content')
<div class="container">
	<div class="card pb-3">
		<div class="container">
			<form method="post" action="{{route('prosesdata')}}" class="mt-5" enctype="multipart/form-data">
				<p style="text-align: center; font-size: 30px;">Tambah Pengeluaran</p>
				{{ csrf_field() }}
				<div class="form-group">
					<label>Deskripsi</label>
					<input type="text" name="deskripsi" class="form-control" placeholder="Contoh 'Membeli Spidol' ">

					@if($errors->has('deskripsi'))
					<div class="text-danger">
						{{ $errors->first('deskripsi')}}
					</div>
					@endif

				</div>

				<div class="form-group">
					<label>Tanggal</label>
					<input type="text" readonly name="date" class="form-control" value="<?php
					date_default_timezone_set('Asia/Jakarta');
					echo date(' d-m-Y');?>">

					@if($errors->has('date'))
					<div class="text-danger">
						{{ $errors->first('date')}}
					</div>
					@endif

				</div>

				<div class="form-group">
					<label>Jumlah</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Rp</span>
						</div>
						<input type="number"  name="jumlahkeluar" class="form-control" >
						@if($errors->has('jumlahkeluar'))
						<div class="text-danger">
							{{ $errors->first('jumlahkeluar')}}
						</div>
						@endif
					</div>
				</div>

				<div class="form-group mt-5">
					<input type="submit" class="btn btn-success float-right" value="Simpan">
					<a href="{{route('data')}}" class="btn btn-primary float-left">Kembali</a>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection