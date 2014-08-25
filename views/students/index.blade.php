@extends('layouts.student')

@section('main')
<p>{{link_to_route('student.create','Add student')}}</p>

<table>
    @if($studentlist -> count())

    <tr>
        <td> NAME </td>
        <td> CELL </td>
    </tr>
    @foreach($studentlist as $student)
    <tr>
        <td> {{$student -> name}} </td>
        <td> {{$student -> cell}} </td>
    </tr>
    @endforeach

</table>
@else
{{'No student'}}
@endif

@stop