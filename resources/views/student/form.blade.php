@extends('welcome')
@section('content')
<div class="container">
<h1 style="margin-left:40px">Create</h1>
<form class="form-horizontal" role="form" style="margin-top:50px" action="/store" method="POST">
{{csrf_field()}}
<div class="form-group">
<label class="control-label col-sm-2" for="questionname">Questionair Name</label>
<div class="col-sm-6">
<input class="form-control" name="questionname" placeholder="Enter Questionair Name">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="duration">Duration</label>
<div class="col-sm-2">
<input class="form-control" name="duration" placeholder="Enter Duration">
</div>
<div class="col-sm-2">
<div class="form-group">
  <select class="form-control" id="" name="time">
    <option value="minutes">Minutes</option>
    <option value="hours">Hours</option>
  </select>
</div>
</div>
</div>
<div class="form-group">
<label style="margin-left: 90px">Can Resume ?</label>
<label style="margin-left: 40px"><input type="radio" name="radio" value="yes">Yes</label>
<label style="margin-left: 40px"><input type="radio" name="radio" value="no">No</label>
</div>
<div class="form-group" style="margin-left: 200px">
<input class="btn btn-primary" type="submit" value="Save">
</div>




</form>

@include('student.error')
</div>
@endsection