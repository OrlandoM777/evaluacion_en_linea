@extends('layouts.principal')
@section('content')
  @include('alerts.request')
    {!! Form::open(['route'=>'usuario.index','method'=>'POST'])!!}
     @include('usuario.forms.usr')
    <button class="btn btn-primary" type="submit">registrar</button>
    {!!Form::close()!!}
@stop