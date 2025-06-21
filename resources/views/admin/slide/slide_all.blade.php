@extends('admin.admin_master')
@section('admin')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<div class="page-content">
    	<div class="container-fluid">

             <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">ПАНЕЛЬ УПРАВЛЕНИЯ</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('slider') }}">Слайдер</a></li>
                                <li class="breadcrumb-item active">Редактирование</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        	<div class="row">
        		<div class="col-12">
        			<div class="card">
        				<div class="card-body">
        					<h4 class="card-title">Редактирование слайдера</h4>
        					<form action="{{ route('update.slider') }}" method="post" enctype="multipart/form-data">
        						@csrf

                                <input type="hidden" name="id" value="{{ $slider->id }}">
        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Заголовок</label>
        							<div class="col-sm-9">
        								<input name="title" class="form-control" type="text" value="{{ $slider->title }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">Краткий текст</label>
        							<div class="col-sm-9">
        								<input name="short_title" class="form-control" type="text" value="{{ $slider->short_title }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label">URL адрес</label>
        							<div class="col-sm-9">
        								<input name="video_url" class="form-control" type="text" value="{{ $slider->video_url }}" id="example-text-input">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label"> Изображение слайдера</label>
        							<div class="col-sm-9">
        								<input name="slider" class="form-control" type="file" id="image">
        							</div>
        						</div>

        						<div class="row mb-3">
        							<label for="example-text-input" class="col-sm-2 col-form-label"> </label>
        							<div class="col-sm-9">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($slider->slider)) ? url('upload/slider/'. $slider->slider) : url('upload/no_image.jpg') }}"
                                    alt="Slider">
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
    	$(document).ready(function() {
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