<?php

namespace App\Http\Controllers\ReportBug;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Bug;
use Alert;
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

        $validator = Validator::make( $request->all(),[
            //! this is the area where our validatio rules will be. 

            'application' => 'required',
            'date'=> 'required',
            'bug'=>'required',
            'expectedBehaviour'=>'required',            
        ]);

        // ! If the validation fails, then the appliaction should throw an error that will be used to get the required data.
        if ($validator->fails()) {
            return redirect('ReportBug.reportBug')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            //! if the validation passes, then the application should:-
                        // ! 1. Add the bug report to the database, 
                        //! 2. Send an email confirming the reciving the email, that is added to a queue, 
                        //! 3. Return the user to a page that will be having the data about the bug that has been reported. 
            // ? STEP 1. Inserting the data to the DB. 
            
            $bug = new Bug();
            $bug->decription = $request->bug;
            $bug->expectation = $request->expectedBehaviour;
            $bug->dateNoticed = $request->date;
            $bug->software = $request->application;
            $bug->reporter_id = Auth::user()->id;
            $bug->save();

            Alert::success('Success Title', 'Success Message');
            return back();            

        }
        // return $request;
    }
}
