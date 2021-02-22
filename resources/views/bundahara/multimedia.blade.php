@extends('layouts.bundahara')

@section('content')
<!-- <div class="container">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="card shadow-sm ml-5 pb-3">
					<div>
						<h1 class="text-center pt-5 pb-5">MULTIMEDIA</h1>
						<a href="{{route('multitambah')}}" class="btn btn-primary float-right mr-5">+ TAMBAH VIDEO</a>
					</div>
					<center>
						<div class="row">
							@foreach($multi as $vid)
							@if($vid->file == '')
							<div class="alert alert-warning">
								Tidak ada Video
							</div>
							@else
							<div class=" col-md col-sm mt-3" >
								<video width="90%" height="auto" controls="">
									<source src="{{ asset('video/'.$vid->video) }}">
									</video>

								</div>
								@endif
								@endforeach
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="container">
	<div class="card mt-5">
		<div class="card-header text-center bg-primary">
		</div>
		<div class="card-body">
			<h3 style="text-align: center;">Multimedia</h3>
			<a href="{{route ('multitambah')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
			<br />
			<br />
			<table id="tabeldata" class="table table-bordered table-hover table-striped">
				<thead>
					<tr> 
						<th>Video</th>
						<th>Nama</th>
						<th>Tanggal</th>
						<th>Waktu </th>
						<th> </th>
					</tr>
				</thead>
				<tbody>
					@foreach($multi as $p)
					<tr>
						<td>
							@if($vid->file == '')
							<div class="alert alert-warning">
								Tidak ada Video
							</div>
							@else
							<div class=" col-md col-sm mt-3" >
								<video width="50%" height="50%" controls="">
									<source src="{{ asset('file/'.$p->file) }}">
									</video>

								</div>
								@endif
							</td>
							<td>{{ $p->name }}</td>
							<td>{{ $p->date }}</td>
							<td>{{ $p->time }}</td>
							<td>
								<a href="/multiupdate/{{ $p->id }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
								<a href="/multihapus/{{ $p->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
					
				</table>
			</div>
		</div>
		 <script type="text/javascript">
  $(document).ready(function(){
    $('#tabeldata').DataTable();
});
</script>
	</div>

	@endsection