@extends('layouts.master-dashboard')

@section('title') List Category @endsection

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
            <li class="active">
                <a href="{{route('category.index')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p> category </p>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Category </h4>
                    </div>
                    <div class="card-body">

                    @if(!empty($categories))
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th> Category ID  </th>
                                        <th> Category Name  </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td> {{$category->id}} </td>
                                        <td> {{$category->name}} </td>

                                        <td>
                                            <form action="{{route('category.destroy',$category->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">

                                            </form>
                                        </td>

                                    </tr>
                                    @empty
                                        <tr>
                                            <td> NuLL </td>
                                            <td> No category Adding </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    @endif
                    </div>
                    <br><br>
                    <form class="form-horizontal" action="{{route('category.store')}}" method="post" role="form">

                        {{csrf_field()}}

                        <div class="card-header">
                            <label class="card-body" for="name"> Category Name </label>

                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" name="name" id="name" placeholder="Category_name">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="card-header">
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary"> save </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

