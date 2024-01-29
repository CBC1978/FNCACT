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
                        <li class="breadcrumb-item active" aria-current="page">Détail</li>
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
                            <fieldset>1.Immatriculation
                                <br/>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">RCCM<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->numero_rccm }}"  readonly>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">N°IFU<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->numero_ifu }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">N° CNSS</label>
                                        <input type="text" class="form-control "  value="{{ $shipper->numero_cnss }}" readonly>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">N° CBC</label>
                                        <input type="text" class="form-control" value="{{ $shipper->numero_cbc }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Année de création</label>
                                        <input type="date" class="form-control"  value="{{ $shipper->annee_creation }}" readonly>
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
                                        <input type="text" class="form-control" value="{{ $shipper->raison_sociale }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Sigle</label>
                                        <input type="text" class="form-control" value="{{ $shipper->sigle }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Boite postale</label>
                                        <input type="text" class="form-control" value="{{ $shipper->boite_postale }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustomUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" class="form-control" value="{{ $shipper->email }}" readonly aria-describedby="inputGroupPrepend">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Téléphone 1 (Fixe ou Portable)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->contact_1 }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Téléphone 2</label>
                                        <input type="text" class="form-control" value="{{ $shipper->contact_2 }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Fax</label>
                                        <input type="text" class="form-control" value="{{ $shipper->fax }}" readonly >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Ville<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->ville }}" readonly >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Adressage</label>
                                        <input type="text" class="form-control" value="{{ $shipper->adressage }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Nom du premier responsable</label>
                                        <input type="text" class="form-control" value="{{ $shipper->nom_responsable }}" readonly >
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
                                        <input type="text" class="form-control" value="{{ $shipper->statut_juridique }}" readonly >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Activité principale<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->activite_principale }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Activité sécondaire</label>
                                        <input type="text" class="form-control" value="{{ $shipper->activite_secondaire }}" readonly >
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label for="validationCustom03" class="form-label">Principal opération de transport<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $shipper->operation_transport }}" readonly>
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset id="field_import">
                                5.Principaux produits à l'importation
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Produit</label>
                                        <input type="text" class="form-control" id="validationCustomUsername"  value="${item.libelle}">
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset id="field_export">
                                5.Principaux produits à l'exportation
                                <br>
                                <br>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".bd-product-modal-export" id="btn_product_export">Ajouter</button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Produit</label>
                                        <input type="text" class="form-control" id="validationCustomUsername"  value="${item.libelle}">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script>
        $('#style-1 tr').click(function (event) {
            if (event.target.type !== 'checkbox') {
                $(':checkbox', this).trigger('click');
            }
        });
        $('#style-2 tr').click(function (event) {
            if (event.target.type !== 'checkbox') {
                $(':checkbox', this).trigger('click');
            }
        });

        //Hide/Show field products
        $('#field_import').hide();
        $('#field_export').hide();
        var select_operation = $('.operation');
        $('#field_import').show();
        $('#field_export').hide();
        (select_operation).change(function(){
            if(this.value == 'import'){
                $('#field_import').show();
                $('#field_export').hide();
            }
            if(this.value == 'export'){
                $('#field_export').show();
                $('#field_import').hide();
            }
            if(this.value == 'import/export'){
                $('#field_import').show();
                $('#field_export').show();
            }
        });

    </script>


@endsection
