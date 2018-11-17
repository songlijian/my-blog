
@extends('../header')

@section('content')
<div >
     <p>我的文章列表:</p>

</div>
   
@foreach($lists as $list)
    <p><a href="/article/info?id={{$list->id}}">{{$list->title}}</a></p>
@endforeach

@endsection
