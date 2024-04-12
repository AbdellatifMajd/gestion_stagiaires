@extends('adminlte::page')
@section('title')
Gestion des stagiaires 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center">
                            <h2>Modification d'un stagiaire</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('stagiaires.update', $stagiaire->id)}}" method="post" class="card mt-3 p-3">
                            @csrf 
                            @method('PUT')
                            
                            <div class=" form-group mb-3">
                                <label for="nom">Nom </label>
                                <input type="text" class="form-control " style="width: 50%" name="nom" placeholder="Saisir le nom  " value="{{old('nom', $stagiaire->nom)}}">
                            </div>
                            
                            <div class=" form-group mb-3">
                                <label for="prenom">Prénom </label>
                                <input type="text" class="form-control " style="width: 50%" name="prenom" placeholder="Saisir le prénom  " value="{{old('prenom', $stagiaire->prenom)}}">
                            </div>


                            <div class=" form-group mb-3">
                                <label for="etablissement">Etablissement</label>
                                <input type="text" class="form-control " style="width: 50%" name="etablissement" placeholder="Saisir l'établissement " value="{{old('etablissement')}}">
                            </div>


                            <div class=" form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control " style="width: 50%" name="email" placeholder="Saisir l'email " value="{{old('email', $stagiaire->email)}}">
                            </div>

                            <div class=" form-group mb-3">
                                <label for="tel">Téléphne</label>
                                <input type="tel" class="form-control " style="width: 50%" name="tel" placeholder="Saisir le téléphone " value="{{old('tel', $stagiaire->tel)}}">
                            </div>

                            <div class=" form-group mb-3">
                                <label for="responsable">Résponsable</label>
                                <input type="text" class="form-control " style="width: 50%" name="responsable" placeholder="Saisir le responsable " value="{{old('responsable')}}">
                            </div>

                            <div class=" form-group mb-3">
                                <label for="date_debut">Date debut du stage</label>
                                <input type="date" class="form-control " style="width: 50%" name="date_debut" placeholder="Saisir la date debut du stage " value="{{old('date_debut', $stagiaire->date_debut)}}">
                            </div>

                            <div class=" form-group mb-3">
                                <label for="date_fin">Date fin du stage </label>
                                <input type="date" class="form-control " style="width: 50%" name="date_fin" placeholder="Saisir la date fin du stage " value="{{old('date_fin', $stagiaire->date_fin)}}">
                            </div>

                            <div class=" form-group mb-3">
                                <label for="service">Service</label>
                                <select name="service" class="form-control " value="{{old('service')}}" style="width: 50%">
                                    <option value="informatique">informatique</option>
                                    <option value="automatisme">automatisme</option>
                                    <option value="process">Process</option>
                                    <option value="mec">Maintenance méc</option>
                                    <option value="electricite">Maintenance éle</option>
                                    <option value="logistique">Logistique</option>
                                    <option value="Labo">Labo CTT</option>
                                    <option value="CQP"> CQP </option>
                                    <option value="transport"> Transport </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control bg-info">
                                    Modifier
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection