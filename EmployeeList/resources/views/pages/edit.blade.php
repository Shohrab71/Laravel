@extends('master')

@section('content')



<div class="container">
  <form method="post" action="{{action('EmployeeCrudController@update', $id)}}">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name" value="{{$crud['name']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Gender</label>
      <div class="col-sm-10">
      
      <select name="gender" id="" class="form-control">
        <option value="{{$crud['gender']}}" selected>{{$crud['gender']}}</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
       
      </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Designation</label>
      <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Designation" name="designation" value="{{$crud['designation']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">District</label>
      <div class="col-sm-10">
      
      <select name="district" id="" class="form-control">
        <option value="{{$crud['district']}}" selected >{{$crud['district']}}</option>
        <option value="Chittagong">Chittagong</option>
        <option value="NarayanGanj">NarayanGanj</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Chandpur">Chandpur</option>
        <option value="Comilla">Comilla</option>
      </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>












@endsection