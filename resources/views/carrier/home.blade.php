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
                        <li class="breadcrumb-item"><a href="{{ route('carrier.home') }}">Transporteur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="mt-2 ms-3">
                                <a href="{{ route('carrier.getForm') }}" type="button" class="btn btn-light-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
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
                                <a href="{{ route('shipper.getForm') }}" type="button" class="btn btn-light-info">
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
                                    <th>N° Licence</th>
                                    <th>Conditionnement</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i =1;
                                    @endphp
                                    @foreach($carriers as $carrier)
                                        <tr>
                                            <td>
                                                <input type="checkbox"  class="form-check-input" name="input_check" id="input_check" value="{{ $carrier->id }}" >
                                            </td>
                                            <td>{{ $carrier->numero_rccm}}</td>
                                            <td>{{ $carrier->raison_sociale}}</td>
                                            <td>{{ $carrier->sigle}}</td>
                                            <td>{{ $carrier->numero_licence}}</td>
                                            <td>
                                                @if($carrier->conditionnement)
                                                    @foreach($carrier->conditionnement as $condition)
                                                        <div class="d-flex">
                                                            <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                            <span class="label label-success">{{$i}}. {{ $condition->condition->libelle }}</span>
                                                        </div>
                                                        @php
                                                            $i ++;
                                                        @endphp
                                                    @endforeach
                                                @endif
                                            </td>
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
    <script src="{{ asset('src/assets/js/fncact/carrier/home.js') }}"></script>
@endsection
