@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Пользователи</li>
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
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <input type="text" value="{{ $user->name  ?? old("name")}}" name="name" class="form-control" placeholder="Имя">
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user->surname  ?? old("surname")}}" name="surname" class="form-control" placeholder="surname">
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user->patronymic ?? old("patronymic")}}" name="patronymic" class="form-control" placeholder="patronymic">
                      </div>
                      <div class="form-group">
                        <input type="number" value="{{ $user->age  ?? old("age")}}" name="age" class="form-control" placeholder="age">
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user->address  ?? old("address")}}" name="address" class="form-control" placeholder="address">
                      </div>
                      <div class="form-group">
                        <select name="gender" class="form-control" id="exampleSelectGender">
                            <option disabled selected>Выберите пол</option>
                            <option value="1" {{ old('gender', $user->gender) == 1 ? 'selected' : '' }}>Мужчина</option>
                            <option value="2" {{ old('gender', $user->gender) == 2 ? 'selected' : '' }}>Женщина</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="Редактировать">
                      </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
