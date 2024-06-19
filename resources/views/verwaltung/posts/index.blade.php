@extends('verwaltung.layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Статьи</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Список статей</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add post</a>
                            @if (count($posts))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Category</th>
                                            <th>User</th>
                                            <th>Tags</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>
                                                    @if($post->published == 1)
                                                        <span>Опубликовано</span>
                                                    @else
                                                        <span>Черновик</span>
                                                    @endif

                                                </td>
                                                <td>{{ $post->category->title }}</td>
                                                <td>{{ $post->user->name }}</td>
                                                <td>{{ $post->tags->pluck('title')->join(', ') }}</td>
                                                <td>{{ $post->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i
                                                                class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>Постов пока нет...</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
     
                        @if(count($posts))  
                          <div class="m-0 pl-3 pt-3 clearfix">
                              {{ $posts->links('pagination::bootstrap-4')}}
                          </div>
                        @endif  

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