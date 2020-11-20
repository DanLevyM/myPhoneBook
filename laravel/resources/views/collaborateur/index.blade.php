@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Liste des collaborateurs</h1></div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Code postal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td  class="align-middle">{{ $employee->name }}</td>
                            <td>{{ $employee->phone_number }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->postcode }}</td>
                            <td>
                            @can('edit-users')
                            <a href=""><button class="btn btn-primary">Editer</button></a>
                            @endcan
                            @can('delete-users')
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                            @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <a href="" class="btn btn-primary btn-lg" role="button">Ajouter un collaborateur</a>
        </div>
    </div>
</div>
@endsection
