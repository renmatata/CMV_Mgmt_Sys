<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restobar;
use App\Models\Venue;
use Database\Seeders\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Entrancefee;

class AdminController extends Controller
{
    public function dashboard(){

        $totalEntrancefee = Entrancefee::sum('amount');
        $totalRestobarIncome = Restobar::sum('amount');
        $totalVenueIncome = Venue::sum('amount');

        return view('admin.dashboard', compact('totalEntrancefee', 'totalRestobarIncome', 'totalVenueIncome'));
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/

            if(Auth::guard('admin')->attempt(['username'=>$data['username'],'password'=>$data['password']])){
                return redirect("admin/dashboard");
            }else{
                return redirect()->back()->with("error_message","Invalid credentials!");
            }
        }
        return view('admin.login');
    }

    public function logout() {
        Auth::guard('admin')-> logout();
        return redirect('admin/login');
    }

}
