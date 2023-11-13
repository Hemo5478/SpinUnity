<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EventAPI extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return response()->json($evenements);
    }

    public function show($id)
    {
        $evenement = Evenement::find($id);
        if ($evenement) {
            return response()->json($evenement);
        } else {
            return response()->json(['message' => 'Evenement not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $evenement = Evenement::create($request->all());
        return response()->json($evenement);
    }

    public function update(Request $request, $id)
    {
        $evenement = Evenement::find($id);
        if ($evenement) {
            $evenement->update($request->all());
            return response()->json($evenement);
        } else {
            return response()->json(['message' => 'Evenement not found'], 404);
        }
    }

    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        if ($evenement) {
            $evenement->delete();
            return response()->json(['message' => 'Evenement deleted']);
        } else {
            return response()->json(['message' => 'Evenement not found'], 404);
        }
    }

    public function searchByName($name)
    {
        $evenement = Evenement::where('name', 'like', '%' . $name . '%')->get();
        if ($evenement) {
            return response()->json($evenement);
        } else {
            return response()->json(['message' => 'Evenement not found'], 404);
        }
    }
}