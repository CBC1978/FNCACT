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
                        <li class="breadcrumb-item"><a href="{{ route('auxiliary.home') }}">Auxiliaire</a></li>
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
                                    <a href="{{ route('auxiliary.home') }}" type="button" class="mt-3 ms-3 btn">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="row g-3 needs-validation" action="{{ route('auxiliary.updateAuxiliary') }}"  method="post">
                                @csrf
                                <fieldset>1.Immatriculation
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">RCCM<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('numero_rccm') is-invalid @enderror" name="numero_rccm"  id="numero_rccm" value="{{ $auxiliary->numero_rccm}}"  required>
                                            @error('numero_rccm')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">N°IFU<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('numero_ifu') is-invalid @enderror" name="numero_ifu" id="numero_ifu" value="{{ $auxiliary->numero_ifu}}" required>
                                            @error('numero_ifu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° CNSS</label>
                                            <input type="text" class="form-control " name="numero_cnss" id="numero_cnss" value="{{ $auxiliary->numero_cnss}}" >
                                            <input type="hidden" class="form-control " name="id_auxiliaire_transport" id="id_auxiliaire_transport" value="{{ $auxiliary->id}}" >
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° agrement</label>
                                            <input type="text" class="form-control @error('numero_agrement') is-invalid @enderror" name="numero_agrement" id="numero_agrement" value="{{ $auxiliary->numero_agrement}}">
                                            @error('numero_agrement')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Année de création</label>
                                            <input type="text" class="form-control @error('annee_creation') is-invalid @enderror" name="annee_creation" id="annee_creation" value="{{ $auxiliary->annee_creation}}">
                                            @error('annee_creation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
                                            <input type="text" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" id="raison_sociale" value="{{ $auxiliary->raison_sociale}}" required>
                                            @error('raison_sociale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Sigle</label>
                                            <input type="text" class="form-control @error('sigle') is-invalid @enderror" name="sigle" id="sigle" value="{{ $auxiliary->sigle}}" >
                                            @error('sigle')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Boite postale</label>
                                            <input type="text" class="form-control @error('boite_postale') is-invalid @enderror" name="boite_postale" id="boite_postale" value="{{ $auxiliary->boite_postale}}" >
                                            @error('boite_postale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $auxiliary->email}}" aria-describedby="inputGroupPrepend">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 1 (Fixe ou Portable)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('contact_1') is-invalid @enderror" name="contact_1" id="contact_1" value="{{ $auxiliary->contact_1}}" required>
                                            @error('contact_1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 2</label>
                                            <input type="text" class="form-control @error('contact_2') is-invalid @enderror" name="contact_2" id="contact_2"  value="{{ $auxiliary->contact_2}}" >
                                            @error('contact_2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Fax</label>
                                            <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" id="fax" value="{{ $auxiliary->fax}}">
                                            @error('fax')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Ville<span class="text-danger">*</span></label>
                                            <select class="form-select @error('ville') is-invalid @enderror" name="ville" id="ville"  required>
                                                <option value="{{ $auxiliary->fk_ville->id}}" selected >{{ $auxiliary->fk_ville->libelle}}</option>
                                                @foreach($villes as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->libelle }}</option>
                                                @endforeach
                                            </select>
                                            @error('ville')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Adressage</label>
                                            <input type="text" class="form-control @error('adressage') is-invalid @enderror" name="adressage" id="adressage" value="{{ $auxiliary->adressage}}" >
                                            @error('adressage')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Nom du premier responsable</label>
                                            <input type="text" class="form-control @error('nom_responsable') is-invalid @enderror" name="nom_responsable" id="nom_responsable" value="{{ $auxiliary->nom_responsable}}">
                                            @error('nom_responsable')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <br/>
                                <fieldset>
                                    3.Caractéristiques
                                    <br/><br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Statut juridique<span class="text-danger">*</span></label>
                                            <select class="form-select @error('statut_juridique') is-invalid @enderror" name="statut_juridique" id="statut_juridique" required>
                                                <option value="{{ $auxiliary->fk_statut_juridique->id}}" selected >{{ $auxiliary->fk_statut_juridique->libelle}}</option>
                                                @foreach($statutJuridiques as $statut)
                                                    <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                                @endforeach
                                            </select>
                                            @error('statut_juridique')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Type auxiliaire<span class="text-danger">*</span></label>
                                            <select class="form-select @error('type_auxiliaire') is-invalid @enderror" name="type_auxiliaire" id="type_auxiliaire" required>
                                                <option value="{{ $auxiliary->fk_type_auxiliaire->id }}" selected >{{ $auxiliary->fk_type_auxiliaire->libelle}}</option>
                                                @foreach($typeAuxiliarys as $typeAuxiliary)
                                                    <option value="{{ $typeAuxiliary->id }}">{{ $typeAuxiliary->libelle }}</option>
                                                @endforeach
                                            </select>
                                            @error('type_auxiliaire')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('src/assets/js/fncact/auxiliary/form.js') }}"></script>
@endsection

