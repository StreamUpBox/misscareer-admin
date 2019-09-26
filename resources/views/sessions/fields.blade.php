<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Session Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session', 'Session:') !!}
    {!! Form::text('session', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Numbering Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numbering', 'Numbering:') !!}
    {!! Form::text('numbering', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Current Applying Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_current_applying', 'Is Current Applying:') !!}
    {!! Form::text('is_current_applying', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sessions.index') !!}" class="btn btn-default">Cancel</a>
</div>
