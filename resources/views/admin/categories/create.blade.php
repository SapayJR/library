@extends('admin.layouts.admin_layout')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Write Your Wishes</h4>
            </div>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 ">Description</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="summernote-simple" name="description"></textarea>
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Create Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
