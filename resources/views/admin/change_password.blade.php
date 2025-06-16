@extends('admin.admin_master')
@section('admin')
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">ПАНЕЛЬ УПРАВЛЕНИЯ</h4>
                  <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('change.password') }}">Профиль</a></li>
                                <li class="breadcrumb-item active">Смена пароля</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-9">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">Смена пароля</h4>
                        @if(count($errors))
                           @foreach($errors->all() as $error)
                              <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                           @endforeach
                        @endif
                        <form action="{{ route('update.password') }}" method="get">
                           @csrf

                           <div class="row mb-3">
                              <label for="example-text-input" class="col-sm-3 col-form-label">Старый пароль</label>
                              <div class="col-sm-9">
                                 <input name="old_password" class="form-control" type="password" id="old_password">
                              </div>
                           </div>

                            <div class="row mb-3">
                              <label for="example-text-input" class="col-sm-3 col-form-label">Новый пароль</label>
                              <div class="col-sm-9">
                                 <input name="new_password" class="form-control" type="password" id="new_password">
                              </div>
                           </div>

                            <div class="row mb-3">
                              <label for="example-text-input" class="col-sm-3 col-form-label">Повторите пароль</label>
                              <div class="col-sm-9">
                                 <input name="confirm_password" class="form-control" type="password" id="confirm_password">
                              </div>
                           </div>

                           <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Сменить пароль">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
@endsection