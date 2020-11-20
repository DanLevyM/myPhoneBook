@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Nouveau collaborateur</h1><br>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('collaborateurs.create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Civilite</label>
                            <div class="col-md-6">
                                <select class="form-control" name="sexe" id="sexe-select">
                                    <option value="M">Monsieur</option>
                                    <option value="F">Madame</option>
                                    <option value="NB">Non-binaire</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Nom</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" name="last_name" class="form-control" required autocomplete="name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Prenom</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" name="first_name" class="form-control" required autocomplete="name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Adresse</label>
                            <div class="col-md-6">
                                <input id="address" type="text" name="address" class="form-control" required autocomplete="name" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">Code postal</label>
                            <div class="col-md-6">
                                <input id="postcode" type="text" name="postcode" class="form-control" required autocomplete="postal-code" autofocus>
                                @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Ville</label>
                            <div class="col-md-6">
                                <input id="city" type="text" name="city" class="form-control" required autocomplete="postal-code" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Telephone</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" name="phone_number" class="form-control" required autocomplete="tel-country-code" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control">Ajouter nouveau collaborateur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <button class="btn btn-outline-dark col-md-2 offset-md-10 mt-3 right"><a href="{{ route('enterprises.index') }}" style="text-decoration: none; color:#525864">Retour</a></button>    
        </div>
    </div>
</div>
@endsection
