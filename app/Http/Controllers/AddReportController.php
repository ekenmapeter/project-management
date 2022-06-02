<?php

namespace App\Http\Controllers;
use Redirect;
use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Project;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;

class AddReportController extends Controller
{
    
 public function store(Request $request){
        if($request->hasFile('id_doc')){
            $id = Auth::id();
            $file = $request->file('id_doc');
            $filename = "reportdocument_".uniqid().".".$request->file('id_doc')->extension();
            $dib_requestPath    =   'storage/users/upload/'.$id.'/Report/upload/';
            $updated_at      = time();
           // $dib_receivePath    = 'storage/users/upload/'.$user->id.'/IndentificationData/receive/';

            $request->file('id_doc')->move($dib_requestPath, $filename);

               TemporaryFile::create([
                'user_id'=> $id,
                'folder' => $dib_requestPath,
                'filename' => $filename,
                'updated_at' => $updated_at
            ]);

            $FullFilePath = $dib_requestPath .''. $filename;
            return $FullFilePath;
        }
        
        return '';
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storenewreport (Request $request)
    {
        $request->validate([
            'visitdate' => ['required', 'string', 'max:255'],
            'selectproject' => ['required', 'string',  'max:255'],
            'projectlocation' => ['required', 'string', 'max:255'],
            'percentcompletion' => ['required', 'string', 'max:255'],
            'challenges' => ['required', 'string', 'max:255'],
            'recommendations' => ['required', 'string', 'max:1000'],
            'id_doc' => ['required', 'string', 'max:555'],
            'supervisordivistion' => ['required', 'string', 'max:255'],
            'socialimpact' => ['required', 'string', 'max:1000'],
            'zonalcomment' => ['required', 'string', 'max:1000'],
        ]);

        $project = Report::create([
            'visitdate' => $request->visitdate,
            'selectproject' => $request->selectproject,
            'projectlocation' => $request->projectlocation,
            'percentcompletion' => $request->percentcompletion,
            'challenges' => $request->challenges,
            'recommendations' => $request->recommendations,
            'docfile' => $request->id_doc,
            'supervisordivistion' => $request->supervisordivistion,
            'socialimpact' => $request->socialimpact,
            'zonalcomment' => $request->zonalcomment,
        ]);

        //event(new Registered($project));

        //Auth::login($user);
        Session::flash('message', 'Your Report with Project Name <span class="badge text-bg-primary">'.$request->selectproject.'</span> has being submitted'); 
        Session::flash('alert-class', 'alert-success');
        return Redirect::back();
        
    }


    public function projectSearch(Request $request)
    {
        $projectlist = [];

        if($request->has('q')){
            $search = $request->q;
            $projectlist =Project::select("id", "projecttitle")
                    ->where('projecttitle', 'LIKE', "%$search%")
                    ->get();
        }
        return response()->json($projectlist);
        
    }

 public function indexPaging(Request $request)
{
    $filter = $request->query('filter');
     if (!empty($filter)) {
        $reports = Report::sortable()
            ->where('reports.selectproject', 'like', '%'.$filter.'%')
            ->paginate(5);
    } else {
        $reports = Report::sortable()
            ->paginate(5);
    }

    return view('view-report-view')->with('reports', $reports)->with('filter', $filter);
}



public function edit()
{

}

public function destroy()
{
    
}


}
