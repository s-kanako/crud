@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>New Bio Data</h3>
        </div>
    </div>


    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Woops!</strong>There where some problems with your input.<br>
            <ul>
                @foreach ($errors as $error)
                <li>{($error)}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('biodata.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-12">
                <strong>Student Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="student name">            
            </div>
            <div class="col-md-12">
                <strong>Student Information:</strong>
                <textarea name="content" class="form-control" placeholder="Enter content" cols="80" rows="8"></textarea>
            </div>

            <div class="col-md-12">
                <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a> 
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>   
            </div>
        </div>    
    </form>

</div>
@endsection