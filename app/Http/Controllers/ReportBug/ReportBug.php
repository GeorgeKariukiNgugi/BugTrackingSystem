<?php

namespace App\Http\Controllers\ReportBug;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Bug;
use Alert;
use App\FirstLineSupport;
use App\LeadApproval;
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


            // ? STEP 2. Sending Email To The User.

            // ! TO BE DONE.



            // ? STEP 3 Returning User To Page With The Details On The Bug.

            //* Adding The Array that will carry all the object that is the bug, the status and also the other status.

            $bugs = Bug::where('reporter_id','=',Auth::user()->id)->get();

            //* looping through the bugs for the particular user.
            $bugReportArray = array();
            foreach ($bugs as $bug) {
                # code...
                array_push($bugReportArray,$bug);
                //* getting the ststus of approval by the FirstLine Support.

                $bugApprovalByFirstLineSupport = FirstLineSupport::where('bug_id','=',$bug->id)->get();
                if (count($bugApprovalByFirstLineSupport) == 0) {
                    # code...
                    array_push($bugReportArray,0);
                } elseif(count($bugApprovalByFirstLineSupport) == 1) {
                    # code...
                    array_push($bugReportArray,$bugApprovalByFirstLineSupport);
                }else{
                    array_push($bugReportArray,'Kindly Contact Or Message The Customer Support, There is An Error That Occured On This Bug Report.');
                }
                
                //* getting the ststus of approval by the LeadApproval.

                $bugApprovalByLead = LeadApproval::where('bug_id','=',$bug->id)->get();
                if (count($bugApprovalByLead) == 0) {
                    # code...
                    array_push($bugReportArray,0);
                } elseif(count($bugApprovalByLead) == 1) {
                    # code...
                    array_push($bugReportArray,$bugApprovalByLead);
                }else{
                    array_push($bugReportArray,'Kindly Contact Or Message The Customer Support, There is An Error That Occured On This Bug Report.');
                }
            }
            // dd($bugReportArray);

            Alert::success('Congratulations <i style="color:green" class="fa fa-thumbs-up"></i>', 'Your Bug Has Successfully Been Reported.');
            return view('ReportBug.BugsReportedLandingPage',['bugsArray'=>$bugReportArray,'bugs'=>$bugs]);                     

        }        
    }
}
