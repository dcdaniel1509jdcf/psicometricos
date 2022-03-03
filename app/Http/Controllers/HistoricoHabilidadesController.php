<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoricoHabilidades;
use App\Exports\habilidadesGlobal;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HistoricoHabilidadesController extends Controller
{
    public function reporteGlobal()
    {
        $data['data']=HistoricoHabilidades::select(
            'nombre',
            'perfil',
            'vperfil',
            'desicion',
            'vdesicion',
            'riesgo',
            'vriesgo',
            'equipo',
            'vequipo',
            'persistencia',
            'vpersistencia',
            'liderazgo',
            'vliderazgo',
            'emocional',
            'vemocional',
            'comunicacion',
            'vcomunicacion',
            'compromiso',
            'vcompromiso'
        )->get();
        return Excel::download(new habilidadesGlobal($data), "Reporte_Habilidades_General.xlsx");
    }
    public function reporteGlobalUser2($id)
    {
        $data['data']= $data['data']=HistoricoHabilidades::select(
            'nombre',
            'perfil',
            'vperfil',
            'desicion',
            'vdesicion',
            'riesgo',
            'vriesgo',
            'equipo',
            'vequipo',
            'persistencia',
            'vpersistencia',
            'liderazgo',
            'vliderazgo',
            'emocional',
            'vemocional',
            'comunicacion',
            'vcomunicacion',
            'compromiso',
            'vcompromiso'
        )->where('user_id', $id)->get();
        return Excel::download(new habilidadesGlobal($data), "Reporte_Habilidades_General.xlsx");
    }

    public function reporteGlobalId($id)
    {
        $data['data']= $data['data']=HistoricoHabilidades::select(
            'nombre',
            'perfil',
            'vperfil',
            'desicion',
            'vdesicion',
            'riesgo',
            'vriesgo',
            'equipo',
            'vequipo',
            'persistencia',
            'vpersistencia',
            'liderazgo',
            'vliderazgo',
            'emocional',
            'vemocional',
            'comunicacion',
            'vcomunicacion',
            'compromiso',
            'vcompromiso'
        )->where('id', $id)->get();
        return Excel::download(new habilidadesGlobal($data), "Reporte_Habilidades_General.xlsx");
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
        $getuser=DB::table('historico_habilidades')
        ->join('user', 'historico_habilidades.user_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'historico_habilidades.id as idHistorico')
        ->whereIn('historico_habilidades.user_id', $id)
        //->orderBy('user')
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
                    <a href="/reporteGeneral2/get/'. $dat->idHistorico.'"
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
        $data['data']=$data['data']=HistoricoHabilidades::select(
            'nombre',
            'perfil',
            'vperfil',
            'desicion',
            'vdesicion',
            'riesgo',
            'vriesgo',
            'equipo',
            'vequipo',
            'persistencia',
            'vpersistencia',
            'liderazgo',
            'vliderazgo',
            'emocional',
            'vemocional',
            'comunicacion',
            'vcomunicacion',
            'compromiso',
            'vcompromiso'
        )->whereIn('user_id', $idU)->get();

        return Excel::download(new habilidadesGlobal($data), "Reporte_Habilidades_General.xlsx");
    }


    public function resultados($id)
    {
         $data1=HistoricoHabilidades::where('user_id', $id)->orderBy('id','DESC')->first();
if($data1){
    $data=['res'=>$data1->perfil,'desicion'=>$data1->desicion,
        'riegos'=>$data1->riego,
        'equipo'=>$data1->equipo,
        'persistencia'=>$data1->persistencia,
        'liderazgo'=>$data1->liderazgo,
        'emocional'=>$data1->emocional,
        'comunicacion'=>$data1->comunicacion,
        'compromiso'=>$data1->compromiso,
        'vequipo'=>$data1->vequipo,
        'vdesicion'=>$data1->vdesicion,
        'vpersistencia'=>$data1->vpersistencia,
        'vliderazgo'=>$data1->vliderazgo,
        'vemocional'=>$data1->vemocional,
        'vriesgo'=>$data1->vriesgo,
        'vcomunicacion'=>$data1->vcomunicacion,
        'vcompromiso'=>$data1->vcompromiso];
    return view('appTest.resultadosHabilidades',$data);
}

    }
}
