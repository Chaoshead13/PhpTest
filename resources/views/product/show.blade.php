@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категория</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Категории</li>
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
                <div class="col-12" >
                    <div class="card" >
                        <div class="card-header d-flex p-3" >
                          <div class="mr-3">
                                <a href="{{ route("admin.products.edit", $product->id) }}" class="btn btn-primary">Редактировать</a>
                          </div>
                            <form action="{{route("admin.products.delete", $product->id)}}" method="post">
                              @csrf
                              @method("delete")
                              <input type="submit" class="btn btn-danger" value="удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>
                                    <tr>
                                        <td>id</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                      <td>title</td>
                                      <td>{{ $product->title }}</td>
                                  </tr>
                                  <tr>
                                    <td>description</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>content</td>
                                    <td>{{ $product->content }}</td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td><img src="{{asset("storage/" . $product->preview_image)}}" alt="preview_image" class="w-50"></td>
                                </tr>
                                <tr>
                                    <td>price</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>count</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
