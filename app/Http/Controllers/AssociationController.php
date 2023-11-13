<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Achievement;
use Illuminate\Support\Facades\Auth;

class AssociationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enroll()
    {
        $userId = request('user_id');
        $associationId = request('association_id');
        $user = User::find($userId);
        $association = Association::find($associationId);
        $achievementPoints = 100;
        $achievement = new Achievement([
            'name' => 'Your Achievement Title',
            'description' => 'Your Achievement Description',
            'points' => $achievementPoints, 
            'user_id' => $userId 
        ]);
        $achievement->save();
        $user->increment('total_points', $achievementPoints);
        $user->save();

        if ($user && $association) {
            // Attach the user to the association and save additional data in the pivot table
            $user->associations()->attach($association);
    
            return redirect()->route('user-association')->with('success', 'Enrolled in the association successfully.');
        }
    
        return redirect()->route('user-association')->with('error', 'Failed to enroll in the association.');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Association::latest()->paginate(5);

        return view('backend.association.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.association.create', compact('users') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'localisation'          =>  'required',
            'description'          =>  'required',
            'responsable'         =>  'required',
            'user_id'         =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'g-recaptcha-response' => 'required|captcha'

        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $association = new Association;
        $association->user_id = $request->user_id;
        $association->name = $request->name;
        $association->localisation = $request->localisation;
        $association->description = $request->description;
        $association->responsable = $request->responsable;
        $association->image = $file_name;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Association Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        return view('backend.association.show', compact('association'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('backend.association.edit', compact('association'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'name'      =>  'required',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $image = $request->hidden_image;

        if($request->image != '')
        {
            $image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $association = Association::find($request->hidden_id);

        $association->name = $request->name;

        $association->localisation = $request->localisation;

        $association->description = $request->description;

        $association->responsable = $request->responsable;

        $association->image = $image;

        $association->save();

        return redirect()->route('associations.index')->with('success', 'Association Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        $association->delete();

        return redirect()->route('associations.index')->with('success', 'Association Data deleted successfully');
    }

/** 
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function association()
{
    $userId = auth()->id();

    // Use whereDoesntHave to retrieve associations where the user is not enrolled
    $data = Association::whereDoesntHave('users', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })->paginate(9);

    return view('frontend.association', compact('data'));
}

 /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function associationdetails($associationeId)
    {
        $association = Association::findOrFail($associationeId);
        $user = User::findOrFail($association -> user_id);
        return view('frontend.association-details', compact('association', 'user'));
    }
 /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // ...
    }
}