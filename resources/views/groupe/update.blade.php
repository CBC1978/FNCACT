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
                        <li class="breadcrumb-item"><a href="{{ route('groupe.home') }}">Auxiliaire</a></li>
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
                                    <a href="{{ route('groupe.home') }}" type="button" class="mt-3 ms-3 btn">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        Retour à la liste
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="row g-3 needs-validation" action="{{ route('groupe.updateGroupe') }}"  method="post">
                                @csrf
                                <fieldset>
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Libellé<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('libelle') is-invalid @enderror" name="libelle"  id="libelle" value="{{ $groupe->libelle}}" required>
                                            <input type="hidden" class="form-control " name="id_groupe" id="id_groupe" value="{{ $groupe->id}}" >
                                            @error('libelle')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Description<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ $groupe->description}}" required>
                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>

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
    <script src="{{ asset('src/assets/js/fncact/groupe/form.js') }}"></script>
@endsection

