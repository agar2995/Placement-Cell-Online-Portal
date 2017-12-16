<?php

namespace App\Http\Controllers\Training_and_Placement_Cell;

use Illuminate\Routing\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Auth;
use App\Http\Requests;

class PagesController extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function index(){
        if(Auth::check()){
	        if(Auth::user()->user_type == 'student'){
	            return Redirect::to('/training_and_placement_cell/student');
	        }
	        elseif(Auth::user()->user_type == 'others'){
	            return Redirect::to('/training_and_placement_cell/tpo/page');
	        }
	        else{
	        	return Redirect::to('/');
	        }
	    }
    }

    public function home() {
    	$countDates = DB::table('Company')->whereRaw('arrival_date <= curdate() + INTERVAL 2 MONTH')->get();
		// echo ($countDates);
		$count = count($countDates);
		// echo($count);
    	$students = DB::table('All_Student')->where('student_id', '=', Auth::user()->username)->first();
    	return view ('training_and_placement_cell.welcome', compact(['students', 'countDates', 'count'])); 
    }
}
