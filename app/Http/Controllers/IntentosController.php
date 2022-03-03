<?php

namespace App\Http\Controllers;

use App\User;
use App\Intentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class IntentosController extends Controller
{

    public function indexReporte()
    {
        $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->get();

        $getCol="";
        $colegios="";


        $rol=substr(Auth::user()->roles, 0, 3);

        if ($rol=="a:1") {
            $colegios=DB::table('session')
            ->select('id', 'name')
            ->get();
        } else {
            if (Auth::user()->status == '1') {
                $getCol=DB::table('session_rel_course_rel_user')
                ->join('user', 'session_rel_course_rel_user.user_id', '=', 'user.id')
                ->select('session_rel_course_rel_user.session_id')
                ->where('session_rel_course_rel_user.user_id', Auth::user()->id)
                ->distinct()
                ->pluck("session_rel_course_rel_user.session_id");
                $colegios=DB::table('session')
                ->select('id', 'name')
                ->whereIn('id', $getCol)
                ->get();
            }
        }
    /*    $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->paginate(5);
*/
        return view('appTest.reportes', compact( 'colegios'));
    }

    public function indexReporte2()
    {
        $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->get();

        $getCol="";
        $colegios="";


        $rol=substr(Auth::user()->roles, 0, 3);

        if ($rol=="a:1") {
            $colegios=DB::table('session')
            ->select('id', 'name')
            ->get();
        } else {
            if (Auth::user()->status == '1') {
                $getCol=DB::table('session_rel_course_rel_user')
                ->join('user', 'session_rel_course_rel_user.user_id', '=', 'user.id')
                ->select('session_rel_course_rel_user.session_id')
                ->where('session_rel_course_rel_user.user_id', Auth::user()->id)
                ->distinct()
                ->pluck("session_rel_course_rel_user.session_id");
                $colegios=DB::table('session')
                ->select('id', 'name')
                ->whereIn('id', $getCol)
                ->get();
            }
        }
    /*    $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->paginate(5);
*/
        return view('appTest.reportesHabilidades', compact( 'colegios'));
    }
    public function index()
    {
        $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->get();

        $getCol="";
        $colegios="";


        $rol=substr(Auth::user()->roles, 0, 3);

        if ($rol=="a:1") {
            $colegios=DB::table('session')
            ->select('id', 'name')
            ->get();
        } else {
            if (Auth::user()->status == '1') {
                $getCol=DB::table('session_rel_course_rel_user')
                ->join('user', 'session_rel_course_rel_user.user_id', '=', 'user.id')
                ->select('session_rel_course_rel_user.session_id')
                ->where('session_rel_course_rel_user.user_id', Auth::user()->id)
                ->distinct()
                ->pluck("session_rel_course_rel_user.session_id");
                $colegios=DB::table('session')
                ->select('id', 'name')
                ->whereIn('id', $getCol)
                ->get();
            }
        }
    /*    $intentos=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->where('roles', 'a:0:{}')
        ->paginate(5);
*/
        return view('appTest.intentos', compact( 'colegios'));
    }
    public function getCourses(Request $request)
    {
        /* $cursos=DB::table('gradebook_category')
         ->select('id', 'name')
         ->where('session_id',$request->id)
         ->get();
         */
        $idcursos=DB::table('session_rel_course')
        ->select('c_id')
        ->where('session_id', $request->id)
        ->pluck('c_id');
        $cursos=DB::table('course')
        ->select('id', 'title')
        ->whereIn('id', $idcursos)
        ->get();
        return $cursos;
    }
    public function getEstudiantes(Request $request)
    {
        $idUser=DB::table('session_rel_course_rel_user')
        ->select('user_id')
        ->where('c_id', $request->idCur)
        ->where('session_id', $request->idCol)
        ->pluck('user_id');
        $cursos=DB::table('user')
        ->select('id', 'lastname', 'firstname')
        ->whereIn('id', $idUser)
        ->get();
        return $cursos;
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
        $getuser=DB::table('intentos_psicometricos')
        ->join('user', 'intentos_psicometricos.usuario_id', '=', 'user.id')
        ->select('user.firstname', 'user.lastname', 'intentos_psicometricos.id as idIntento', 'intentos_psicometricos.is_active', 'intentos_psicometricos.tipo_test')
        ->whereIn('user.id', $id)
        ->get();

        $print= '<table class="table table-responsive " id="dbtable">';
        $print.='<thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipo de Test</th>
            <th>Estado</th>
            <th>Activar Intentos</th>
        </tr>
    </thead>';
        $print.='<tbody>';
        foreach ($getuser as $dat) {
            $print.= '    <tr>

            <td>'. $dat->firstname.'</td>
            <td>'. $dat->lastname .'</td>

            <td>'. $dat->tipo_test .'</td>
            <td>';
            if ($dat->is_active == '1') {
                $print.= 'No Rendido';
        }
                if ($dat->is_active == '0'){
                    $print.= '  Rendido ';
                }
                $print.= '   </td>';
                $print.= ' <td>
                    <a href="/Intentos/get/'. $dat->idIntento.'"
                        onClick="return confirm('. '"Activar intentos para el Usuario?"'.')"
                        class="btn btn-sm btn-danger"> <i class="fad fa-pencil"></i></a>
            </td>
        </tr>';
        }
        $print.='</tbody>';
        $print.='</table>';
        echo $print;
    }
    public function userIntentos($id)
    {
        $data=Intentos::where('id', $id)->update(['is_active'=>1]);

        $message="Intentos Activados";
        return redirect()->route('vista.intentos')->with(['message' => $message]);
    }
    public function userIntentosTodos(Request $request)
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
        $data=Intentos::whereIn('usuario_id', $idU)->where('tipo_test',$request->tipo)->update(['is_active'=>1]);

        $message="Intentos Activados";
        return redirect()->route('vista.intentos')->with(['message' => $message]);
    }
}
