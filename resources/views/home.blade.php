@extends('adminlte::page') 

@section('title') 
    Home | Gestion des stagiaires
@endsection 

@section('content_header') 
    <h1>Dashboard</h1>
@endsection 

@section('content') 
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\Stagiaire::count() }}</h3>
                        <p>Stagiaires</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>      
                    <a href="{{ url('admin/stagiaires') }}" class="small-box-footer d-flex justify-content-center align-items-center pl-2">
                        plus d'infos..
                        <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>               
                </div>
            </div>
        </div>
    </div>
@endsection
