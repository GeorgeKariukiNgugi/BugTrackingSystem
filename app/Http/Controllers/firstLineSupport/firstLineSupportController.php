<?php

namespace App\Http\Controllers\firstLineSupport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Charts\firstLineSupportCharts;
use App\Bug;
use App\FirstLineSupport;
// use Session;
class firstLineSupportController extends Controller
{
        //! this function is used to handle the redirecting and the data retrieval of admin. 
        public function firstLineSupportController(){

                    // return "This is the first line implementation of the application";
                    $bugsLookedAtByFirstLineSupport =  FirstLineSupport::all()->pluck('bug_id');
                                    
                    //! creating the array to hold the data. 
                    $insertionOfBugs = array();
                    foreach ($bugsLookedAtByFirstLineSupport as $bugs) {
                        # code...
                        array_push($insertionOfBugs, $bugs);
                    }

                    $untrackedBugs = Bug::whereNotIn('id',$insertionOfBugs)->get();
                                       
                    $usersChart = new firstLineSupportCharts;
                    $usersChart->labels(['Jan', 'Feb', 'Mar']);
                    $usersChart->dataset('Users by trimester', 'line', [10, 25, 13])
                        ->color("rgb(255, 99, 132)")
                        ->backgroundcolor("rgb(255, 99, 132)");
                    // return view('users', [ 'usersChart' => $usersChart ] );
                    return view('firstLineSupport.firstLineLanding',['untrackedBugs'=>$untrackedBugs,'usersChart'=>$usersChart]);

        }
}
