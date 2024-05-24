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
                        <li class="breadcrumb-item"><a href="">Outils </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Statistiques</li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Listes des acteurs</td>
                                            <td>
                                                <button type="button" class="btn btn-light mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal" data-bs-content="actors">
                                                    Filtre
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Liste des transporteurs selon le conditionnement</td>
                                            <td>
                                                <button type="button" class="btn btn-light mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal" data-bs-content="transporters">
                                                    Filtre
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Liste des chargeurs selon l’activité principale</td>
                                            <td>
                                                <button type="button" class="btn btn-light mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal" data-bs-content="shippers">
                                                    Filtre
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nature de la marchandise Importé</td>
                                            <td>
                                                <button type="button" class="btn btn-light mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal" data-bs-content="goods">
                                                    Filtre
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Premier Modal -->
                                <div class="modal fade bd-product-modal-import w-100" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" id="inputFormModalLabel">
                                                <h5 class="modal-title">Paramétrage des statistiques</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mt-0" id="dynamicFormContent">
                                                    <!-- Injection de formulaire -->
                                                </form>
                                                <!-- Bouton pour ouvrir le second modal -->
                                                <button type="button" class="btn btn-secondary mt-2" id="openSecondModalButton">
                                                    Liste des produits
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Annuler</button>
                                                <button type="button" class="btn btn-primary mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Imprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Premier Modal -->

                                  <!-- Second Modal -->
                                  <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="secondModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="secondModalLabel">Liste des produits</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table id="second-table" class="table dt-table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>

                                                            <th>Code</th>
                                                            <th>Libellé produit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>001450545</td>
                                                            <td>RIZ BRISSURES</td>

                                                        </tr>
                                                        <tr>
                                                            <td>022258740</td>
                                                            <td>MULETS ET BARDOTS VIVANTS</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Second Modal -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('src/assets/js/fncact/groupe/home.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('inputFormModal');
            modal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const content = button.getAttribute('data-bs-content');
                const form = document.getElementById('dynamicFormContent');

                let formContent = '';
                switch (content) {
                    case 'actors':
                        formContent = `
                        <div class="form-group">
                                <label for="legalStatus">Statut juridique :</label>
                                <select class="form-control" id="legalStatus">
                                    <option>SARL</option>
                                    <option>SAS</option>
                                    <option>SA</option>
                                    <option>Auto-entrepreneur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="transportOperation">Opération de transport :</label>
                                <select class="form-control" id="transportOperation">
                                    <option>Import</option>
                                    <option>Export</option>
                                    <option>Les deux</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="startDate">Date de début :</label>
                                <input type="date" class="form-control" id="startDate">
                            </div>
                            <div class="form-group">
                                <label for="endDate">Date de fin :</label>
                                <input type="date" class="form-control" id="endDate">
                            </div>
                            <div class="form-group">
                                <label for="dynamicSelect">Liste produit importé :</label>
                                  <!-- Bouton pour ouvrir le second modal -->
                                                <button type="button" class="btn btn-secondary mt-2" id="openSecondModalButton">
                                                    Liste des produits
                                                </button>
                            </div>
                        `;
                        break;
                    case 'transporters':
                        formContent = `
                        <div class="form-group">
                                <label for="legalStatus">Statut juridique :</label>
                                <select class="form-control" id="legalStatus">
                                    <option>SARL</option>
                                    <option>SAS</option>
                                    <option>SA</option>
                                    <option>Auto-entrepreneur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="packingType">Type de conditionnement :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="vrac_solide" id="vracSolide">
                                    <label class="form-check-label" for="vracSolide">Vrac solide</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="vrac_lique" id="vracLique">
                                    <label class="form-check-label" for="vracLique">Vrac liquide</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="roro" id="roro">
                                    <label class="form-check-label" for="roro">Roro</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="conteneur" id="conteneur">
                                    <label class="form-check-label" for="conteneur">Conteneur</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="conventionnel" id="conventionnel">
                                    <label class="form-check-label" for="conventionnel">Conventionnel</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="startDate">Date de début :</label>
                                <input type="date" class="form-control" id="startDate">
                            </div>
                            <div class="form-group">
                                <label for="endDate">Date de fin :</label>
                                <input type="date" class="form-control" id="endDate">
                            </div>
                        `;
                        break;
                    case 'shippers':
                        formContent = `
                        <div class="form-group">
                                <label for="mainOperations">Principales opérations :</label>
                                <select class="form-control" id="mainOperations">
                                    <option>Grossiste de riz</option>
                                    <option>Grossite quincaillerie</option>
                                    <option>Parfarmacie</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="legalStatus">Statut juridique :</label>
                                <select class="form-control" id="legalStatus">
                                    <option>SARL</option>
                                    <option>SAS</option>
                                    <option>SA</option>
                                    <option>Auto-entrepreneur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mainOperations">Principales opérations :</label>
                                <select class="form-control" id="mainOperations">
                                    <option>Import</option>
                                    <option>Export</option>
                                    <option>Les deux</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="startDate">Date de début :</label>
                                <input type="date" class="form-control" id="startDate">
                            </div>
                            <div class="form-group">
                                <label for="endDate">Date de fin :</label>
                                <input type="date" class="form-control" id="endDate">
                            </div>
                        `;
                        break;
                    case 'goods':
                        formContent = `
                        <button type="button" class="btn btn-secondary mt-2" id="openSecondModalButton">
                                                    Liste des produits
                                                </button>

                            <div class="form-group">
                                <label for="date1">Date de début :</label>
                                <input type="date" class="form-control" id="date1">
                            </div>
                            <div class="form-group">
                                <label for="date2">Date de fin :</label>
                                <input type="date" class="form-control" id="date2">
                            </div>
                        `;
                        break;
                    default:
                        formContent = '<p>Contenu par défaut</p>';
                }

                form.innerHTML = formContent;
            });


             // Ouvrir le second modal
             const openSecondModalButton = document.getElementById('openSecondModalButton');
            openSecondModalButton.addEventListener('click', function() {
                const secondModal = new bootstrap.Modal(document.getElementById('secondModal'));
                secondModal.show();
            });
        });

        // Initialiser la datatable pour le second modal
        $('#secondModal').on('shown.bs.modal', function () {
            $('#second-table').DataTable({
                // Configuration de la datatable
                searching: true,//recherche
                paging: true,//pagination
                info: true,//info
                lengthChange: true,//taille
                pageLength: 10,//nombre d'element
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json' //les langues(français)
                }
            });
        });
    </script>
@endsection
