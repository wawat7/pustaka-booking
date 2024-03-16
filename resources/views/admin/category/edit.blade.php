@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-center">
        <div class="card shadow mb-4 col-md-5">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col"><h6 class="m-0 font-weight-bold text-primary">{{ __('Add Category') }}</h6></div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.category.update', $category->id) }}">
                    @csrf @method('PUT')

                    <div class="form-group">
                        <label for="name">{{ __('Name') }} :</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-arrow-right"></i> {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
