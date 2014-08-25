@extends('layouts.student')

@section('main')
{{Form::open(array('route'=>'student.store'))}}
Name: {{Form::text('name')}}
<br>
Cell: {{Form::text('cell')}}
<br>
{{Form::submit('submit')}}
{{Form::open()}}
@stop