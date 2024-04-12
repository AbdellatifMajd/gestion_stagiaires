<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">   

</head>
<body>
    @extends('layouts.app') 
@section('title') 
    Login | Gestion des stagiaires
@endsection 

@section('content') 
    <div class="container">
        <div class="row my-5">
            <div class="col-8 my-3 mx-auto text-center">
                <div class="card ">
                    <div class="card-header bg-white d-flex justify-content-center align-items-center">
                        <div class="logo-left">
                            <img src="managem_logo.png" alt="Logo 1">
                        </div>
                        <div class="p-2 mx-5">bienvenue dans votre application <strong>gestion des stagiaires</strong></div>
                        <div class="logo-right">
                            <img src="ctt_managem_logo.png" alt="Logo 2">
                        </div>
                    </div>
                    
                        @guest 
                            <div class="card-body bg-light">
                                <a href="{{url('/login')}}" class="btn btn-outline-info" style="width: 100%">Login</a>
                            </div>
                        @endguest
                        @auth 
                            <div class="card-body bg-light">
                                <a href="{{url('admin/home')}}" class="btn btn-outline-info">Home</a>
                            </div>
                        @endauth                    
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
