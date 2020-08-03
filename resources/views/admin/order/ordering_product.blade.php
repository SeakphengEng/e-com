
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
            <li>
                <a href="{{url("dashboard/ordering")}}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Ordering Product</p>
                </a>
            </li>
            <li>
                <a href="{{url("dashboard/report")}}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Report</p>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ordering Products </h4>
                         <hr>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>orderId</th>
                                <th>UserId</th>
                                <th>ProductCode</th>
                                <th>ProductName</th>
                                <th>Price</th>
                                <th>ProductDetail</th>
                                <th>UserDetail</th>
                                <th>Decline</th>
                                <th>Approve</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>002</td>
                                    <td>4ghtsa</td>
                                    <td>Shoes</td>
                                    <th>12</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>002</td>
                                    <td>123ft</td>
                                    <td>History-book</td>
                                    <th>5</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>003</td>
                                    <td>tm3ft</td>
                                    <td>Khmer-book</td>
                                    <th>5</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>001</td>
                                    <td>52fm3ft</td>
                                    <td>T-Shirt</td>
                                    <th>10</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>003</td>
                                    <td>fde53ft</td>
                                    <td>Zenvo</td>
                                    <th>200</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>005</td>
                                    <td>fnjw93ft</td>
                                    <td>Jean</td>
                                    <th>25</th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Product</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-secondary btn-sm">Profile</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-danger btn-sm">Decline</button>
                                        </a>
                                    </th>
                                    <th>
                                        <a>
                                            <button type="button" class="btn btn-success btn-sm">Approve</button>
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
