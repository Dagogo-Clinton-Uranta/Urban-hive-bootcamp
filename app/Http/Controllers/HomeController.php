<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $role = 0 ;/*i hard coded 0 to test , it is originally ->*/ /*Auth::User()->user_type;  */

            if($role =='1'){

                return view('dashboard');
            }else {
                return view('user.freestudent_tutorial');
            }
               
        }
 }
