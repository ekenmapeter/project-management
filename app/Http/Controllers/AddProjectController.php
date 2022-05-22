<?php

namespace App\Http\Controllers;
use Redirect;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;

class AddProjectController extends Controller
{
    


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storenewproject (Request $request)
    {
        $request->validate([
            'projecttitle' => ['required', 'string', 'max:255'],
            'awardeddate' => ['required', 'string',  'max:255'],
            'statelocated' => ['required', 'string', 'max:255'],
            'contractor' => ['required', 'string', 'max:255'],
            'supervisor' => ['required', 'string', 'max:255'],
            'division' => ['required', 'string', 'max:255'],
            'coordinator' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'objectives' => ['required', 'string', 'max:255'],
            'percentcompleted' => ['required', 'string', 'max:255'],
            'retention' => ['required', 'string', 'max:255'],
            'completiondate' => ['required', 'string', 'max:255'],
            'completedate' => ['required', 'string', 'max:255'],
        ]);

        $project = Project::create([
            'projecttitle' => $request->projecttitle,
            'awardeddate' => $request->awardeddate,
            'statelocated' => $request->statelocated,
            'contractor' => $request->contractor,
            'supervisor' => $request->supervisor,
            'division' => $request->division,
            'coordinator' => $request->coordinator,
            'state' => $request->state,
            'objectives' => $request->objectives,
            'percentcompleted' => $request->percentcompleted,
            'retention' => $request->retention,
            'completiondate' => $request->completiondate,
            'completedate' => $request->completedate,
        ]);

        //event(new Registered($project));

        //Auth::login($user);
        Session::flash('message', 'New Project <span class="badge text-bg-primary">'.$request->projecttitle.'</span> has being created'); 
        Session::flash('alert-class', 'alert-success');
        return Redirect::back();
        
    }
}
