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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                        </svg>
                                        Retour à la liste
                                    </a>
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
                                            <label for="validationCustom01" class="form-label">RCCM<span class="text-danger">*</span></label>
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
                                            <label for="validationCustom03" class="form-label">N° CBC</label>
                                            <input type="text" class="form-control" id="validationCustom04" >
                                            <div class="valid-feedback">
                                                Bien renseigné!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mettez le numéro CBC
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
                                        <div class="col-md-3">
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
                                            <input type="text" class="form-control" id="validationCustom14" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Activité sécondaire</label>
                                            <input type="text" class="form-control" id="validationCustom14" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Principal opération de transport<span class="text-danger">*</span></label>
                                            <select class="form-select operation" id="validationCustom14"  required>
                                                <option selected disabled value="">Choisir une option...</option>
                                                <option value="import">Import</option>
                                                <option value="export">Export</option>
                                                <option value="import/export">Import/Export</option>
                                            </select>
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
                            <div class="modal fade bd-product-modal-import" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Sélectionner un produit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Code produit</th>
                                                    <th>Libellé produit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value="1" id="input_check"></td>
                                                    <td id="code_product">OUA2018BF3456 </td>
                                                    <td id="libelle_product">TTS /BF</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value="1" id="input_check"></td>
                                                    <td id="code_product">OUA2002BF1098 </td>
                                                    <td id="libelle_product">Global Haucage-co LTD</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA1989BF123 </td>
                                                    <td>EKOM</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2009BF889</td>
                                                    <td>SOKAF</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2006BF1267 </td>
                                                    <td>AS BUSINESS</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2006BF1267 </td>
                                                    <td>AS BUSINESS</td>
                                                </tr>
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
                                        <div class="modal-body">
                                            <table id="style-2" class="table style-1 dt-table-hover non-hover">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Code produit</th>
                                                    <th>Libellé produit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value="1" id="input_check"></td>
                                                    <td id="code_product">OUA2018BF3456 </td>
                                                    <td id="libelle_product">TTS /BF</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value="1" id="input_check"></td>
                                                    <td id="code_product">OUA2002BF1098 </td>
                                                    <td id="libelle_product">Global Haucage-co LTD</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA1989BF123 </td>
                                                    <td>EKOM</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2009BF889</td>
                                                    <td>SOKAF</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2006BF1267 </td>
                                                    <td>AS BUSINESS</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>OUA2006BF1267 </td>
                                                    <td>AS BUSINESS</td>
                                                </tr>
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
        //Hide/Show field products
        $('#field_import').hide();
        $('#field_export').hide();
        var select_operation = $('.operation');
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
        var j=1;
        // Product import
        var btn_add_product = $('#btn_add_product_import');
        var wrapper_product = $('#wrapper_product_import');
        $(btn_add_product).click(function (){

            var input_checkboxes = document.querySelectorAll('#input_check');
            var code_product = document.querySelectorAll('#code_product');
            var libelle_product = document.querySelectorAll('#libelle_product');
            var data = [];
            for(i = 0; i< input_checkboxes.length; i++){
                if(input_checkboxes[i].checked){
                    var item = {
                        'code':code_product[i].textContent,
                        'libelle':libelle_product[i].textContent,
                    };
                    data.push(item);
                }
            }

            data.forEach(item =>{
                var newRow = `
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Produit ${j}</label>
                        <div class="input-group has-validation">
                                <span class="input-group-text" id="remove_product">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </span>
                            <input type="text" class="form-control" id="validationCustomUsername"  value="${item.libelle}">
                        </div>
                    </div>`;
                $(wrapper_product).append(newRow);
                j++;
            });

            input_checkboxes.forEach(item =>{
                if(item.checked)
                    item.checked = false;
            });
            $('.bd-product-modal-import').modal('hide');
        });

        $(wrapper_product).on("click","#remove_product", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove();
        });
        // End Product Import
        var k=1;
        // Product Export
        var btn_add_product = $('#btn_add_product_export');
        var wrapper_product = $('#wrapper_product_export');
        $(btn_add_product).click(function (){

            var input_checkboxes = document.querySelectorAll('#input_check');
            var code_product = document.querySelectorAll('#code_product');
            var libelle_product = document.querySelectorAll('#libelle_product');
            var data = [];
            for(i = 0; i< input_checkboxes.length; i++){
                if(input_checkboxes[i].checked){
                    var item = {
                        'code':code_product[i].textContent,
                        'libelle':libelle_product[i].textContent,
                    };
                    data.push(item);
                }
            }

            data.forEach(item =>{
                var newRow = `
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Produit ${j}</label>
                        <div class="input-group has-validation">
                                <span class="input-group-text" id="remove_product">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </span>
                            <input type="text" class="form-control" id="validationCustomUsername"  value="${item.libelle}">
                        </div>
                    </div>`;
                $(wrapper_product).append(newRow);
                k++;
            });

            input_checkboxes.forEach(item =>{
                if(item.checked)
                    item.checked = false;
            });
            $('.bd-product-modal-export').modal('hide');
        });

        $(wrapper_product).on("click","#remove_product", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove();
        });

        // End Product Export
         // var e;
         c1 = $('#style-1').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Affiche de _PAGE_ à _PAGES_ sur _TOTAL_",
                "sSearch": '',
                "sSearchPlaceholder": "Rechercher...",
                "sLengthMenu": " _MENU_",
            },
            "autoWidth": true,
            "lengthMenu": [5, 10],
            "pageLength": 5
        });
        multiCheck(c1);

             // var e;
             c2 = $('#style-2').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Affiche de _PAGE_ à _PAGES_ sur _TOTAL_",
                "sSearch": '',
                "sSearchPlaceholder": "Rechercher...",
                "sLengthMenu": " _MENU_",
            },
            "autoWidth": true,
            "lengthMenu": [5, 10],
            "pageLength": 5
        });
        multiCheck(c2);
    </script>


@endsection
