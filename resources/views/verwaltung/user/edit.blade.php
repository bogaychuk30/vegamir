@extends('verwaltung.layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Редактирование пользователя {{ $user->name }}</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('register.update', ['register' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">


                                <input type="number" name="id"
                                           class="d-none" id="id"
                                           value="{{ $user->id }}">
                     
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror" id="name"
                                           value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email"
                                           class="form-control @error('meta_title') is-invalid @enderror" id="password"
                                           value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password"
                                           class="form-control @error('password') is-invalid @enderror" id="password"
                                           value="">
                                </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
