<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    //
    public function show(Request $request)
    {
        $ranking = Ranking::findOrFail($request->ranking_id);
        return response()->json($ranking);
    }

    public function store(Request $request)
    {
        $ranking = Ranking::create([
            'stageID' => $request->stageID,
            'userID' => $request->userID,
            'highScore' => $request->highScore
        ]);
        return response()->json(['ranking_id' => $ranking->id]);
    }
}
