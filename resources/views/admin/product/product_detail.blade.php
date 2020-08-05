<!--IT IS PRODUCT DETAIL PAGE ...-->
@extends('layouts.master-dashboard')

@section('title') Product Detail @endsection

@section('sidebar')

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{url('/dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li>
                <a href="{{route('product.create')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p> Add Product </p>
                </a>
            </li>
            <li class="active">
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

@section('style')

    <link href="{{ asset('/css/product_detail.css') }}" rel="stylesheet" />

@endsection


@section('content')

    <!-- open div right side-bar -->
    <div class="content">
        <div class="row">

            @foreach($view_pro as $productId)

                <div class="col-md-4">

                    <div  class="card">
                        <div  class="card-body">
                            <div class="product-image">
                                <label>
                                    <img class="rounded-circle" id="image-uploading" src="http://1.bp.blogspot.com/-LkWH3egffzg/TkisguLgS4I/AAAAAAAAAuM/4x13QlU-oS0/s1600/Tom-and-Jerry-Cartoons-+18.jpg"/>
                                </label>

                                <h5> Shoe ASK_Italy </h5>

                                <p class="descriptions">This shoe is very good at fire the water ...</p>

                                <hr>

                                <h4> E-Shopping</h4>

                            </div>
                        </div>
                    </div>
                </div>   <!--end col-s,-4 class-->
                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-aboutProduct-tab" data-toggle="tab" href="#nav-aboutProduct" role="tab" aria-controls="nav-aboutProduct" aria-selected="true">About Product</a>
                                    <a class="nav-item nav-link" id="nav-addby-tab" data-toggle="tab" href="#nav-addby" role="tab" aria-controls="nav-addby" aria-selected="false">Add By</a>
                                </div>
                            </nav>
                        </div>

                        <div class="card-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-aboutProduct" role="tabpanel" aria-labelledby="nav-aboutProduct-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Approved By</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Mengkheang</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Product Code</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $productId->pro_code }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Product Name </h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ $productId->pro_name }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Catecory</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$productId->category_id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> Price </h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{$productId->pro_price}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Stock</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$productId->stock}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Size-Type</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>38-42</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Color</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$productId->color}}</p>
                                            </div>
                                        </div>

                                    </div>  <!--end about product tab-->

                                    <div class="tab-pane fade" id="nav-addby" role="tabpanel" aria-labelledby="nav-addby-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>User Name</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Mengkheang</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Email</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>mengkheangson21@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Uploade Date</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>12-12-2019</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>User Name</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-secondary btn-round">User Profile</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>   <!--end col-s,-8 class-->

            @endforeach

        </div>
    </div>
    <!-- off div right side-bar -->

@endsection
