<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Association;
use Illuminate\Http\Request;

class AssociationAPI extends Controller
{

    public function index()
    {
        $associations = Association::all();
        return response()->json($associations);
    }

    public function show($id)
    {
        $association = Association::find($id);
        if ($association) {
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $association = Association::create($request->all());
        return response()->json($association);
    }

    public function update(Request $request, $id)
    {
        $association = Association::find($id);
        if ($association) {
            $association->update($request->all());
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

    public function destroy($id)
    {
        $association = Association::find($id);
        if ($association) {
            $association->delete();
            return response()->json(['message' => 'Association deleted']);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

 # filter

    public function filterByName($name)
    {
        $association = Association::where('name', 'like', '%' . $name . '%')->get();
        if ($association) {
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

    public function filterByLocalisation($localisation)
    {
        $association = Association::where('localisation', 'like', '%' . $localisation . '%')->get();
        if ($association) {
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

    public function filterByResponsable($responsable)
    {
        $association = Association::where('responsable', 'like', '%' . $responsable . '%')->get();
        if ($association) {
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

    public function filterByDescription($description)
    {
        $association = Association::where('description', 'like', '%' . $description . '%')->get();
        if ($association) {
            return response()->json($association);
        } else {
            return response()->json(['message' => 'Association not found'], 404);
        }
    }

}
