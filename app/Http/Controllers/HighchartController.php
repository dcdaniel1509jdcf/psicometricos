<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\HistoricoHabilidades;
use Illuminate\Support\Facades\DB;



class HighchartController extends Controller
{
    public function handleChart()
    {
        $userData = User::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
       // return $userData;

        return view('appTest.graficos', compact('userData'));
    }
}
