@extends('template.layout')

@section('content')
    
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Supplier Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Supplier Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Supplier</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $item)
                            <tr>
                                <td>{{ $item -> company_name }}</td>
                                <td>{{ $item -> address }}</td>
                                <td>{{ $item -> contact }}</td>
                                <td>
                                    <a href="/supplier/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/supplier/{{ $item->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Are You Sure ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/supplier/create" class="btn btn-primary">Add Supplier</a>
            </div>
        </div>
    </div>

</div>

@endsection