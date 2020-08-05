
@extends('layouts.master-dashboard')

@section('title') Report @endsection

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
                        <h4 class="card-title"> Export Data to Excel </h4>
                        <hr>
                        <button  id="exportButton" type="button" class="btn btn-danger">Export</button>
                    </div>
                    <div class="card-body">
                        <table id="exportTable" class="table">
                            <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>ProductCode</th>
                                <th>ProductName</th>
                                <th>UserID</th>
                                <th>Email</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>36fdb</td>
                                <td>Shoes</td>
                                <td>001</td>
                                <td>madamly@gmail.com</td>
                                <td>12</td>
                                <td>12-10-2019</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>rnu442</td>
                                <td>Ball</td>
                                <td>001</td>
                                <td>madamly@gmail.com</td>
                                <td>25</td>
                                <td>12-10-2019</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>r4w73</td>
                                <td>History-Book</td>
                                <td>002</td>
                                <td>maly@gmail.com</td>
                                <td>12</td>
                                <td>13-10-2019</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>r3nf</td>
                                <td>Zenvo</td>
                                <td>003</td>
                                <td>lyhour@gmail.com</td>
                                <td>200</td>
                                <td>13-10-2019</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>rngh5</td>
                                <td>Zenvo-5</td>
                                <td>002</td>
                                <td>maly@gmail.com</td>
                                <td>250</td>
                                <td>13-10-2019</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>f343j3</td>
                                <td>T-Shirt</td>
                                <td>001</td>
                                <td>madamly@gmail.com</td>
                                <td>10</td>
                                <td>13-10-2019</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('jsblock')
    <!-- you need to include the shieldui css and js assets in order for the components to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

    <script>
        jQuery(function ($) {
            $("#exportButton").click(function () {
                // parse the HTML table element having an id=exportTable
                var dataSource = shield.DataSource.create({
                    data: "#exportTable",
                    schema: {
                        type: "table",
                        fields: {
                            OrderID: { type: Number },
                            ProductCode: { type: String },
                            ProductName: { type: String },
                            UserID: {type: Number},
                            Email: { type: String },
                            Price: { type: Number },
                            Date: { type: String },
                        }
                    }
                });

                // when parsing is done, export the data to Excel
                dataSource.read().then(function (data) {
                    new shield.exp.OOXMLWorkbook({
                        author: "PrepBootstrap",
                        worksheets: [
                            {
                                name: "PrepBootstrap Table",
                                rows: [
                                    {
                                        cells: [
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "OrderID"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "ProductCode"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "ProductName"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "UserID"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Email"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "Price"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Date"
                                            },
                                        ]
                                    }
                                ].concat($.map(data, function(item) {
                                    return {
                                        cells: [
                                            { type: Number, value: item.OrderID },
                                            { type: String, value: item.ProductCode },
                                            { type: String, value: item.ProductName },
                                            { type: Number, value: item.UserID},
                                            { type: String, value: item.Email },
                                            { type: Number, value: item.Price },
                                            { type: String, value: item.Date}
                                        ]
                                    };
                                }))
                            }
                        ]
                    }).saveAs({
                        fileName: "Exported_data"
                    });
                });
            });
        });
    </script>

@endsection
