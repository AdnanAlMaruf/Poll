@extends('layouts.backend.app')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger" id="alert">
            <h6> {{ session('error') }}</h6>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Category</h3>
                    </div>

                    <form role="form" method="post" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category name*</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Category name" value="{{ old('name') }}" required />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Category name" value="{{ old('description') }}" required />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer mt-4">
                            <button type="submit" class="btn btn-primary">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
