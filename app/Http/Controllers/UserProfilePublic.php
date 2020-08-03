<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Rules\IsCurrentPassword;
use App\Rules\PhoneNumber;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DateTime;



class UserProfilePublic extends Controller
{
    public function __construct()
    {
        //Registered user must log in before going to userProfile page...
        $this->middleware('auth');

    }

    public function userProfile()
    {

        $user = Auth::user();
        //View User profile page via route get in route.php
        return view('page.user-profile', compact('user'));

    }

    public function updateProfileUser(Request $request, $user_id)
    {
        $ruleInput = [

            'name' => ['required', 'min:3', 'alpha', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user_id)],

            'phone_number' => ['required', 'numeric', new PhoneNumber],

            'career' => ['required', 'alpha', 'min:4', 'max:10'],

            'address' => ['required', 'string', 'min:5', 'max:30'],

            'city_country' => ['required', 'string', 'min:5', 'max:30'],

            'bio' => ['sometimes', 'max:400'],


        ];

        //custom message for error form validation
        $message = [

            'name.required' => 'must input suitable name without containing space!',
            'name.alpha' => 'must be string, no number or any expression',
            'name.min' => 'create your name at least 3 character up',

            'email.required' => 'please input the valid email!',
            'phone_number.required' => 'no empty space, please input the correct format of phone number',

            'career.required' => 'please give your correct profession, no space like this',
            'career.alpha' => 'must be correct English word of profession',

            'address.required' => 'please input as the following example: Village, Road Name, District, City',

            'city_country.required' => 'Please enter as shown example: CityName, CountryName',

            'bio.max' => 'maximum text has been reached, you cannot input more limited values',

        ];

        //the new value getting from user inputting
        $name = $request->input('name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone_number');
        $career = $request->input('career');
        $address = $request->input('address');
        $cityCountry = $request->input('city_country');
        $bioUser = $request->input('bio');
        $updated_at = new DateTime;

        //fields in form are being validated ...
        $validator = Validator::make($request->all(), $ruleInput, $message);

        //error validator active unless using this if statement
        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        } else {

            //updating records of current user in database
            DB::table('users')->where('id', $user_id)->update([

                'name' => $name, /*'password' =>  Hash::make($request->new_password),*/ 'email' => $email, 'phone_number' => $phoneNumber,

                'career' => $career, 'address' => $address, 'city_country' => $cityCountry, 'bio' => $bioUser,

                'updated_at' => $updated_at

            ]);

        }

        return redirect()->back();

    }

    public  function updateImageUser(Request $request, $user_id) {

        //fields in form are being validated ...
        $validator = Validator::make($request->all(), [

            'avatar' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048']

        ]);

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        } else {

            // Handle the user upload of avatar, only if has file in field in db or not
            if ($request->hasFile('avatar')) {

                $avatar = $request->file('avatar');
                $imageName = md5($avatar->getClientOriginalName() . time()) . "." . $avatar->getClientOriginalExtension();
                $avatar->move(public_path('image/user_profile'), $imageName);

                //updating image name in database
                DB::table('users')->where('id', $user_id)->update(['avatar' => $imageName]);

            }

        }

        return redirect()->back();

    }

    public function updateUserPassword(Request $request) {

        $validator = Validator::make($request->all(), [

            'current_password' => ['required', 'string', 'min:8', new IsCurrentPassword],

            'new_password' => ['required', 'different:current_password', 'min:8', 'string'],

            'confirm_password' => ['required', 'same:new_password', 'required_with:new_password'],

        ]);

        //if validator error
        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        } else {

            //update database
            //handle password changing
            $data = $request->all();
            $user = User::find(auth()->user()->id);

            if(Hash::check($data['current_password'], $user->password)) {

                User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            }

        }

        return redirect()->back();

    }

}

