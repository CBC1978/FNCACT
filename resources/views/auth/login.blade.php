<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.partials.head')
    <link href="{{asset('layouts/modern-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/modern-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('src/assets/css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

<div class="auth-container d-flex">
    <div class="container mx-auto align-self-center">
        <div class="row">

            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="row">
                            @if(Session::has('fail'))
                                <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                            @endif

                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{ Session::get('success') }}</div>
                            @endif
                            <div class="col-md-12 mb-3">
                                <h2>Se connecter</h2>
                                <p>Entrez vos informations de connexion</p>
                            </div>
                            <form action="{{ route('auth.login') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nom d'utilisateur</label>
                                        <input type="text" name="username" id="username" value="{{ old('username' ) }}"
                                               class="form-control  @error('username') is-invalid @enderror" >
                                    </div>
                                    @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Connexion</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<script>
    setTimeout(()=>{
        $("div.alert").remove();
    },4000)//4s

</script>

</body>
</html>
