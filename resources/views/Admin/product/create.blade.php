@extends('layouts.main')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить Продукт</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Продукты</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
        
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <form action="{{ route("admin.products.store")}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Название" value="{{old("title")}}">
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="Описание">
                @error('description')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Контент"></textarea>
                @error('content')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="number" step="0.01" name="price" class="form-control" placeholder="Цена">
              </div>
              <div class="form-group">
                <input type="number" step="0.01" name="old_price" class="form-control" placeholder="Старая цена">
              </div>
              <div class="form-group">
                <input type="number" name="count" class="form-control" placeholder="Кол-во">
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="custom-file">
                    <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Загрузка</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="category_id" class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled>Выберите категорию</option>
                  @foreach ($categories  as $category)
                  <option value="{{$category->id}}"
                    {{ $category->id == old("category_id") ? "selected" : ""}}                 
                    >{{$category->title}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <select name = "tag_ids[]" class="tags" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                  @foreach ($tags as $tag)
                  <option {{is_array(old("tag_ids")) &&  in_array($tag->id, old("tag_ids")) ? "selected" : ""}} value="{{$tag->id}}">{{$tag->title}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <select name = "colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                  @foreach ($colors as $color)
                  <option {{is_array(old("colors")) &&  in_array($color->id, old("colors")) ? "selected" : ""}} value="{{$color->id}}">{{$color->title}}</option>
                  @endforeach
                  
                 
                </select>
              </div>
              <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="создать">
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection