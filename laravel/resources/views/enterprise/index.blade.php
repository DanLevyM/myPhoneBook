@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <a href="{{ route('enterprises.show_form') }}" class="btn btn-primary btn-lg" role="button">Ajouter une entreprise</a>
                <div class="card-header">Liste des entreprises</div>

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
                        @foreach ($enterprises as $enterprise)
                        <tr>
                            <td  class="align-middle"><a href="{{ route('enterprises.details', $enterprise->id) }}">{{ $enterprise->name }}</a></td>
                            <td>{{ $enterprise->phone_number }}</td>
                            <td>{{ $enterprise->email }}</td>
                            <td>{{ $enterprise->postcode }}</td>
                            <td>
                            @can('edit-users')
                            <a href=""><button class="btn btn-primary">Editer</button></a>
                            @endcan
                            @can('delete-users')
                            <form action="{{ route('enterprises.destroy', $enterprise->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning">Supprimer</button>
                            </form>
                            @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
