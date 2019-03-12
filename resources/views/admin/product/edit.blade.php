@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($product, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.product.update', $product->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'Наименование*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$product->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('catalog_id', 'Бренд*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('catalog_id', old('catalog_id',$product->catalog_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bodysmall', 'Артикул*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bodysmall', old('bodysmall',$product->bodysmall), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('body', 'Описание', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('body', old('body',$product->body), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('picture', 'Изображение', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('picture') !!}
        {!! Form::hidden('picture_w', 4096) !!}
        {!! Form::hidden('picture_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('type', 'Для кого', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('type', old('type',$product->type), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('price', 'Цена', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price', old('price',$product->price), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('procent', 'Процент', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('procent', old('procent',$product->procent), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('color', 'Материал*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('color', old('color',$product->color), array('class'=>'form-control', 'required'=>'required')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.product.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection