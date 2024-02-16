@extends('layouts.layout')
    @section('head')
        <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/table/datatable/datatables.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/dt-global_style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/custom_dt_custom.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/custom_dt_custom.css') }}">
    @endsection
    @section('content')
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
       <div class="layout-px-spacing">

           <div class="middle-content container-xxl p-0">
               <div class="page-meta">
                   <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ route('auxiliary.home') }}">Auxiliaire</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                       </ol>
                   </nav>
               </div>

               <div class="row layout-spacing">
                   <div class="col-lg-12">
                       <div class="statbox widget box box-shadow">
                           <div class="widget-content widget-content-area">
                               <div class="mt-2 ms-3">
                                   <a href="{{ route('auxiliary.getForm') }}" type="button" class="btn btn-light-primary">
                                       <i class="fa fa-plus" aria-hidden="true"></i>
                                       Ajouter
                                   </a>
                                   <button type="button" class="btn btn-light-success" id="btnUpdate">
                                       <i class=" fa fa-edit" aria-hidden="true"></i>
                                       Modifier
                                   </button>

                                   <button type="button" class="btn btn-light-danger" id="btnDelete">
                                       <i class=" fa fa-edit" aria-hidden="true"></i>
                                       Supprimer
                                   </button>
                                   <a href="{{ route('auxiliary.getForm') }}" type="button" class="btn btn-light-info">
                                       <i class="fa fa-print" aria-hidden="true"></i>
                                       Imprimer
                                   </a>
                               </div>
                               <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                   <thead>
                                       <tr>
                                           <th></th>
                                           <th>Rccm</th>
                                           <th>Raison sociale</th>
                                           <th>Sigle</th>
                                           <th>Type auxiliaire</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @php
                                       $i =1;
                                       @endphp
                                        @foreach($auxiliarys as $auxiliary)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"  class="form-check-input" name="input_check" id="input_check" value="{{ $auxiliary->id }}" >
                                                </td>
                                                <td>{{ $auxiliary->numero_rccm}}</td>
                                                <td>{{ $auxiliary->raison_sociale}}</td>
                                                <td>{{ $auxiliary->sigle}}</td>
                                                <td>{{ $auxiliary->fk_type_auxiliaire->libelle}}</td>
                                            </tr>
                                            @php
                                                $i =1;
                                            @endphp
                                        @endforeach
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
        <script src="{{ asset('src/assets/js/fncact/auxiliary/home.js') }}"></script>
    @endsection
