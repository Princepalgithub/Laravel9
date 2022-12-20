@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Student</a>
                   
                    <br>
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Back</a> <br>
                        <a href="{{ url('student') }}" class="btn btn-primary float-end">Image</a> <br>
                        </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped" border=2px>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->section }}</td>
                                <td>
                                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-primary btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="float-end">
                        {{ $student->links() }}
                    </div>
<style>
    .w-5{
        display:none;
    }
    </style>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection