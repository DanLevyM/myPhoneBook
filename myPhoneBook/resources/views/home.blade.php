@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1 class="card-title">Welcome !</h1>
                    
                    @can('edit-users')
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-lg btn-block">Liste des utilisateurs</a>
                    @endcan

                    @can('edit-users')
                    <a href="{{ route('enterprises.index') }}" class="btn btn-primary btn-lg btn-block">Liste des entreprises</a>
                    @endcan
                    
                    @can('see-users')
                    <a href="{{ route('collaborateurs.index') }}" class="btn btn-primary btn-lg btn-block">Liste des collaborateurs</a>                    
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
