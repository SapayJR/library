@extends('admin.layouts.admin_layout')

@section('content')


        <!-- Main Content -->
        <div class="main-content">

            <section class="section">


                <div class="section-header">
                    <h1>Books</h1>
                    <div class="section-header-button">
                        <a href="{{route('book.create')}}" class="btn btn-primary">Add New</a>
                    </div>


                </div>
                <div class="section-body">
                    <h2 class="section-title">Books</h2>
                    <p class="section-lead">
                        You can manage all books, such as editing, deleting and more.
                    </p>


                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>All Books</h4>
                                </div>
                                <div class="card-body">
                                    <div class="float-left">
                                    </div>
                                    <div class="float-right">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="clearfix mb-3"></div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Author</th>
                                                <th>Publish Date</th>
                                                <th>Status</th>
                                                <th>Change Status</th>
                                            </tr>
                                            @foreach($books as $book)
                                            <tr>
                                                <td>
                                                    {{$book->title}}
                                                </td>
                                                <td>
                                                    {{$book->category_id}}
                                                </td>
                                                <td>
                                                    {{$book->price}}
                                                </td>
                                                <td>
                                                    {{$book->user_id}}
                                                </td>
                                                <td>
                                                    {{ $book->publish_date ?? 'Not published' }}
                                                </td>
                                                <td>
                                                    {{$book->status}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{ route('changeStatus', [$book->id, $book->status] ) }}">{{ $book->status }}</a>
                                                </td>
{{--                                                <td>--}}
{{--                                                    <form action="{{ route('book.update', $book->id) }}" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('PUT')--}}
{{--                                                    <select name="status" class="form-control selectric">--}}
{{--                                                        @foreach(\App\Models\Book::STATUS as $status)--}}
{{--                                                            <option value="{{ $status }}">{{ $status }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                        <div class="col-sm-12 col-md-7">--}}
{{--                                                            <button class="btn btn-primary">Save</button>--}}
{{--                                                        </div>--}}

{{--                                                    </form>--}}
{{--                                                </td>--}}
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="float-right">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

