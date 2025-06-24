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
                                <li class="breadcrumb-item"><a href="{{ route('about.page') }}">О нас</a></li>
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
                            <h4 class="card-title">О нас</h4>

                            <form action="{{ route('update.about') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $about->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Заголовок</label>
                                    <div class="col-sm-9">
                                        <input name="title" class="form-control" type="text" value="{{ $about->title }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Краткий заголовок</label>
                                    <div class="col-sm-9">
                                        <input name="short_title" class="form-control" type="text" value="{{ $about->short_title }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Краткое описание</label>
                                    <div class="col-sm-9">
                                        <textarea name="short_description" class="form-control" rows="5">{{ $about->short_description }}</textarea>
                                    </div>
                                </div>

                                 <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Полное описание</label>
                                    <div class="col-sm-9">
                                        <textarea id="elm1" name="long_description" class="form-control" rows="5">{{ $about->long_description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Изображение</label>
                                    <div class="col-sm-9">
                                        <input name="about_image" class="form-control" type="file" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-9">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($about->about_image)) ? url($about->about_image) : url('upload/no_image.jpg') }}" alt="about_image">

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