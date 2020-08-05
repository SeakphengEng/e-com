
@extends('layouts.master-dashboard')

@section('title') ordering @endsection

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
            <li class="active">
                <a href="{{route('admin.users.index')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Management</p>
                </a>
            </li>
            
    </div>

        </ul>

    <!--End sideBar -->
@endsection

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Export a Table to Excel Save HTML TABLE as Excel file </h4>
                        <hr>
                        <button  id="exportButton" type="button" class="btn btn-danger">Download</button>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>orderId</th>
                                <th>UserId</th>
                                <th>ProductID</th>
                                <th>ProductName</th>
                                <th>Price</th>
                                <th>UserDetail</th>
                                <th>ProductDetail</th>
                                <th>Decline</th>
                                <th>Approve</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>12</td>
                                <td>3</td>
                                <td>4</td>
                                <td>Shoes</td>
                                <th>123</th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>3</td>
                                <td>4</td>
                                <td>Shoes</td>
                                <th>123</th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                    </a>
                                </th>
                                <th>
                                    <a>
                                        <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                    </a>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
