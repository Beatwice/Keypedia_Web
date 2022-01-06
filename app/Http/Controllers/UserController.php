<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function change_pass_page()
    {
        $categories = Category::all();
        return view('update-password',compact('categories'));
    }

    public function update_pass($id,Request $request)
    {

        $curr_password = User::where('id',$id)->first();
        if(Hash::check($request->old_password,$curr_password->password))
        {
            if(strcmp($request->new_password, $request->confirm_pass) == 0)
            {
                $curr_password->update([ 
                    'password' =>Hash::make($request->new_password)
                ]);
                // dd($curr_password->password);
            }
            else
            {
                return redirect('/change-password')->with('error','New password and password confirm does not matched!');
            }
        }
        else
        {
            return redirect('/change-password')->with('error','Old password does not matched!');
        }
        return redirect('/change-password');
    }
}
