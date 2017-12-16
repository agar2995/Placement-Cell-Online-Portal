<?php

namespace App\Http\Controllers\Training_and_Placement_Cell;

use Illuminate\Routing\Controller as Controller;

use Illuminate\Http\Request;

use DB;
use App\Company;
use App\CompanyStudent;
use Auth;
use Request as Request5;
use Redirect;
use App\Http\Requests;

class CompanyProfileController extends Controller
{
    public function index($company_id) {
        if(Auth::user()->user_type != 'student'){
            return Redirect::to('training_and_placement_cell');
        }
        $student = DB::table('All_Student')->where('student_id', '=', Auth::user()->username)->get();
    	$students = DB::table('All_Student')->where('student_id', '=', Auth::user()->username)->pluck('student_id');
    	$students1 = DB::table('All_Student')->where('student_id', '=', Auth::user()->username)->pluck('branch');
        $students2 = DB::table('All_Student')->where('student_id', '=', Auth::user()->username)->pluck('cpi');
    	$company = DB::table('Company')->where('company_id', '=', $company_id)->get();
    	$company1 = DB::table('Company')->where('company_id', '=', $company_id)->pluck('company_id');
    	$company2 = DB::table('Company')->where('company_id', '=', $company_id)->pluck('eligibility_criteria');
        $company3 = DB::table('Company')->where('company_id', '=', $company_id)->pluck('min_qualification');
    	return view('training_and_placement_cell.profile.companyProfile', compact(['students', 'company', 'company1', 'students1', 'students2', 'company3', 'company2', 'student']));
    }

    public function store(Request5 $request) {

        $user = DB::table('Applied_For_Company')->where([['company_id', '=', $request::input('company_id')], ['student_id', '=', $request::input('student_id')]])->first();
        if($user){
            return Redirect::to('/training_and_placement_cell/student')->with('alert', 'Already Applied!');
        }
        elseif(($request::input('branch') == $request::input('eligibility')) && ($request::input('cpi') >= $request::input('min_qualification'))) {
    		CompanyStudent::create([
				'company_id' => $request::input('company_id'),
				'student_id' => $request::input('student_id')
    			]);
            return Redirect::to('/training_and_placement_cell/student')->with('alert', 'Applied Successfully!');
    	}
    	else {
    		return Redirect::to('/training_and_placement_cell/student')->with('alert', 'Not Eligible to Apply!');
    	}
    }
}
