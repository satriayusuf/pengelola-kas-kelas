@extends('layouts.bundahara')

@section('content')
<div class="container">
	<div class="card w=75 panel-body mt-5 pb-3">
		<p style="text-align: center; font-size: 30px;margin-top: 20px;"> Data Pemasukan</p>
		<div class="ml-5">
	<a href="{{ route('form')}}" class="btn btn-primary top-right">+TAMBAH</a>
	</div>

		<div class="container mt-5" style="width: 80%">
		<table id="tabel-data" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nama siswa</th>
					<th>Tanggal</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data->name}}</td>
					<td>{{$data->date}}</td>
					<td>@currency($data->jumlah)</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Jumlah Masuk</td>
					<td>@currency($total)</td>
				</tr>
			</tfoot>
		</table>
		</div>
	</div>
</div>
<br>
<br>

<div class="container">
	<div class="card w=75 panel-body mt-5 pb-3">
		<p style="text-align: center; font-size: 30px;margin-top: 20px;"> Data Pengeluaran</p>
		<div class="ml-5">
	<a href="{{ route('datakeluar')}}" class="btn btn-primary top-right">+TAMBAH</a>
	</div>

		<div class="container mt-5" style="width: 80%">
		<table id="data_table" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Deskripsi</th>
					<th>Tanggal</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($datakeluar as $data)
				<tr>
					<td>{{$data->deskripsi}}</td>
					<td>{{$data->date}}</td>
					<td>@currency($data->jumlahkeluar)</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Jumlah Keluar</td>
					<td>@currency($totalkeluar)</td>
				</tr>
			</tfoot>
		</table>
		</div>
	</div>
</div>
<br>
<br>
 
 <script type="text/javascript">
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#data_table').DataTable();
});
  </script>





@endsection