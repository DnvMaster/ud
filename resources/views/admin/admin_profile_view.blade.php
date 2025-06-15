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
                                <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Профиль</a></li>
                                <li class="breadcrumb-item active">Пользователи</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-lg-6">
            		<div class="card">
            			<br>
            			<img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') }}" alt="Image-profile">
            			<div class="card-body">
            				<h4 class="card-title">Логин: {{ $adminData->username }}</h4>
            				<hr>
            				<h4 class="card-title">Имя: {{ $adminData->name }}</h4>
            				<h4 class="card-title">Е-мэйл: {{ $adminData->email }}</h4>
            				<hr>
            				<a class="btn btn-outline-success" href="{{ route('admin.edit')}}">Изменить профиль</a>
            			</div>
            		</div>
            	</div>
            </div>
           
      </div>
   </div>
@endsection