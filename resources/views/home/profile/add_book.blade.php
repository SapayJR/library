@extends('home.layouts.profile_layout')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/front/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="/front/styles/categories_responsive.css">
@endsection


@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ auth()->user()->name }}</h4>
            </div>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif

            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        <div class="input-group">
                            <input type="text" name="description" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Publish Date</label>
                        <div class="input-group">
                            <input type="date" class="form-control datemask col-md-3" name="publish_date"
                                   placeholder="YYYY/MM/DD">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Выберите категорию</label>
                        <select name="category_id" class="form-control" required>
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}">  {{ $category['title'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Author</label>
                        <select name="user_id" class="form-control" required>
                                <option value="{{auth()->user()->id }}">  {{ auth()->user()->name }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control col-md-3" required>
                    </div>

                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Add Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
