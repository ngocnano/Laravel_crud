@extends('app')

@section('content')
    @if($employee == null)
        <h1>Add</h1>
    <form method="POST" action="{{URL::Route('save')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text"  class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter address">
        </div>
        <input type="submit">
    </form>
    @else
        <h1>Edit</h1>
        <form method="POST" action="{{URL::Route('save')}}">
            @csrf
            <input type="text" name="id" hidden value="{{$employee->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" value="{{$employee->name}}" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" value="{{$employee->address}}" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter address">
            </div>
            <input type="submit">
        </form>
    @endif

    <form>

@endsection
