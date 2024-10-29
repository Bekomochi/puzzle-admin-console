<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function store(Request $request)
    {
        $ranking = Ranking::create([
            'stageID' => $request->stageID,
            'userID' => $request->userID,
            'highScore' => $request->highScore
        ]);
    }

    public function show(Request $request)
    {
        $ranking = Ranking::where('stageID', '=', $request->stage_id)->orderByDesc('highScore')->get();
        return response()->json($ranking);
    }
}
