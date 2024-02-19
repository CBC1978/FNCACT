@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/table/datatable/datatables.css')}}">

    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('carrier.home') }}">Transporteur</a></li>
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
                                    <a href="{{ route('carrier.home') }}" type="button" class="mt-3 ms-3 btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                        </svg>
                                        Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="row g-3 needs-validation" method="post" action="{{ route('carrier.updateCarrier')}}">
                                @csrf
                                <fieldset>1.Immatriculation
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">RCCM<span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $carrier->numero_rccm }}" class="form-control @error('numero_rccm') is-invalid @enderror" name="numero_rccm" id="numero_rccm" required>
                                            @error('numero_rccm')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">N°IFU<span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $carrier->numero_ifu }}" class="form-control  @error('numero_ifu') is-invalid @enderror" name="numero_ifu" id="numero_ifu"  >
                                            @error('numero_ifu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° CNSS</label>
                                            <input type="text" value="{{ $carrier->numero_cnss }}"  name="numero_cnss" id="numero_cnss" class="form-control" >
                                            <input type="hidden" class="form-control " name="id_transporteur" id="id_transporteur" value="{{ $carrier->id}}" >
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° Licence</label>
                                            <input type="text" value="{{ $carrier->numero_licence }}" name="numero_licence" id="numero_licence" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Année de création</label>
                                            <input type="date" value="{{ $carrier->annee_creation }}" name="annee_creation" id="annee_creation" class="form-control" >
                                        </div>
                                    </div>
                                </fieldset>
                                <br/>
                                <fieldset>
                                    2.Identification
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Raison sociale<span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $carrier->raison_sociale }}" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" id="raison_sociale"  required>
                                            @error('raison_sociale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Sigle</label>
                                            <input type="text" value="{{ $carrier->sigle }}" class="form-control" name="sigle" id="sigle" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Boite postale</label>
                                            <input type="text" value="{{ $carrier->boite_postale }}" class="form-control" name="boite_postale" id="boite_postale" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" >@</span>
                                                <input type="text" value="{{ $carrier->email }}" class="form-control" name="email" id="email"  aria-describedby="inputGroupPrepend">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 1 (Fixe ou Portable)<span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $carrier->contact_1 }}" class="form-control @error('contact_1') is-invalid @enderror" name="contact_1" id="contact_1" required>
                                            @error('contact_1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 2</label>
                                            <input type="text" value="{{ $carrier->contact_2 }}" class="form-control" name="contact_2" id="contact_2" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Fax</label>
                                            <input type="text" value="{{ $carrier->fax }}" class="form-control" name="fax" id="fax" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Ville<span class="text-danger">*</span></label>
                                            <select class="form-select @error('ville') is-invalid @enderror" name="ville" id="ville" required>
                                                @foreach($villes as $ville)
                                                    <option value="{{ $carrier->fk_ville->id }}" selected>{{ $carrier->fk_ville->libelle }}</option>
                                                    <option value="{{ $ville->id }}">{{ $ville->libelle }}</option>
                                                @endforeach
                                            </select>
                                            @error('ville')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Adressage</label>
                                            <input type="text" value="{{ $carrier->adressage }}" class="form-control" name="adressage" id="adressage" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Nom du premier responsable</label>
                                            <input type="text" value="{{ $carrier->nom_responsable }}" class="form-control" name="nom_responsable" id="nom_responsable" >
                                        </div>
                                    </div>
                                </fieldset>
                                <br/>
                                <fieldset>
                                    3.Caractéristiques
                                    <br/><br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="validationCustom04" class="form-label">Statut juridique<span class="text-danger">*</span></label>
                                            <select class="form-select @error('statut_juridique') is-invalid @enderror" name="statut_juridique" id="statut_juridique" required>
                                                <option selected disabled value="">Choisir une option...</option>
                                                <option value="{{$carrier->fk_statut_juridique->id}}" selected> {{$carrier->fk_statut_juridique->libelle}} </option>
                                                @foreach($statutJuridiques as $statut)
                                                    <option value="{{$statut->id}}"> {{$statut->libelle}} </option>
                                                @endforeach
                                            </select>
                                            @error('statut_juridique')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <br>
                                <fieldset>
                                    4.Conditionnement
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 form-check">
                                            <label for="validationCustom03" class="form-check-label">Vrac solide</label>
                                            @if($carrier->vrac_solide)
                                                <input type="checkbox" checked name="vrac_solide"  class="form-check-input" id="vrac_solide" >
                                            @else
                                                <input type="checkbox" name="vrac_solide"  class="form-check-input" id="vrac_solide" >
                                            @endif
                                        </div>
                                        <div class="col-md-4  form-check">
                                            <label for="validationCustom03" class="form-check-label">Vrac liquide</label>
                                            @if($carrier->vrac_liquide)
                                                <input type="checkbox"  name="vrac_liquide" class="form-check-input" checked  id="vrac_liquide" >
                                            @else
                                                <input type="checkbox"  name="vrac_liquide" class="form-check-input"  id="vrac_liquide" >
                                            @endif
                                        </div>
                                        <div class="col-md-4  form-check">
                                            <label for="validationCustom03" class="form-check-label">Conventionnel</label>
                                            @if($carrier->conventionnel)
                                                <input type="checkbox" checked name="conventionnel" class="form-check-input" id="conventionnel" >
                                            @else
                                                <input type="checkbox" name="conventionnel" class="form-check-input" id="conventionnel" >
                                            @endif
                                        </div>
                                        <div class="col-md-4  form-check">
                                            <label for="validationCustom03" class="form-check-label">Conteneur</label>
                                            @if($carrier->conteneur)
                                                <input type="checkbox" checked name="conteneur" class="form-check-input" id="conteneur" >
                                            @else
                                                <input type="checkbox" name="conteneur" class="form-check-input" id="conteneur" >
                                            @endif
                                        </div>
                                        <div class="col-md-4  form-check">
                                            <label for="validationCustom03" class="form-check-label">Roulier/Roro</label>
                                            @if($carrier->roulier)
                                                <input type="checkbox" checked name="roulier" class="form-check-input" id="roulier" >
                                            @else
                                                <input type="checkbox" name="roulier" class="form-check-input" id="roulier" >
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>
                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Enregistrer</button>
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
    <script src="{{asset('src/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('src/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('src/assets/js/fncact/carrier/form.js') }}"></script>

@endsection
