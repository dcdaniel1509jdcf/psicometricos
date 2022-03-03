<?php

namespace App\Http\Controllers;

use App\HistoricoEmprededor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\emprendedorGlobal;

class HistoricoEmprededorController extends Controller
{
    public function reporteGlobal()
    {
        $data['data']=HistoricoEmprededor::select('vrsh', 'rsh', 'vrss', 'rss', 'vrsr', 'rsr', 'nombre')->get();
        return Excel::download(new emprendedorGlobal($data), "Reporte_Emprendedor_General.xlsx");
    }
    public function reporteGlobalId($id)
    {
        $data['data']=HistoricoEmprededor::select('vrsh', 'rsh', 'vrss', 'rss', 'vrsr', 'rsr', 'nombre')->where('id', $id)->get();
        return Excel::download(new emprendedorGlobal($data), "Reporte_Emprendedor_General.xlsx");
    }

    public function reporteGlobalUser($id)
    {
        $data['data']=HistoricoEmprededor::select('vrsh', 'rsh', 'vrss', 'rss', 'vrsr', 'rsr', 'nombre')->where('user_id', $id)->get();
        return Excel::download(new emprendedorGlobal($data), "Reporte_Emprendedor_General.xlsx");
    }

    public function getEstudiantesTable(Request $request)
    {
        $idUser=DB::table('session_rel_course_rel_user')
        ->select('user_id')
        ->where('c_id', $request->idCur)
        ->where('session_id', $request->idCol)
        ->pluck('user_id');
        $id=DB::table('user')
        ->select('id')
        ->whereIn('id', $idUser)
        ->distinct()
        ->pluck("id");
        $getuser=DB::table('historico_emprededors')
        ->join('user', 'historico_emprededors.user_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'historico_emprededors.id as idHistorico')
        ->whereIn('historico_emprededors.user_id', $id)
        ->get();

        $print= '<table class="table table-responsive " id="dbtable">';
        $print.='<thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>

            <th>Reporte</th>
        </tr>
    </thead>';
        $print.='<tbody>';
        foreach ($getuser as $dat) {
            $print.= '    <tr>

            <td>'. $dat->firstname.'</td>
            <td>'. $dat->lastname .'</td>';


            $print.= ' <td>
                    <a href="/reporteGeneral/get/'. $dat->idHistorico.'"
                        onClick="return confirm('. '"Activar intentos para el Usuario?"'.')"
                        class="btn btn-sm btn-danger"> <i class="far fa-file-excel"></i></a>
            </td>
        </tr>';
        }
        $print.='</tbody>';
        $print.='</table>';
        echo $print;
    }

    public function getTodosUser(Request $request)
    {
        $idUser=DB::table('session_rel_course_rel_user')
        ->select('user_id')
        ->where('c_id', $request->idCur)
        ->where('session_id', $request->idCol)
        ->pluck('user_id');
        $idU=DB::table('user')
        ->select('id')
        ->whereIn('id', $idUser)
        ->pluck('id');
        $data['data']=HistoricoEmprededor::select('vrsh', 'rsh', 'vrss', 'rss', 'vrsr', 'rsr', 'nombre')->whereIn('user_id', $idU)->get();

        return Excel::download(new emprendedorGlobal($data), "Reporte_Emprendedor_General.xlsx");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HistoricoEmprededor  $historicoEmprededor
     * @return \Illuminate\Http\Response
     */
    public function show(HistoricoEmprededor $historicoEmprededor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HistoricoEmprededor  $historicoEmprededor
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoricoEmprededor $historicoEmprededor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HistoricoEmprededor  $historicoEmprededor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoricoEmprededor $historicoEmprededor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HistoricoEmprededor  $historicoEmprededor
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoricoEmprededor $historicoEmprededor)
    {
        //
    }

    public function resultados($id)
    {
        $data1=HistoricoEmprededor::where('user_id', $id)->orderBy('id','DESC')->first();
        if($data1){
            $data=['sh'=>$data1->sh,
            'ss'=>$data1->ss,
            'sr'=>$data1->sr,
            'rss'=>$data1->rss,
            'rsh'=>$data1->rsh,
            'rsr'=>$data1->rsr,
            'vrss'=>$data1->vrss,
            'vrsh'=>$data1->vrsh,
            'vrsr'=>$data1->vrsr,
        'user_test'=>$data1->nombre];
            return view('appTest.verEmprendedor',$data);
        }

    }
}
