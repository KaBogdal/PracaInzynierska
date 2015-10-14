  <?php

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
	
	public function getThesisList($lecturer){
		return View::make('thesis.all')->withTheses(DB::table('theses')->where('lecturer_id','=',$lecturer)->get());
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
	
/* 	public function addThesis()
	{
		$th_id = Auth::user()->thesis_id;
		
		$file = array('image' => Input::file('image'));
		
		if(Input::file('image') != NULL){
			if (Input::file('image')->isValid()) {
				$destinationPath = 'public\assets\thesis_1';//.$th_id; // upload path
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				Input::file('image')->move($destinationPath, Input::file('image')->getClientOriginalName()); // uploading file to given path
				// sending back with message
				Session::flash('error', 'Upload successfully');
				return Redirect::to('')->withErrors('Upload successfully');
			}
			else {
				// sending back with error message.
				Session::flash('error', 'uploaded file is not valid');
				return Redirect::to('');
			}
		}
		
		
	}
	 */
	
	
	public function store()
	{
		
		$th_id = Auth::user()->thesis_id;
		
		$file = array('image' => Input::file('image'));
		
		var_dump($file);
		
		if(Input::file('image') != NULL){
			if (Input::file('image')->isValid()) {
				$destinationPath = 'public\assets\thesis_'.$th_id; // upload path
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				Input::file('image')->move($destinationPath, Input::file('image')->getClientOriginalName()); // uploading file to given path
				// sending back with message
				Session::flash('error', 'Upload successfully');
// 				return Redirect::to('')->withErrors('Upload successfully');
			}
			else {
				// sending back with error message.
				Session::flash('error', 'uploaded file is not valid');
// 				return Redirect::to('');
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
		$thesis->save();
		$user->save();
		
		return $thesis;
	}
	
}