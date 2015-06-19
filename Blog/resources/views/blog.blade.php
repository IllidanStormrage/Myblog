@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">后台首页</div>

                    <div class="panel-body">

                        <a href="{{ URL('/') }}" class="btn btn-lg btn-primary">新增</a>
                        @foreach($blogs as $blog)
                            <a href="{{ URL('Archive/'.$blog->id) }}">
                            <hr>
                            <div class="blog">
                                <h2>{{$blog->Blog_title}}</h2>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection