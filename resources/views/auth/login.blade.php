<!doctype html>
<html lang="en">
    <head>        
        <meta charset="utf-8" />
        <title>Войти в аккаунт</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="{{ url('/') }}" class="auth-logo">
                                    <img src="{{ asset('backend/images/logo-dark.png') }}" height="30" class="logo-dark mx-auto" alt="DnvMaster">
                                    <img src="{{ asset('backend/images/logo-light.png') }}" height="30" class="logo-light mx-auto" alt="DnvMaster">
                                </a>
                            </div>
                        </div>
                        <h4 class="text-muted text-center font-size-18"><b>Вход</b></h4>
                        <div class="p-3">
                            <form class="form-horizontal mt-3" action="{{ route('login')}}" method="POST">
                                @csrf
                                 <div class="form-group mb-3 row">
                                     <div class="col-12">
                                         <input class="form-control" type="text" name="username" id="username" placeholder="Логин" required="">
                                     </div>
                                 </div>

                                 <div class="form-group mb-3 row">
                                     <div class="col-12">
                                         <input class="form-control" type="password" id="password" name="password" placeholder="Пароль" required="">
                                     </div>
                                 </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember_me name="remember">
                                            <label class="form-label ms-1" for="customCheck1">Запомнить</label>
                                        </div>
                                    </div>
                                 </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Войти</button>
                                    </div>
                                 </div>

                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Забыли пароль?</a>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{ route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> Создать аккаунт</a>
                                    </div>
                                </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/js/app.js') }}"></script>
    </body>
</html>

