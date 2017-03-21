@extends('welcome')
@section('content')
<h1 style="margin-left:110px">Questionairs</h1>

<div class="container">
<h4 style="float:right"><a href="/questionairs/create">Add Questionair</a></h3>
<div class="table-responsive" style="margin-top:50px">
<table class="table table-bordered table-striped">
<thead>
<tr>
<td>Id</td>
<td>Name</td>
<td>No of Questions</td>
<td>Duration</td>
<td>Time</td>
<td>Resumeable</td>
<td>Action</td>
</tr>
</thead>
@foreach($question as $questions)
<tbody>
<tr>

        <td>{{$questions->id}}</td>
        <td>{{$questions->question_name}}</td>
        <td><a href="/questionairs/{{$questions->id}}/add">Add</a></td>
        <td>{{$questions->duration}}</td>
        <td>{{$questions->time}}</td>
        <td>{{$questions->resume}}</td>
        <td><a href="/edit/{{$questions->id}}">Edit</a>  | <a href="/delete/{{$questions->id}}">Delete</a></td>
      
      </tr>
</tbody>
  @endforeach
</table>
</div>
</div>
@endsection