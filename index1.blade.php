@extends('layouts.main')

@section('main-section')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel</h4>
                </div>
             
                <div class="card-body">
                <h4>Student
                        <a href="{{ url('students') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                    <div>
                    <h4>Student
                        <a href="{{ url('add-student') }}" class="btn btn-danger float-end">Logout</a>
                    </h4>
                    
                    <table class="table table-bordered table-striped", border = "1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                              
                               <td>
                               <img src="{{ asset('uploads/students/'.$student->image) }}" height="30" width="50" alt="image">
                                </td>
                                <td>
                                    <a href="{{url('edit-student/'.$student->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                <a href="{{ url('delete-student/'.$student->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
</div>

@endsection