@extends('layouts.layout')
    @section('head')
        <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/table/datatable/datatables.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/dt-global_style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/custom_dt_custom.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/custom_dt_custom.css') }}">
    @endsection
    @section('content')
       <div class="layout-px-spacing">

           <div class="middle-content container-xxl p-0">
               <div class="page-meta">
                   <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ route('shipper.home') }}">Chargeur</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                       </ol>
                   </nav>
               </div>

               <div class="row layout-spacing">
                   <div class="col-lg-12">
                       <div class="statbox widget box box-shadow">
                           <div class="widget-content widget-content-area">
                               <div class="mt-2 ms-3">
                                   <a href="{{ route('shipper.store') }}" type="button" class="btn btn-light-primary">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                           <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                           <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                       </svg>
                                       Ajouter
                                   </a>
                               </div>
                               <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                   <thead>
                                       <tr>
                                           <th>Rccmsss</th>
                                           <th>Raison sociale</th>
                                           <th>Sigle</th>
                                           <th>Activité</th>
                                           <th>Opération</th>
                                           <th>Produit</th>
                                           <th class="text-center dt-no-sorting">Action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>OUA2018BF3456 </td>
                                           <td>TTS /BF</td>
                                           <td> TTS /BF</td>
                                           <td>Agro alimentaire</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Pates alimentaire</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Riz</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Sucre</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Huile de palme</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Miel</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>

                                       <tr>
                                           <td>OUA2002BF1098 </td>
                                           <td>Global Haucage-co LTD</td>
                                           <td> GLH</td>
                                           <td>Santé animale</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Produit</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>

                                       <tr>
                                           <td>OUA1989BF123 </td>
                                           <td>EKOM</td>
                                           <td>EKOM</td>
                                           <td>Mines</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Produit</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>

                                       <tr>
                                           <td>OUA2009BF889</td>
                                           <td>SOKAF</td>
                                           <td>SOKAF</td>
                                           <td>Electronique</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Produit</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>

                                       <tr>
                                           <td>OUA2006BF1267 </td>
                                           <td>AS BUSINESS</td>
                                           <td>ASB</td>
                                           <td>Equipement médical</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Produit</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>OUA2006BF1267 </td>
                                           <td>AS BUSINESS</td>
                                           <td>ASB</td>
                                           <td>Equipement médical</td>
                                           <td>Import</td>
                                           <td>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">1.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">2.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">3.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">4.Produit</span>
                                               </div>
                                               <div class="d-flex">
                                                   <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                   <span class="label label-success">5.Produit</span>
                                               </div>
                                           </td>
                                           <td class="text-center">
                                               <div class="dropdown">
                                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                   </a>

                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                       <a class="dropdown-item" href="javascript:void(0);">Détail</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                       <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                   </div>
                                               </div>
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    @endsection


    @section('script')
        <script src="{{asset('src/plugins/src/table/datatable/datatables.js')}}"></script>
        <script>
            // var e;
            c1 = $('#style-1').DataTable({

                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Afficher page _PAGE_ sur _PAGES_ de _TOTAL_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Rechercher...",
                    "sLengthMenu": "Afficher :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50,100],
                "pageLength": 10
            });
            multiCheck(c1);
        </script>
    @endsection
