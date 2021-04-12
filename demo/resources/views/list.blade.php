@extends('app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col"><a href="{{URL::Route('add')}}" class="btn btn-success" role="button" aria-pressed="true">Add</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->address}}</td>
                <td><a href="{{URL::Route('edit',$employee->id )}}" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
                <a href="{{URL::Route('delete',$employee->id )}}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a></td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection
