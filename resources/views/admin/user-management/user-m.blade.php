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
                        <h4 class="card-title"> User Management </h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th> Name   </th>
                                <th> Email  </th>
                                <th> Role </th>
                                <th> Modify </th>
                                <th> Status </th>
                                <th> Profile </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>

                                    <td>

                                        <!-- route('admin.users.edit') can be omitted, not trigger error-->
                                        <a href="{{route('admin.users.edit', $user->id)}}" data-toggle="modal" data-target="#myModal{{ $user->id }}"class="float-left">

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm">
                                                Edit
                                            </button>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle"> Select Role </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form action="{{route('admin.users.update', ['user' => $user->id])}}" method="POST">
                                                        <div class="modal-body">

                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            @php $roles = DB::table('roles')->get(); @endphp

                                                            @foreach( $roles as $role)

                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                                                        {{$user->hasAnyRole($role->name)?'checked':''}}>
                                                                    <label> {{$role->name}} </label>
                                                                </div>

                                                            @endforeach

                                                        </div>

                                                        <div class="modal-footer">
                                                            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- delete user-->
                                        <form action="{{route('admin.users.destroy',$user->id)}}" method="post" class="float-left">

                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">

                                        </form>

                                    </td>

                                    <!-- Checking user's status -->
                                    <td>
                                        @if(Cache::has('user-is-online' . $user->id))

                                            <span class="text-success"> online </span>
                                        @else
                                            <span class="text-secondary"> offline </span>

                                        @endif

                                    </td>

                                    <!-- user profile link -->
                                    <td>
                                        <a href="{{route('admin.user_profile.show', $user->id)}}">
                                            <button type="button" class="btn btn-primary btn-sm" >Detail</button>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

