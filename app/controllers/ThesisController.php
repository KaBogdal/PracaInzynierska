<?php

use Illuminate\Support\Facades\Redirect;
class ThesisController extends BaseController {

	public function index()
	{
		$thesis = Thesis::all();
		return View::make('thesis.index')->withThesis($thesis);
	}

	public function getTheses()
	{
		return Thesis::all();
	}
	
	public function getThesisInf($year, $spec, $level){
		return View::make('thesis.index')->withTheses(DB::table('theses')->where('date','=',$year)->where('spec', '=', $spec)->where('level', '=', $level)->where('approval','=',true)->get())->withApproval(true);
		//return DB::table('theses')->where('date','=',$year)->where('spec', '=', $spec)->where('level', '=', $level)->get();
	}
	
	public function getThesisforApproval(){
		
		return View::make('thesis.index')->withTheses(DB::table('theses')->where('approval','=',false)->get())->withApproval(false);
	}

	
	public function create()
	{
		$thesis = new Thesis();
		$thesis->subject = Input::get('subject');
		$thesis->descr = Input::get('description');
		$thesis->level = Input::get('level');
		$thesis->spec = Input::get('spec');
		$thesis->lecturer_id = Auth::user()->id;
		$thesis->date = date("Y"); 
		
		$thesis->save();
		return Redirect::to('');
	}
	
	public function approve($id)
	{
		$thesis = Thesis::findOrFail($id);
		$thesis->approval = true;
		$thesis->save();
		
		return $thesis;
	}
	
}