<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Session;

class CustomerAuth extends Controller
{
    public function register()
    {
            return view('register');
    }
    public function AddCustemer(Request $request)
    {
         $request->validate([
           'username'=>'required',
           'email'=>'required |unique:customers',
           'password'=>'required |min:6',

         ]);
          $data=new Customer;
          $data->name=$request->username;
          $data->email=$request->email;
          $data->password=Hash::make($request->password);
          $data->save();
          return redirect('home')->with('success','Customer Registered Successfully');

    }
    public function login()
    {
        return view('login');
    }
    public function customerlogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
 
          ]);
           
              $data=Customer::where('email','=',$request->email)->first();
          if($data)
          {
              if(Hash::check($request->password,$data->password))
              {
                   $request->Session()->put('loginId',$data->id);
                   return redirect('dashboard');
              }
              else{
                return back()->with('fail','Password Not Matched!!');

              }
                
          }
           else
           {
               return back()->with('fail','Email Not Registered!!!');
           }
    }
    public function dashboard()
    {
        $user=array();
        if(Session::has('loginId'))
        {
            $data=Customer::where('id','=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
        }
        
    }

    

