@extends('layouts.admin.app')

@push('css')
    <link href="{{ asset('assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="{{ asset('assets') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('assets') }}/js/demo/datatables-demo.js"></script>
@endpush

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col"><h6 class="m-0 font-weight-bold text-primary">{{ __('Category Data') }}</h6></div>
                <div class="col text-right"><a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> {{ __('Category') }}</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i> {{ __('Edit') }}</a>
                                    <a href="{{ route('admin.category.delete', $category->id) }}" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{ __('Delete') }}</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">{{ __('No data') }}</td>

                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
