@extends('master');
@section('content');

<div class="container">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Designation</th>
        <th>District</th>
        <th colspan="2">Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($data as $info)
    <tr>
        <td>{{$info['id']}}</td>
        <td>{{$info['name']}}</td>
        <td>{{$info['gender']}}</td>
        <td>{{$info['designation']}}</td>
        <td>{{$info['district']}}</td>
        <td><a href="{{action('EmployeeCrudController@edit',$info['id'])}}" class="btn btn-success">Edit</a></td>
        <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="{{url('employee/create')}}" class="btn btn-primary">Add New</a>

</div>


@endsection