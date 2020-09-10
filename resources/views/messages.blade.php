@extends('layouts.app')

@section('content')
<h1>Все сообщения</h1>
  @foreach($data as $el)
  <div class="alert alert-info">
    <h3>{{ $el->subject }}</h3>
    <p>{{ $el->email }}</p>
    <small>{{ $el->created_at }}</small>
    <a href="#"><button class="btn btn-warning">Детальней</button></a>
  </div>
  @endforeach
@endsection
