<div class="form-group {{ $errors->has('Pelajaran') ? 'has-error' : ''}}">
    {!! Form::label('Pelajaran', 'Pelajaran', ['required','class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Pelajaran', null, ['required','class' => 'form-control']) !!}
        {!! $errors->first('Pelajaran', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Kelas') ? 'has-error' : ''}}">
    {!! Form::label('Kelas', 'Kelas', ['required','class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Kelas', null, ['required','class' => 'form-control']) !!}
        {!! $errors->first('Kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Jurusan') ? 'has-error' : ''}}">
    {!! Form::label('Jurusan', 'Jurusan', ['required','class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Jurusan', null, ['required','class' => 'form-control']) !!}
        {!! $errors->first('Jurusan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
