<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    {!! Form::label('Nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::text('Nama', null, ['required','class' => 'form-control required']) !!}
        {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    {!! Form::label('Alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::text('Alamat', null, ['required','class' => 'form-control required']) !!}
        {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('JenisKelamin') ? 'has-error' : ''}}">
    {!! Form::label('JenisKelamin', 'Jeniskelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::text('JenisKelamin', null, ['required','class' => 'form-control required']) !!}
        {!! $errors->first('JenisKelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('TempatLahir') ? 'has-error' : ''}}">
    {!! Form::label('TempatLahir', 'Tempatlahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::text('TempatLahir', null, ['required','class' => 'form-control required']) !!}
        {!! $errors->first('TempatLahir', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('TglLahir') ? 'has-error' : ''}}">
    {!! Form::label('TglLahir', 'Tgl lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::date('TglLahir', null, ['required','class' => 'form-control required']) !!}
        {!! $errors->first('TglLahir', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('NoKtp') ? 'has-error' : ''}}">
    {!! Form::label('NoKtp', 'Noktp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6 required">
        {!! Form::text('NoKtp', null, ['required','class' => 'form-control required ']) !!}
        {!! $errors->first('NoKtp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Password') ? 'has-error' : ''}}">
    {!! Form::label('Password', 'Password', ['class' => 'col-md-4 control-label required']) !!}
    <div class="col-md-6 required">
        {!! Form::password('Password', null,  [ 'required','class' => 'form-control required']) !!}
        {!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
