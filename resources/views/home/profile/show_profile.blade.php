@extends('home.layouts.profile_layout')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/front/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="/front/styles/categories_responsive.css">
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{auth()->user()->name}}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">



                            <div class="profile-widget-items">

                            </div>
                        </div>



                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{auth()->user()->name}}
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash">

                                    </div> Author </div>
                            </div>
                        </div>


                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">{{auth()->user()->name}} Books </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                    <th>Publish Date</th>
                                    <th>Status</th>
                                </tr>
                                @foreach( auth()->user()->books as $book)
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
                                    </tr>
                                @endforeach
                                <div class="card-footer text-right">
                                    <a href="{{route('profile.create')}}" class="btn btn-primary">Add New</a>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>



{{--                <div class="col-12 col-md-12 col-lg-7">--}}
{{--                    <div class="card">--}}
{{--                        <form method="post" class="needs-validation" novalidate="">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4>Edit Profile</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-md-6 col-12">--}}
{{--                                        <label>First Name</label>--}}
{{--                                        <input type="text" class="form-control" value="Ujang" required="">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please fill in the first name--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-6 col-12">--}}
{{--                                        <label>Last Name</label>--}}
{{--                                        <input type="text" class="form-control" value="Maman" required="">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please fill in the last name--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-md-7 col-12">--}}
{{--                                        <label>Email</label>--}}
{{--                                        <input type="email" class="form-control" value="ujang@maman.com" required="">--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            Please fill in the email--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-5 col-12">--}}
{{--                                        <label>Phone</label>--}}
{{--                                        <input type="tel" class="form-control" value="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-12">--}}
{{--                                        <label>Bio</label>--}}
{{--                                        <textarea class="form-control summernote-simple">Ujang maman is a superhero name in &lt;b&gt;Indonesia&lt;/b&gt;, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with &lt;b&gt;'John Doe'&lt;/b&gt;.</textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="form-group mb-0 col-12">--}}
{{--                                        <div class="custom-control custom-checkbox">--}}
{{--                                            <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">--}}
{{--                                            <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>--}}
{{--                                            <div class="text-muted form-text">--}}
{{--                                                You will get new information about products, offers and promotions--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer text-right">--}}
{{--                                <button class="btn btn-primary">Save Changes</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
@section('custom_js')

@endsection
