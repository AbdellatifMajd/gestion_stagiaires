@extends('adminlte::page') 

@section ('plugins.Datatables', true)


@section('title') 
    Gestion des stagiaires
@endsection 

@section('content') 
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h2>Listes des stagiaires <strong>CTT Managem group</strong></h2>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-stripped">
                                 <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Etablissement</th>
                                        <th>E-mail</th>
                                        <th>Téléphone</th>
                                        <th>Service</th>
                                        <th>Responsable</th>
                                        <th>Date debut</th>
                                        <th>Date fin</th>
                                        <th>Actions</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    @foreach ($stagiaires as $key => $stagiaire)
                                    <tr>
                                        <td>{{$stagiaire->nom}}</td>
                                        <td>{{$stagiaire->prenom}}</td>
                                        <td>{{$stagiaire->etablissement}}</td>
                                        <td>{{$stagiaire->email}}</td>
                                        <td>{{$stagiaire->tel}}</td>
                                        <td>{{$stagiaire->service}}</td>
                                        <td>{{$stagiaire->responsable}}</td>
                                        <td>{{$stagiaire->date_debut}}</td>
                                        <td>{{$stagiaire->date_fin}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            

                                            <a href="{{route('stagiaires.edit', $stagiaire->id)}}" class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                            </a>

                                            <form id="deleteForm" action="{{route('stagiaires.destroy', $stagiaire->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf 
                                            </form>
                                            <button type="submit"  class="btn btn-sm btn-danger" onclick="deleteStg()">
                                            <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3">
        <p>Tous droits réservés © {{ date('Y') }}</p>
    </footer>

@endsection


@section ('js')

    <script>
        
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip', 
                "buttons" : [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        })
        function deleteStg (){

            Swal.fire({
            title: "Êtes-vous sûr(e) ?",
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, vas-y!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("deleteForm").submit();
            }
        });

        }
    </script>

    @if(session()->has('success'))

    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{(session()->get('success'))}}",
        showConfirmButton: false,
        timer: 2500
        });






    </script>   
    @endif

@endsection



