
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('DOCUMENTO') }}</label>
    <div>
        {{ Form::text('documento', $visita->documento, ['class' => 'form-control' .
        ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('VISITANTE') }}</label>
    <div>
        {{ Form::text('visitante', $visita->visitante, ['class' => 'form-control' .
        ($errors->has('visitante') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('visitante', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('TELEFONO') }}</label>
    <div>
        {{ Form::text('telefono', $visita->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ENTIDAD DEL VISITANTE') }}</label>
    <div>
        {{ Form::text('entidad_visitante', $visita->entidad_visitante, ['class' => 'form-control' .
        ($errors->has('entidad_visitante') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('entidad_visitante', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('AREA DONDE SE DIRIJE') }}</label>
    <div>
        {{ Form::text('area_destino', $visita->area_destino, ['class' => 'form-control' .
        ($errors->has('area_destino') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('area_destino', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('MOTIVO DE SU VISITA') }}</label>
    <div>
        {{ Form::text('motivo_visita', $visita->motivo_visita, ['class' => 'form-control' .
        ($errors->has('motivo_visita') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('motivo_visita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('HORA DE SU INGRESO') }}</label>
    <div>
        {{ Form::text('hora_ingreso', $visita->hora_ingreso, ['class' => 'form-control' .
        ($errors->has('hora_ingreso') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('hora_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('HORA DE SU SALIDA') }}</label>
    <div>
        {{ Form::text('hora_salida', $visita->hora_salida, ['class' => 'form-control' .
        ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"></small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">CANCELAR</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">REGISTRAR VISITA</button>
            </div>
        </div>
    </div>
