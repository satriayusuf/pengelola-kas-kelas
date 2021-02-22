@extends('layouts.bundahara')

@section('content')
<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center">
			edit data
		</div>
		<div class="card-body">
			<a href="{{route ('multi')}}" class="btn btn-primary">Kembali</a>
			<br/>
			<br/>


			<form method="post" action="/multiprosesupdate/{{ $update->id }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				{{ method_field('PUT') }}

				<div class="form-group">
					<label>Video</label>
					 @if($update->file == '')
							<div class="alert alert-warning">
								Tidak ada Video
							</div>
							@else
							<div class=" col-md col-sm mt-3" >
								<video width="50%" height="50%" controls="">
									<source src="{{ asset('file/'.$update->file) }}">
									</video>
									<p style="color: red">*Harus Pilih video Lagi!</p>
								</div>
								@endif
					<input type="file" class="uploads form-control" style="margin-top: 20px;" name="file"> 

					@if($errors->has('file'))
					<div class="text-danger">
						{{ $errors->first('file')}}
					</div>
					@endif

				</div>

				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="name" class="form-control"  value=" {{ $update->name }}">

					@if($errors->has('name'))
					<div class="text-danger">
						{{ $errors->first('name')}}
					</div>
					@endif

				</div>



				<div class="form-group">
					<label>Tanggal</label>
					<input type="text" name="date" class="form-control" value=" {{ $update->date }}">

					@if($errors->has('date'))
					<div class="text-danger">
						{{ $errors->first('date')}}
					</div>
					@endif

				</div>

				<div class="form-group">
					<label>Waktu</label>
					<input type="" name="time" class="form-control"  value=" {{ $update->time }} ">

					@if($errors->has('time'))
					<div class="text-danger">
						{{ $errors->first('time')}}
					</div>
					@endif

				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>

			</form>

		</div>
	</div>
</div>
@endsection