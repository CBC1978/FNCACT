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
                        <li class="breadcrumb-item"><a href="{{ route('auxiliary.home') }}">Auxiliaire</a></li>
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
                                    <span class="mt-3 ms-3">Retour à la liste</span>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="row g-3 needs-validation" novalidate>
                                <fieldset>1.Immatriculation
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">RCCM <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="validationCustom01"  required>
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez le numéro RCMM
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">N°IFU<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez le numéro IFU
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° CNSS</label>
                                            <input type="text" class="form-control" id="validationCustom03" >
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez le numéro CNSS
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">N° d'Agrément</label>
                                            <input type="text" class="form-control" id="validationCustom04" >
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez le numéro de votre agrément
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Année de création</label>
                                            <input type="date" class="form-control" id="validationCustom05" >
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez l'année de création
                                            </div>
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
                                            <input type="text" class="form-control" id="validationCustom06" required>
                                            <div class="invalid-feedback">
                                                Entrez la raison sociale.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Sigle</label>
                                            <input type="text" class="form-control" id="validationCustom07" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Boite postale</label>
                                            <input type="text" class="form-control" id="validationCustom07" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
                                                <div class="invalid-feedback">
                                                    Entrez votre email
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 1 (Fixe ou Portable)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="validationCustom08" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Téléphone 2</label>
                                            <input type="text" class="form-control" id="validationCustom09" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Fax</label>
                                            <input type="text" class="form-control" id="validationCustom10" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Ville<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="validationCustom10" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Adressage</label>
                                            <input type="text" class="form-control" id="validationCustom11" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Nom du premier responsable</label>
                                            <input type="text" class="form-control" id="validationCustom12" >
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
                                            <select class="form-select" id="validationCustom13" required>
                                                <option selected disabled value="">Choisir une option...</option>
                                                <option>Entreprise individuell (EI)</option>
                                                <option>Société à responsabilité limitée (SARL)</option>
                                                <option>Société anonyme (SA)</option>
                                                <option>Groupement d'intérêt économique (GIE)</option>
                                                <option>Société d'Etat </option>
                                                <option>Autres</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Activité principale<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="validationCustom12" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Activité secondaire</label>
                                            <input type="text" class="form-control" id="validationCustom12" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label">Type auxiliaire<span class="text-danger">*</span></label>
                                            <select class="form-select" id="validationCustom13" required>
                                                <option selected disabled value="">Choisir une option...</option>
                                                <option>Commissionnaire en douane agréé et transitaire</option>
                                                <option>Courtier maritime</option>
                                                <option>Société anonyme (SA)</option>
                                                <option>Groupeur, affréteur, messager, courtier, dépositaire</option>
                                                <option>Manutentionnaire </option>
                                            </select>
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
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <script src="../src/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script>
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    </script>
@endsection
