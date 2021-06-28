<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UnitKnowledge;

class UnitKnowledgeController extends Controller
{
    //
    public function getAll()
    {
        $listUnitKnowledge = UnitKnowledge::all();

        return response()->json(["listUnitKnowledge" => $listUnitKnowledge]);
        
    }

    public function getById($id)
    {
        $unitKnowledge = UnitKnowledge::find($id);

        return response()->json(["unitKnowledge" => $unitKnowledge]);
    }
}
