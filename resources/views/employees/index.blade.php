@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        @foreach ($emps as $emp)
        <tr>
            <td>{{ $emp->name }}</td>
            <td>{{ $emp->age }}</td>
            <td>{{ $emp->email }}</td>
            <td style="display:  flex;">
                 <a class="btn btn-info" href="{{ route('employees.show',$emp->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$emp->id) }}">Edit</a>
                <form action="{{ route('employees.destroy',$emp->id) }}" method="POST" style="margin: 0px;">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection    
