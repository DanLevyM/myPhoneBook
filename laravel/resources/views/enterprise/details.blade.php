@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>{{ $enterprise->name }}</h1></div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Adresse</th>
                            <th scope="col">Code postal</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $enterprise->address }}</td>
                            <td>{{ $enterprise->postcode }}</td>
                            <td>{{ $enterprise->city }}</td>
                            <td>{{ $enterprise->phone_number }}</td>
                            <td>{{ $enterprise->email }}</td>
                            <td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
