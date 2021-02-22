<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KEUANGAN KELAS</title>

    <!-- Fonts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, 
        body 
        {   
           scroll-behavior: smooth;
           background-image: url(/image/background/bg.png);
           background-size: cover;
           background-attachment: fixed;
           color: white;
           font-family: 'Nunito', sans-serif;
           font-weight: 200;
           height: 100vh;
       }

       .navbar{
        background-color: #3498db;
    }

    .container a
    {
        color: white;
        position: relative;
    }

    .animasiketik
    {   
        width: 740px;
        white-space:nowrap;
        overflow:hidden;
        -webkit-animation: ketik 5s steps(50, end);
        animation: ketik 5s steps(50, end);
    }

    @keyframes ketik{
        from { width: 0; }
    }

    @-webkit-keyframes ketik{
        from { width: 0; }
    }
</style>
</head>
<body>



    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md shadow">
            <div class="container">
             <a class="navbar-brand " href="#" style="margin-right: 100px; font-size: 25px">
                 KASKES
             </a>
                         <!-- <a class="nav-link active js-scroll-trigger" href="#" style="margin-left:  650px; margin-right: 50px; border: 10px">
                             Home
                         </a>
                         <a class="nav-link" href="#" style="margin-right: 50px; border: 10px">
                             Multimedia
                         </a>
                         <a class="nav-link" href="#" style="margin-right: 50px; border: 10px">
                             Riwayat
                         </a> -->

                         @if (Route::has('login'))
                         <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a href="{{ route('login') }}" style="font-size: 15px;">MASUK</a>
                            @endauth
                        </div>
                        @endif

                    </div>
                </nav>
            </div>
            <div class="section1">
             <div class="container" style="margin-top: 180px;">

                <p style="font-size: 20px;" class="animasiketik"> KASKES adalah program Keuangan kelas berbasis web <br>  
                 yang berguna untuk
                 Mempermudah dalam mengolah data keuangan kelas
                 <br>   
                 Program KASKES ini berjalan untuk keuangan kelas <br>
                 Data keuangan akan direkam dengan lancar <br>
                 Saldo Kas Saat Ini 
             </p>
             <p style=" font-size: 60px;">@currency($semua)</p>
             <p style="font-size: 20px;" class="animasiketik"> Sehingga Dalam mengelola keuangan kelas<br>  
                 Menjadi mudah dan simpel dengan adanya program KASKES ini
         </div>
     </div>
 </div>
 </body>
</html>
