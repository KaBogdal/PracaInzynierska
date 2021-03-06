  <?php

use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Finder\Tests\FakeAdapter\DummyAdapter;
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
		$id = DB::table('fields')->where('field','=',$spec)->where('level','=',$level)->get()[0]->id; 
		
		return View::make('thesis.index')->withTheses(DB::table('theses')->where('date','=',$year)->where('field_id', '=', $id)->where('approval','=',true)->get())->withApproval(true);
		//return DB::table('theses')->where('date','=',$year)->where('spec', '=', $spec)->where('level', '=', $level)->get();
	}
	
	public function getThesisforApproval(){
		return View::make('thesis.index')->withTheses(DB::table('theses')->where('approval','=',false)->get())->withApproval(false);
	}
	
	public function getThesisList($lecturer){
		return View::make('thesis.all')->withTheses(DB::table('theses')->where('lecturer_id','=',$lecturer)->get());
	}
	public function getReviewedList($reviewer){
		return View::make('thesis.reviewed')->withTheses(DB::table('theses')->where('reviewer','=',$reviewer)->get());
	}
	
	public function getadminCharts(){
		return View::make('thesis.charts')->withTheses(DB::table('theses')->where('date','=', 2015)->get());
	}
	
	
 	public function addReviewer(){
 		
 		$thesis = Thesis::findOrFail(Input::get('thesis_id'));
 		$thesis->reviewer = Input::get('reviever_id');
 		$thesis->save();
 		return Redirect::to('showThesis_'.Input::get('thesis_id'));
 	}
 	
	public function addLNote(){
 		
 		$thesis = Thesis::findOrFail(Input::get('thesis_id'));
 		
 		$thesis->Lnote = Input::get('LectNote');
 		$thesis->save();
 		
 		return Redirect::to('');
 	}
 	
 	public function addRNote(){
 			
 		$thesis = Thesis::findOrFail(Input::get('thesis_id'));
 		
 		$thesis->RNote = Input::get('RevNote');
 		$thesis->save();
 			
 		return Redirect::to('');
 	}
	
	public function create()
	{
		$field_id = DB::table('fields')->where('field','=',Input::get('spec'))->where('level','=',Input::get('level'))->get()[0]->id;
		$thesis = new Thesis();
		$thesis->subject = Input::get('subject');
		$thesis->descr = Input::get('description');
		$thesis->field_id = $field_id; //Input::get('level');
		$thesis->lecturer_id = Auth::user()->id;
		$thesis->date = date("Y"); 

		$thesis->save();
		return Redirect::to('');
	}
	
	//public function getSearchedList(){
	//	return View::make('thesis.searched');
	//}
	
	public function search()
	{
		$query = Input::get('searched');
		return View::make('searched')->withTheses(DB::table('theses')->where('approval', '=', 'true')->where('subject', 'iLIKE', '%' . $query . '%')->orWhere('descr', 'iLIKE', '%' . $query . '%')->get());
	
	}
	public function searchLect()
	{
		
		$query = Input::get('searched_lect');
		
		if(isset(DB::table('users')->where('name', 'iLIKE', '%' . $query . '%')->get()[0]->id) ){
			$lect_id = DB::table('users')->where('name', 'iLIKE', '%' . $query . '%')->get()[0]->id;
			return View::make('searched')->withTheses(DB::table('theses')->where('lecturer_id','=', $lect_id)->where('approval', '=', 'true')->get());
		}
		return View::make('searched')->withTheses(DB::table('theses')->where('lecturer_id','=', '0')->get());
		
	}
	public function store()
	{
		
		$th_id = Auth::user()->thesis_id;
		
		$file = array('image' => Input::file('image'));
		
		$thesis = Thesis::findOrFail($th_id);
		$thesis->fileName = Input::file('image')->getClientOriginalName();
		$thesis->save();
		
		//var_dump($file);
		
		if(Input::file('image') != NULL){
			if (Input::file('image')->isValid()) {
				
				$thesis = Thesis::findOrFail($th_id);
				$thesis->docum = 1;
				$thesis->save();
				
				$destinationPath = 'public\assets\thesis_'.$th_id; // upload path
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				Input::file('image')->move($destinationPath, Input::file('image')->getClientOriginalName());
				Session::flash('error', 'Upload successfully');
			}
			else {
				Session::flash('error', 'uploaded file is not valid');
			}
		}

 		return Redirect::to('');
	}
	
	public function approve($id)
	{
		$thesis = Thesis::findOrFail($id);
		$thesis->approval = true;
		$thesis->save();
		
		return $thesis;
	}
	
	public function reserved($id, $student)
	{
		$thesis = Thesis::findOrFail($id);
		$thesis->student_id = $student;
		$user = User::findOrFail($student);
		$user->thesis_id = $id;
		$thesis->save();
		$user->save();
	
		return $thesis;
	}
	
public function remove($id)
	{
		$user = User::findOrFail($id);
		$thes_id = $user->thesis_id;
		$user->thesis_id = NULL;
		$thesis = Thesis::findOrFail($thes_id);
		$thesis->student_id = NULL;
		$thesis->fileName = NULL;
		$thesis->save();
		$user->save();
		
		return $thesis;
	}
	
	public function show($id){
		return View::make('thesis.praca_dyplomowa')->withId($id);
	}
	
}