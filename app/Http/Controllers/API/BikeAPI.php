<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use Illuminate\Http\Request;

class BikeAPI extends Controller
{

    public function index()
    {
        $bikes = Bike::all();
        return response()->json($bikes);
    }

    public function show($id)
    {
        $bike = Bike::find($id);
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $bike = Bike::create($request->all());
        return response()->json($bike);
    }

    public function update(Request $request, $id)
    {
        $bike = Bike::find($id);
        if ($bike) {
            $bike->update($request->all());
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

    public function destroy($id)
    {
        $bike = Bike::find($id);
        if ($bike) {
            $bike->delete();
            return response()->json(['message' => 'Bike deleted']);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

 # filter

    public function filterByName($name)
    {
        $bike = Bike::where('name', 'like', '%' . $name . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

    public function filterByPrice($price)
    {
        $bike = Bike::where('price', 'like', '%' . $price . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

    public function filterByColor($color)
    {
        $bike = Bike::where('color', 'like', '%' . $color . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

    public function filterBySize($size)
    {
        $bike = Bike::where('size', 'like', '%' . $size . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }

    }

    public function filterByWeight($weight)
    {
        $bike = Bike::where('weight', 'like', '%' . $weight . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }

    }

    public function filterByType($type)
    {
        $bike = Bike::where('type', 'like', '%' . $type . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }

    }

    public function filterByBrand($brand)
    {
        $bike = Bike::where('brand', 'like', '%' . $brand . '%')->get();
        if ($bike) {
            return response()->json($bike);
        } else {
            return response()->json(['message' => 'Bike not found'], 404);
        }
    }

}
