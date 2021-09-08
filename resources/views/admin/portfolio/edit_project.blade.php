@extends('admin.layouts.base')

@section('content')

    <h1>Редактировать проект</h1>
    <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.portfolio.index')}}">Cписок
                    категорий</a></li>
        </ol>
    </nav>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <b>Ошибки:</b>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @elseif(!empty(request()->get('success')))
        <div class="alert alert-success">
            Данные успешно сохранены!
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="bi bi-pencil-fill"></span>
                    Добавить
                </div>
                <div class="card-body">
                    <form action="{{route('admin.project.update', ['portfolio' => $portfolio_id, $project])}}" method="POST" class="form py-4"
                          enctype="multipart/form-data">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Контент страницы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Галлерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
                            </li>
                        </ul>
                        @csrf
                        @method('PATCH')
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <input type="hidden" name="project_category_id" value="{{$portfolio_id}}">
                                <div class="form-group row border-bottom py-3">
                                    <label for="projectName" class="col-sm-2 col-form-label">
                                        Название проекта</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="headline" id="projectName" value="{{$project->headline}}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="projectDescription" class="col-sm-2 col-form-label">
                                        Краткое описание проекта</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="projectDescription" class="form-control" rows="5">{{$project->description}}</textarea>

                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label class="col-sm-2 col-form-label">Обложка проекта</label>
                                    <div class="image-upload-container" style="max-width:600px;">
                                        <div class="image-edit">
                                            <input class="image-upload" name="cover" type='file'
                                                   accept=".png, .jpg, .jpeg, .gif, .svg"/>
                                            <label class="btn-image-upload"> <span class="bi bi-card-image"></span></label>
                                        </div>
                                        <div class="image-preview-container"
                                             style="width: 300px; height: 150px; position: relative;">
                                            <div class="image-preview" data-init-image="{{assetImage($project->cover)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="content" class="col-sm-2 col-form-label">
                                        Контент</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="content" name="content">{{$project->content}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                                <input name="galleryData" id="galleryData" type="hidden">
                                <div id="vue-gallery">
                                    <gallery
                                            :images-data="images"
                                            result-id="galleryData"
                                    >
                                    </gallery>
                                </div>

                                <script>
                                    var vueGallery = new Vue({
                                        el: '#vue-gallery',
                                        data: function () {
                                            return {
                                                'images': {!! json_encode($photos) !!}
                                            }
                                        }
                                    })
                                </script>
                            </div>
                            <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-title" class="col-sm-2 col-form-label">
                                        Meta-title
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title" id="meta-title"
                                               value="{{  $project->meta_title  }}">
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-description" class="col-sm-2 col-form-label">
                                        Meta-description
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_description" id="meta-description"
                                          rows="5">{{ $project->meta_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom py-3">
                                    <label for="meta-keywords" class="col-sm-2 col-form-label">
                                        Meta-keywords
                                    </label>
                                    <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_keywords" id="meta-keywords"
                                          rows="5">{{ $project->meta_keywords }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.config.defaultLanguage = 'en';
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.project.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
        });
    </script>
@endsection
