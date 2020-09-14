@extends('layouts.app')

@section('content')
<h1>{{ $data->subject }}</h1>
  <div class="alert alert-info">
    <p>{{ $data->message }}</p>
    <p>{{ $data->name }} - {{ $data->email }}</p>
    <small>{{ $data->created_at }}</small>
    <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
    <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
  </div>
@endsection
