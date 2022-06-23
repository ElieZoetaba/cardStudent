@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                    <thead class="border border-0">
                        <tr class="border border-0">
                            <th class="border border-0">Registration number</th>
                            <th class="border border-0">Name</th>
                            <th class="border border-0">Cycle</th>
                            <th class="border border-0">Level</th>
                            <th class="border border-0">Year</th>
                            <th class="border border-0">Photo</th>
                            <th class="border border-0">Action</th>
                        </tr>
                    </thead>
                    <tfoot class="border border-0">
                        <tr class="border border-0">
                            <th class="border border-0">Registration number</th>
                            <th class="border border-0">Name</th>
                            <th class="border border-0">Cycle</th>
                            <th class="border border-0">Level</th>
                            <th class="border border-0">Year</th>
                            <th class="border border-0">Photo</th>
                            <th class="border border-0">Action</th>
                        </tr>
                    </tfoot>
                    @foreach ($students as $student)
                    <tbody class="border-bottom-1 border">
                        <tr class="border border-0">
                            <td class="border border-0">{{ $student->registration_number }}</td>
                            <td class="border border-0">{{ $student->name }}</td>
                            <td class="border border-0">{{ $student->cycle }}</td>
                            <td class="border border-0">{{ $student->level }}</td>
                            <td class="border border-0">{{ $student->year }}</td>
                            <td class="border border-0">
                                
                                <img src="{{ asset('storage/'.$student->photo) }}" alt="{{ $student->name }}" width="100"
                                    height="100">
                            </td>
                            <td class="border border-0 d-flex">
                                <form action="{{ url('student.destroy', $student) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                                <a href="{{ url('student.edit', $student) }}" title="Edit">
                                    <button class="btn btn-info mx-1 shadow-sm bg-gradient bg rounded" data-toggle="tooltip"
                                        data-placement="top">!</button>
                                </a>
                                <a href="{{ route('student.show', $student) }}" title="View details">
                                    <button class="btn btn-success mx-1 shadow-sm bg-gradient bg rounded" data-toggle="tooltip"
                                    data-placement="top">V</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
