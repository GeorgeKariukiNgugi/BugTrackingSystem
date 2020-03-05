<?php

namespace App\Http\Controllers\ReportBug;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
class ReportBug extends Controller
{
    public function reportBug(){

        if (!Auth::check()) {
            # code...

            return view('auth.login');

        } else {
            # code...
            // return view('ReportBug.reportBug');
            // return "Reporting the bug.";
            return view('ReportBug.reportBug');
        }
        
    }

    //! this route functio is used to insert the data that has been posted by a client as a bug. 

    public function postingBugReport(Request $request){

        // $validator = Validator::make( $request->all(),[
        //     //! this is the area where our validatio rules will be. 

        // ]);

        return $request;
    }
}
