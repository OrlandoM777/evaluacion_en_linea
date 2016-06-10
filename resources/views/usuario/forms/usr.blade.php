<div class="form-group">
        {!!Form::label('nombre:')!!}
        {!!Form::text('name',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
          {!!Form::label('correo:')!!}
          {!!Form::email('email',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        <label for="">password:</label>
            <input type="password" class="form-control" name="password">
    </div>