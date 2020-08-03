<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products = Products_model::all();

        return view('admin.product.list-product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category_model::pluck('name', 'id');



        return view('admin.product.add-product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //banning from adding existing product to database
        $user_verified = Products_model::where('pro_name', '=', $request->input('pro_name'))->first();
        $image_verified = Products_model::where('image', '=', $request->input('image'))->first();

        if ($user_verified || $image_verified) {

            return view('page.error_page.addproduct_error');

        }   else {

            $formInput = $request->except('image');
            $this->validate($request,[

                'pro_name' => 'required',
                'pro_code' => 'required',
                'pro_price' => 'required',
                'pro_info' => 'required',
                'stock' => 'required',
                'size-type' => 'required',
                'color' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:10000',
                'user_name' => 'required',
                'user_email' => 'required'

            ]);

            $image = $request->image;

            if($image) {

                $imageName = $image->getClientOriginalName();
                $image->move('image',$imageName);

                $formInput['image'] = $imageName;
            }

            Products_model::create($formInput);

            return redirect()->back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $view_pro = DB::table('products')->where('id', $id)->get();

        return view('admin.product.product_detail', compact('view_pro'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Products_model::findOrFail($id);
        $deleteData->delete();

        return redirect()->back();
    }
}
