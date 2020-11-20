@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Liste des collaborateurs</h1></div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>    
                            <th scope="col">Prenom</th>    
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">id</th>
                            <th scope="col">Nom de l'entreprise</th>
                            <th scope="col">Numero de l'entreprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td class="align-middle">{{ $employee->last_name }}</td>
                            <td class="align-middle">{{ $employee->first_name }}</td>
                            <td class="align-middle">{{ $employee->phone_number }}</td>
                            <td class="align-middle">{{ $employee->email }}</td>
                            <td class="align-middle">{{ implode(', ', $employee->enterprises()->get()->pluck('id')->toArray()) }}</td>
                            <td class="align-middle">{{ implode(', ', $employee->enterprises()->get()->pluck('name')->toArray()) }}</td>
                            <td class="align-middle">{{ implode(', ', $employee->enterprises()->get()->pluck('phone_number')->toArray()) }}</td>
                            <td>
                            @can('edit-users')
                            <a href=""><button class="btn btn-primary">Editer</button></a>
                            @endcan
                            @can('delete-users')
                            <form action="{{ route('collaborateurs.destroy', $employee->id) }}" method="POST" class="d-inline">
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
        <a href="{{ route('collaborateurs.show_form') }}" class="btn btn-primary btn-lg" role="button">Ajouter un collaborateur</a>
        </div>
    </div>
</div>
@endsection
