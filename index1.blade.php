@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="{{ url('students') }}" class="btn btn-primary float-end">Add Student</a>
                   
                    <br>
                        <a href="{{ url('students') }}" class="btn btn-primary float-end">Back</a><br>
                        <a href="{{ url('save-students') }}" class="btn btn-primary float-end">Add Image</a><br>
                        </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped" border=2px>
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>Name</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                               
                                <td>
                               <img src="{{ asset('uploads/students/'.$item->image) }}" height="30" width="50" alt="image">
                               </td>
                               <td>
                            
                                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-primary btn-sm">Delete</a>
                               
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection