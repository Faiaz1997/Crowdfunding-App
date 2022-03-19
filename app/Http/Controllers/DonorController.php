<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userinfos;


class DonorController extends Controller
{
    //
    public function donors(){
        $donors = userinfos::where('type','Donor')->get();
        return view('pages.admin.alldonors')->with('donors',$donors);
    }
}
