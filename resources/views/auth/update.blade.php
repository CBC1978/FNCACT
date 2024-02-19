@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/table/datatable/datatables.css')}}">

    <link href="{{ asset('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('auth.home') }}">Utilisateur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing">
                <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('auth.home') }}" type="button" class="mt-3 ms-3 btn">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="formUpdate" class="row g-3 needs-validation" action="{{ route('auth.updateUser') }}"  method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nom<span class="text-danger">*</span></label>
                                        <input type="text" value="{{$user->nom}}" class="form-control @error('nom') is-invalid @enderror" name="nom"  id="nom"  required>
                                        <input type="hidden" class="form-control " name="id_utilisateur" id="id_utilisateur" value="{{ $user->id}}" >
                                        @error('nom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Prénoms<span class="text-danger">*</span></label>
                                        <input type="text" value="{{$user->prenom}}" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" required>
                                        @error('prenom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Email<span class="text-danger">*</span></label>
                                        <input type="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Groupe<span class="text-danger">*</span></label>
                                        <select class="form-select operation @error('groupe') is-invalid @enderror" name="groupe" id="groupe"  required>
                                            @foreach($groupes as $groupe)
                                                @if($groupe->id == $user->fk_groupe->id)
                                                    <option  selected value="{{ $groupe->id }}">{{ $groupe->libelle }}</option>
                                                @endif
                                                <option value="{{ $groupe->id }}">{{ $groupe->libelle }}</option>
                                            @endforeach
                                        </select>
                                        @error('groupe')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Nom d'utilisateur <span class="text-danger">*</span></label>
                                        <input type="text" value="{{$user->username}}" class="form-control @error('username') is-invalid @enderror" name="username" id="username" required>
                                        @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Mot de passe<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Confirmez votre mot de passe</label>
                                        <input type="password" class="form-control " name="cpassword" id="cpassword" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" id="btnUpdateSave" type="submit">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('src/assets/js/fncact/user/form.js') }}"></script>
@endsection
