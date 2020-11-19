@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <a href="{{ route('enterprises.show_form') }}">Ajouter une entreprise</a>
                <div class="card-header">Liste des utilisateurs</div>
                    @foreach($enterprises as $enterprise)
                        <h2>{{ $enterprise->name }}</h2>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
