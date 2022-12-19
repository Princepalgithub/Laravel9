@extends('layouts.main')

@section('main-section')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel</h4>
                </div>
                <h4>Student
                        <a href="{{ url('student') }}" class="btn btn-danger float-end">Profile</a>
                    </h4>
                    <h4>Student
                        <a href="{{ url('student') }}" class="btn btn-danger float-end">Image Profile</a>
                    </h4>
                <div class="card-body">

                    <table class="table table-bordered table-striped", border = "1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->course }}</td>
                                <td>{{ $student->section }}</td>
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

@endsection