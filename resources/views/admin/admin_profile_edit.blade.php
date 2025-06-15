@extends('admin.admin_master')
@section('admin')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<div class="page-content">
    	<div class="container-fluid">
        	<div class="row">
        		<div class="col-12">
        			<div class="card">
        				<div class="card-body">
        					<h4 class="card-title">Редактировать профиль</h4>
        					<form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        						@csrf

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Имя</label>
        							<div class="col-sm-9">
        								<input name="name" class="form-control" type="text" value="{{ $editData->name }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Логин</label>
        							<div class="col-sm-9">
        								<input name="username" class="form-control" type="text" value="{{ $editData->username }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Эл. почта</label>
        							<div class="col-sm-9">
        								<input name="email" class="form-control" type="text" value="{{ $editData->email }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Фото профиля</label>
        							<div class="col-sm-9">
        								<input name="profile_image" class="form-control" type="file" id="image">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label"> </label>
        							<div class="col-sm-9">
        								<img id="showImage" class="rounded avatar-lg" src="{{ asset('backend/images/small/dnvmaster.jpg')}}" alt="Avatar">
        							</div>
        						</div>
        						
        						<input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Обновить">

        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>

    <script type="text/javascript">
    	$(document).ready(function(e) {
    		$('#image').change(function(e){
    			var reader = new FileReader();
    			reader.onload = function(e) {
    				$('#showImage').attr('src',e.target.result);
    			}
    			reader.readAsDataURL(e.target.files['0']);
    		});
    	});
    </script>
@endsection