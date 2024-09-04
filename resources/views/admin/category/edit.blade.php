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
                    <h3 class="box-title">Edit Category</h3>
                </div>

                <form role="form" method="post" action="{{ route('categories.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Category name" value="{{ old('name', $category->name) }}" required />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="Category description" value="{{ old('description', $category->description) }}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer mt-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
