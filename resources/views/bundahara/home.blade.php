@extends('layouts.bundahara')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary" style="color: white;">Dashboard</div>

                <div class="card-body row">
                    <div class="col-md-2">
                        <img src="https://cdn.pixabay.com/photo/2019/03/01/07/59/wallet-4027503_960_720.png" style="width: 100%;">
                    </div>
                    <div class="col-md-8 mt-5">
                        <p style="font-size: 30px">Saldo anda saat ini : <h1> @currency($semua) </h1></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
