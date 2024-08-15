@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Ползователи</li>
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
                                <a href="{{ route("admin.users.edit", $user->id) }}" class="btn btn-primary">Редактировать</a>
                          </div>
                            <form action="{{route("admin.users.delete", $user->id)}}" method="post">
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
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                      <td>name</td>
                                      <td>{{ $user->name }}</td>
                                  </tr>
                                  <tr>
                                    <td>last_name</td>
                                    <td>{{ $user->surname }}</td>
                                </tr>
                                <tr>
                                    <td>patronymic</td>
                                    <td>{{ $user->patronymic }}</td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>age</td>
                                    <td>{{ $user->age }}</td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td>{{ $user->genderTitle }}</td>
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
