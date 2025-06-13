<!doctype html>
<html lang="en">
    <head>        
        <meta charset="utf-8" />
        <title>Регистрация</title>
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
                        <h4 class="text-muted text-center font-size-18"><b>Восстановление пароля</b></h4>
                        <div class="p-3">
                            <p class="text-muted font-size=16 mb-2">Забыли пароль? Нет проблем. Просто сообщите нам свой адрес электронной почты, и мы вышлем вам ссылку для сброса пароля, которая позволит вам выбрать новый.</p>
                            <form class="form-horizontal mt-3" action="{{ route('password.email') }}"" method="POST">
                                @csrf
                                 <div class="form-group mb-3 row">
                                     <div class="col-12">
                                         <input class="form-control" type="email" name="email" id="email" placeholder="Введите email" required="">
                                     </div>
                                 </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Восстановить</button>
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

