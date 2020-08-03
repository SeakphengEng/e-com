<!--IT IS LIST PRODUCT PAGE ...-->
@extends('layouts.master-dashboard')

@section('title') list Product @endsection

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

    <?php $cats = DB::table('categories')->get(); ?>

    <?php $incrementId = 1 ;?>
    <?php $Id = 1 ;?>

    <div class="content">
        <div class="row">
            @foreach($cats as $id)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">

                             {{ $id->name }}

                        </h4>

                      </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th> ID </th>
                                <th> Code   </th>
                                <th> Image  </th>
                                <th> Name   </th>
                                <th> Price  </th>
                                <th> Detail </th>
                                <th> Remove </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                @foreach($cats as $cat)
                                @if($product->category_id == $cat->id )
                                    <tr>
                                        <td>{{$Id}}</td>
                                        <td>{{$product->pro_code}}</td>
                                        <td><img src="{{url('image', $product->image)}}" alt="" width="80px"></td>
                                        <td> {{$product->pro_name}} </td>
                                        <td> {{$product->pro_price}} </td>
                                        <td>
                                            <a href="{{route('product.show', $product->id)}}">
                                                <button type="button" class="btn btn-primary btn-sm" >Detail</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{route('product.destroy',$product->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $Id += 1 ;?>
                                @endif
@endforeach
                            @endforeach

                            <?php $incrementId += 1 ;?>
                                    <!--start new loop-->
                            <?php $Id = 1 ;?>
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection
