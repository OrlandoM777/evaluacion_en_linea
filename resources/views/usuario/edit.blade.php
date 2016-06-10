@extends('layouts.principal')
@section('content')
    @include('alerts.request')
    {!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
       @include('usuario.forms.usr')
       <button class="btn btn-primary" type="submit">Actualizar</button>
    {!!Form::close()!!}
    {!! Form::open(['route'=>['usuario.update',$user->id],'method'=>'DELETE'])!!}
       <button class="btn btn-danger" type="submit">Eliminar</button>
    {!!Form::close()!!}
@stop