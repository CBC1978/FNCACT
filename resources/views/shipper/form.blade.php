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
                        <li class="breadcrumb-item"><a href="{{ route('shipper.home') }}">Chargeur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing">
                <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('shipper.home') }}" type="button" class="mt-3 ms-3 btn">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="row g-3 needs-validation" action="{{ route('shipper.storeShipper') }}"  method="post">
                                @csrf
                                <fieldset>1.Immatriculation
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">RCCM<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('numero_rccm') is-invalid @enderror" name="numero_rccm"  id="numero_rccm"  required>
                                            @error('numero_rccm')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">N°IFU<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('numero_ifu') is-invalid @enderror" name="numero_ifu" id="numero_ifu" required>
                                            @error('numero_ifu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° CNSS</label>
                                            <input type="text" class="form-control " name="numero_cnss" id="numero_cnss" >
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° CBC</label>
                                            <input type="text" class="form-control @error('numero_cbc') is-invalid @enderror" name="numero_cbc" id="numero_cbc" >
                                            @error('numero_cbc')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Année de création</label>
                                            <input type="text" class="form-control @error('annee_creation') is-invalid @enderror" name="annee_creation" id="annee_creation" >
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
                                            <input type="text" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" id="raison_sociale" required>
                                            @error('raison_sociale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Sigle</label>
                                            <input type="text" class="form-control @error('sigle') is-invalid @enderror" name="sigle" id="sigle" >
                                            @error('sigle')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Boite postale</label>
                                            <input type="text" class="form-control @error('boite_postale') is-invalid @enderror" name="boite_postale" id="boite_postale" >
                                            @error('boite_postale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="inputGroupPrepend">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 1 (Fixe ou Portable)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('contact_1') is-invalid @enderror" name="contact_1" id="contact_1" required>
                                            @error('contact_1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 2</label>
                                            <input type="text" class="form-control @error('contact_2') is-invalid @enderror" name="contact_2" id="contact_2" >
                                            @error('contact_2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Fax</label>
                                            <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" id="fax" >
                                            @error('fax')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Ville<span class="text-danger">*</span></label>
                                            <select class="form-select @error('ville') is-invalid @enderror" name="ville" id="ville" required>
                                                <option selected disabled>Choisir une option...</option>
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
                                            <input type="text" class="form-control @error('adressage') is-invalid @enderror" name="adressage" id="adressage" >
                                            @error('adressage')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Nom du premier responsable</label>
                                            <input type="text" class="form-control @error('nom_responsable') is-invalid @enderror" name="nom_responsable" id="nom_responsable" >
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
                                                <option selected disabled>Choisir une option...</option>
                                                @foreach($statutJuridiques as $statut)
                                                    <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                                @endforeach
                                            </select>
                                            @error('statut_juridique')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Activité principale<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('activite_principale') is-invalid @enderror" name="activite_principale" id="activite_principale" required>
                                            @error('activite_principale')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Activité sécondaire</label>
                                            <input type="text" class="form-control @error('activite_secondaire') is-invalid @enderror" name="activite_secondaire" id="activite_secondaire" >
                                            @error('activite_secondaire')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="validationCustom03" class="form-label">Principal opération de transport<span class="text-danger">*</span></label>
                                            <select class="form-select operation @error('operation_transport') is-invalid @enderror" name="operation_transport" id="operation_transport"  required>
                                                <option selected value="import">Import</option>
                                                <option value="export">Export</option>
                                                <option value="import/export">Import/Export</option>
                                            </select>
                                            @error('operation_transport')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <br>
                                <fieldset id="field_import">
                                    4.Principaux produits à l'importation
                                    <br>
                                    <br>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".bd-product-modal-import" id="btn_product_import">Ajouter</button>
                                    <div class="row" id="wrapper_product_import"></div>
                                </fieldset>
                                <br>
                                <fieldset id="field_export">
                                    5.Principaux produits à l'exportation
                                    <br>
                                    <br>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".bd-product-modal-export" id="btn_product_export">Ajouter</button>
                                    <div class="row" id="wrapper_product_export"></div>
                                </fieldset>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                                </div>
                            </form>

                            {{--Modal Product Import--}}
                            <div class="modal fade bd-product-modal-import w-100" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Sélectionner un produit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            <table id="style-1" class="table style-1 dt-table-hover hover">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Code produit</th>
                                                    <th>Libellé produit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($produits as $produit)
                                                    <tr>
                                                        <td><input type="checkbox" value="{{ $produit->id }}" id="input_check_import" name="input_check_import"></td>
                                                        <td id="code_product">{{ $produit->code }} </td>
                                                        <td id="libelle_product">{{ $produit->libelle }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary" id="btn_add_product_import">Sélectionner</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End modal --}}

                            {{--Modal Product Export--}}
                            <div class="modal fade bd-product-modal-export" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Sélectionner un produit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            <table id="style-2" class="table style-1 dt-table-hover non-hover">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Code produit</th>
                                                    <th>Libellé produit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($produits as $produit)
                                                    <tr>
                                                        <td><input type="checkbox" value="{{ $produit->id }}" id="input_check"></td>
                                                        <td id="code_product_export">{{ $produit->code }} </td>
                                                        <td id="libelle_product_export">{{ $produit->libelle }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary" id="btn_add_product_export">Sélectionner</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End modal --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('src/assets/js/fncact/shipper/form.js') }}"></script>
@endsection
