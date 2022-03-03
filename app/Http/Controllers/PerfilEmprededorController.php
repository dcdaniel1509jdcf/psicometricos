<?php

namespace App\Http\Controllers;

use App\PerfilEmprededor;
use App\Exports\emprendedorGlobal;
use Exception;
use App\HistoricoEmprededor;
use Illuminate\Http\Request;
use App\Intentos;
use Auth;

class PerfilEmprededorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $preguntas['emprendedor']=PerfilEmprededor::where('is_active',1)->get();

        $validador=Intentos::where('usuario_id',Auth::user()->id)->where('tipo_test',"Perfil Emprededor")->first();
        if ($validador) {
            $habilitado=Intentos::where('usuario_id', Auth::user()->id)->where('tipo_test', "Perfil Emprededor")->where("is_active", 1)->first();

            if ($habilitado) {
                $preguntas['estado']=0;
                return view('appTest.index', $preguntas);
            }else{
                $preguntas['estado']="No Habilitado";
               return view('appTest.index',$preguntas);
            }

           }else{
            Intentos::create(["tipo_test"=>"Perfil Emprededor","usuario_id"=>Auth::user()->id]);
            $preguntas['estado']=0;
            return view('appTest.index',$preguntas);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req=$request->except('_token');
        $pe1="Es la persona que hace que la idea aterrice, es operativa y práctica. Busca la eficiencia para el logro de los objetivos.";
        $pe2="Es la persona creativa, se centra en los conocimientos,  puede detectar una necesidad y desarrollar una solución.";
        $pe3="Es la persona que tiene facilidad para relacionarse con los demás y adaptarse al entorno, es tolerante y puede comprender a los otros. Tiene buenas capacidades negociadoras.";
        $acum=0;
        $r1='Las características asociadas al perfil son escasas, esto no significa que no se las pueda desarrollar, recuerde que el perfil es la suma de habilidades y comportamientos que con práctica y constancia pueden ser desarrolladas.';
        $r2='Tiene algunas de las características del perfil definido, con práctica y sin mucho esfuerzo es posible que llegue a desarrollar completamente el perfil.';
        $r3='Cumple con las características del perfil definido. Es recomendable que trabaje en un plan que permita aprovechar sus fortalezas.';
        $perfil="No Se Encontro un Perfil";
        foreach ($req as $key) {
            $data=$key;
            $acum=$data+$acum;
        }
        $acumss=$request->q1+$request->q4+$request->q8+$request->q10+$request->q14+$request->q17+$request->q20;
        $acumsr=$request->q2+$request->q5+$request->q7+$request->q9+$request->q12+$request->q15+$request->q18;
        $acumsh=$request->q3+$request->q6+$request->q11+$request->q13+$request->q16+$request->q19+$request->q21;

        $rSS="";
        $rSH="";
        $rSR="";
        if($acumss<25){
            $rSS=$r1;
        }
        if($acumss>=25 && $acumss<30){
            $rSS=$r2;
        }
        if($acumss>=30 && $acumss<35){
            $rSS=$r3;
        }
        if($acumsh<25){
            $rSH=$r1;
        }
        if($acumsh>=25 && $acumsh<30){
            $rSH=$r2;
        }
        if($acumsh>=30 && $acumsh<35){
            $rSH=$r3;
        }
        if($acumsr<25){
            $rSR=$r1;
        }
        if($acumsr>=25 && $acumsr<30){
            $rSR=$r2;
        }
        if($acumsr>=30 && $acumsr<35){
            $rSR=$r3;
        }
        //return $perfil;
        $data=['sh'=>$pe1,
        'ss'=>$pe2,
        'sr'=>$pe3,
        'rss'=>$rSS,
        'rsh'=>$rSH,
        'rsr'=>$rSR,
        'vrss'=>$acumss,
        'vrsh'=>$acumsh,
        'vrsr'=>$acumsr];
       //return $request;
       $intento=Intentos::where('usuario_id',Auth::user()->id)->where('tipo_test',"Perfil Emprededor")->update(['is_active'=>0]);
       HistoricoEmprededor::create(['sh'=>$pe1,
       'ss'=>$pe2,
       'sr'=>$pe3,
       'rss'=>$rSS,
       'rsh'=>$rSH,
       'rsr'=>$rSR,
       'vrss'=>$acumss,
       'vrsh'=>$acumsh,
       'vrsr'=>$acumsr,
       'vtotal'=>$acum,
       'nombre'=> Auth::user()->lastname.' '.Auth::user()->firstname]);
         return view('appTest.resultados',$data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PerfilEmprededor  $perfilEmprededor
     * @return \Illuminate\Http\Response
     */





}
