@extends('app')
@section('content')
<h4>
    <a href="{{URL('/blog')}}">⬅️返回首页</a>
</h4>

<h1 style="text-align: center; margin-top: 50px;">{{ $blog->Blog_title }}</h1>
<hr>
<div id="date" style="text-align: right;">
    {{ $blog->Blog_abstract }}
</div>
<div id="content" style="padding: 50px;">
    <p>
        {{ $blog->Blog_content }}
    </p>
</div>
@endsection