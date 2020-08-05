@extends('layouts.master-dashboard')

@section('title') Add Product @endsection

@section('sidebar')
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{url('/dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="active">
                <a href="{{route('product.create')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p> Add Product </p>
                </a>
            </li>
            <li>
                <a href="{{route('product.index')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p> List product </p>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>category</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.users.index')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Management</p>
                </a>
            </li>
           

        </ul>
    </div>

    <!--End sideBar -->

@endsection

@section('content')

    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h3 class="card-title"> Add Product  </h3>
                    </div>

                    <!-- location of Adding product -->
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form class="form-horizontal" action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">

                                {{csrf_field()}}

                                <fieldset>
                                    <!-- Name of Product -->
                                    <div class="card-header{{$errors->has('pro_name')?' has-error':''}}">
                                        <label class="card-body" for="pro_name"> Name </label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control input-md" id="pro_name" name="pro_name" placeholder="Name">
                                            <span class="text-danger">{{$errors->first('pro_name')}}</span>
                                        </div>
                                    </div>

                                    <!-- Code of product -->
                                    <div class="card-header{{$errors->has('pro_code')?' has-error':''}}">
                                        <label class="card-body" for="pro_code"> Code </label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control input-md" id="pro_code" name="pro_code" placeholder="Code">
                                            <span class="text-danger">{{$errors->first('pro_code')}}</span>
                                        </div>
                                    </div>

                                    <!-- Price of product -->
                                    <div class="card-header{{$errors->has('pro_price')?' has-error':''}}">
                                        <label class="card-body" for="pro_price"> Price </label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control input-md" id="pro_price" name="pro_price" placeholder="Price">
                                            <span class="text-danger">{{$errors->first('pro_price')}}</span>
                                        </div>
                                    </div>

                                    <!-- Stock of product -->
                                    <div class="card-header{{$errors->has('stock')?' has-error':''}}">
                                        <label class="card-body" for="stock"> Stock </label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control input-md" id="stock" name="stock" placeholder="Add stock">
                                            <span class="text-danger">{{$errors->first('stock')}}</span>
                                        </div>
                                    </div>

                                    <!-- size/type and color of product -->
                                    <div class="card-header">
                                        <div class="row">

                                            <div class="col-8{{$errors->has('size-type')?' has-error':''}}">
                                                <label class="card-body" for="size-type"> Size/Type </label>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control input-md" id="size-type" name="size-type" placeholder="size -- type">
                                                    <span class="text-danger">{{$errors->first('size-type')}}</span>
                                                </div>
                                            </div>

                                            <div class="col-4{{$errors->has('color')?' has-error':''}}">
                                                <label class="card-body" for="color"> Color </label>

                                                <div class="col-md-12">
                                                    <input type="text" class="form-control input-md" id="color" name="color" placeholder="Color">
                                                    <span class="text-danger">{{$errors->first('color')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="card-header{{$errors->has('pro_info')?' has-error':''}}">
                                        <label class="card-body" for="pro_info"> Description </label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="pro_info" rows="5" name="pro_info"></textarea>
                                            <span class="text-danger">{{$errors->first('pro_info')}}</span>
                                        </div>
                                    </div>

                                    <!--Selecting Category-->
                                    <div class="card-header{{$errors->has('category_id')?' has-error':''}}">
                                        <label class="card-body" for="category_id"> Category </label>

                                        <div class="col-md-12">
                                            <select name="category_id" id="category_id" class="custom-select">
                                                <option selected> Select Category </option>

                                                @foreach($categories as $id => $category)

                                                    <option value="{{$id}}"> {{$category}} </option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Adding By --- -->
                                    <div class="card-header">
                                        <div class="row">

                                            <!-- User_Email --- -->
                                            <div class="col-8{{$errors->has('user_email')?' has-error':''}}">
                                                <!--<label class="card-body" for="user_email"> Email </label>-->

                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control input-md" id="user_email" name="user_email" value="{{Auth::user()->email}}" readonly="readonly">
                                                    <span class="text-danger">{{$errors->first('user_email')}}</span>
                                                </div>
                                            </div>

                                            <!-- User_name --- -->
                                            <div class="col-4{{$errors->has('user_name')?' has-error':''}}">
                                                <!--<label class="card-body" for="user_name"> Name </label>-->

                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control input-md" id="user_name" name="user_name" value="{{Auth::user()->name}}" readonly="readonly">
                                                    <span class="text-danger">{{$errors->first('user_name')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Uploading Image -->
                                    <div class="card-header{{$errors->has('image')?' has-error':''}}">
                                        <label class="card-body" for="image"> Image</label>
                                        <div class="col-md-12">
                                            <input id="image" name="image" class="form-control-file" type="file">
                                            <span class="text-danger">{{$errors->first('image')}}</span>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="card-header">
                                        <h6 class="card-body"> Submit </h6>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

