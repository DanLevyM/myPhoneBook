@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Modification entreprise</h1><br>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('enterprises.update', $enterprise) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom de l'entreprise</label>
                            <div class="col-md-6">
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ?? $enterprise->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Adresse</label>
                            <div class="col-md-6">
                                <input id="address" type="text" name="address" class="form-control" value="{{ old('address') ?? $enterprise->address }}" required autocomplete="name">
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
                                <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') ?? $enterprise->postcode }}" required autocomplete="postcode">
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
                                <input id="city" type="text" name="city" class="form-control" value="{{ old('city') ?? $enterprise->city }}" required autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Telephonne</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') ?? $enterprise->phone_number }}" required autocomplete="phone_number">
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
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $enterprise->email }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Modifier entreprise</button>
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
