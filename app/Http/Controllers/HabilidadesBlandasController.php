<?php

namespace App\Http\Controllers;

use App\HabilidadesBlandas;
use Illuminate\Http\Request;
use App\HistoricoHabilidades;
use App\Intentos;
use Auth;

class HabilidadesBlandasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $preguntas['habilidades']=HabilidadesBlandas::all();

        $validador=Intentos::where('usuario_id',Auth::user()->id)->where('tipo_test',"Habilidades Blandas")->first();
       // $preguntas['habilidades']=HabilidadesBlandas::simplePaginate(7);
       //dd($preguntas);
       if($validador){
        $habilitado=Intentos::where('usuario_id',Auth::user()->id)->where('tipo_test',"Habilidades Blandas")->where("is_active",1)->first();

        if($habilitado){
            $preguntas['estado']=0;
            return view('appTest.index2',($preguntas));
        }else{
            $preguntas['estado']="No Habilitado";

           return view('appTest.index2',$preguntas);

        }
       }else{
        Intentos::create(["tipo_test"=>"Habilidades Blandas","usuario_id"=>Auth::user()->id]);
        $preguntas['estado']=0;
        return view('appTest.index2',$preguntas);
       }


       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $pe1='Usted tiene fortalecidas sus habilidades blandas, le invitamos a continuar trabajando en ellas como hasta ahora y recuerde "siempre hay que afilar la sierra". ';
        $pe2="Usted tiene bastante desarrolladas sus habilidades blandas, no obstante hay algunas que puede ser fortalecidas para lo cual le invitamos a ver el resultado individual por habilidad y entrenarse en las que lo necesita.";
        $pe3="Sus habilidades blandas necesitan ser trabajadas, revise el resultado idividual por habilidad y empiece a entrenarse.";
        $pe4="Es urgente que revise el resultado final por habilidad y se entrene en las mismas. Recuerde que las habilidades pueden ser entrenadas y con trabajo constante se pueden mejorar. ";
        $acum=0;
        $perfil="No Se Encontro un Perfil";
        foreach ($req as $key) {
            $data=$key;
            $acum=$data+$acum;
        }
        if($acum<120){
            $perfil=$pe4;
        }
        if($acum>=120 && $acum<160){
            $perfil=$pe3;
        }
        if($acum>=160 && $acum<180){
            $perfil=$pe2;
        }
        if($acum>=180 && $acum<200){
            $perfil=$pe1;
        }
        $tEquipo="";
        $rq1=$request->q1+$request->q2+$request->q3+$request->q4;
        if($rq1>=18 ){
            $tEquipo="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq1<18){
            $tEquipo="Te recomendamos las aiguientes pr??cticas que se seguro te van ayudar en este proceso
            - Plant??ate metas en conjunto (familia, amigos, compa??eros) y b??las a peque??os pasos consecutivos. No te olvides de darles seguimiento.
            - Reconoce los logros de otras personas, hazles saber que reconoces su esfuerzo y si es posible felic??talos en p??blico.
            - Escucha atentamente los puntos de vista de otras personas, si puedes toma nota y ap??yate de sus ideas para construir un objetivo com??n. ";
        }
        $tDesicion="";
        $rq2=$request->q5+$request->q6+$request->q7+$request->q8;
        if($rq2>=18 ){
            $tDesicion="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq2<18){
            $tDesicion="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - Cuando vayas a tomar una desici??n s?? conciente de los efectos y c??ntrate en lo que de verdad importa.
            - Cuando vayas a tomar alguna desici??n reune la mayor cantidad de informaci??n y toma una desici??n informada.
            - Evita la par??lisis del an??lisis, una desici??n debe ser tomada o no, no postergues demasiado con el pretexto de que la est??s pensando. ";
        }
        $tPersistencia="";
        $rq3=$request->q9+$request->q10+$request->q11+$request->q12;
        if($rq3>=18){
            $tPersistencia="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq3<18){
            $tPersistencia="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - Inicia una actividiad que te supone un esfuerzo y s?? constante m??nimo por 21 d??as (hacer ejercicio, aprender un idioma, aprender a tocar un instrumento, etc)
            - Establece un hoario de actividades, prioriza y cumple con ellas.
            - Investiga sobre personajes que lograron sus objetivos gracias a la persistencia, visul??zate como uno de ellos. ";
        }

        $tLiderazgo="";
        $rq4=$request->q13+$request->q14+$request->q15+$request->q16+$request->q17;
        if($rq4>=18){
            $tLiderazgo="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq4<18){
            $tLiderazgo="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - La pr??xima vez que debas trabajar en equipo, no intentes hacerlo todo t?? solo o no te aisles del resto. Conf??a en tus capacidades y en las de los dem??s.
            - No tengas miedo a tomar la iniciativa y proponer nuevas ideas. Lo peor que puede pasar es que te digan que no.
            - Ten un claro conocimiento  de tus fortalezas y debilidades, busca mejorar en forma continua, estudia, capac??tate, lee y reflexiona.
            - Cuando algo salga mal y seguro pasar??, no deslindes responsabilidades ni busques culpables. Conc??ntrate en las acciones a tomar para resolver el problema y ponerte en acci??n, ayuda a la persona responsable a reconocer su error y a repararlo, a fin de cuentas todos cometemos errores.";
        }

        $tEmocional="";
        $rq5=$request->q18+$request->q19+$request->q20+$request->q21+$request->q22+$request->q23+$request->q24+$request->q25;
        if($rq5>=18 ){
            $tEmocional="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq5<18){
            $tEmocional="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - Cuando sientas enojo, frustrai??n, miedo, etc. Date tiempo para reflexionar sobre lo que sientes e intenta averiguar siempre cu??les son las causas de esas emociones.
            - Caundo algo no salga como planeaste, recuerda que los cambios son una parte intr??nseca de la vida, ac??ptalos y aprende a adaptarte a ellos. M??ralos como una oportunidad para crecer.
            - Mantente atento a los sentimientos de los dem??s y, siempre que puedas, ay??dales a expresarlos de una manera asertiva.
            - Cuando te enfresntes a una situaci??n que te desespere o enoje, respira... lo primero que hay que hacer es reflexionar y luego actuar de una forma pac??fica.
            ";
        }
        $tRiesgos="";
        $rq6=$request->q26+$request->q27+$request->q28+$request->q29+$request->q30;
        if($rq6>=18){
            $tRiesgos="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq6<18){
            $tRiesgos="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - Realiza alguna actividad que consideres conllevan alg??n riesgo o que tengas temor de realizar (ojo siempre cuida de ti) por ejemplo: Declamar un poema en p??blico, realizar un video cantando, aprender a patinar, etc.
            -  Escr??bele un mensaje en redes sociales a una persona que admires, presentate y cuentale porqu?? la admiras, espera su respuesta, quiza te lleves una gran sorpresa.
            - Realiza un peque??o experimento de ventas, compra una funda de dulces y v??ndela entre tus amigos, familias y vecinos.";
        }

        $tComunicacion="";
        $rq7=$request->q31+$request->q32+$request->q33+$request->q34+$request->q35;
        if($rq7>=18 ){
            $tComunicacion="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq7<18){
            $tComunicacion="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - Escribe un peque??o ensayo sobre algo que te apasione y comparte tus ideas co alguna persona.
            - Mejora tu comunicaci??n no verbal, conversa contigo mismo frente al espejo y s?? conciente de tus gestos. ";
        }
        $tCompromiso="";
        $rq8=$request->q36+$request->q37+$request->q38+$request->q39+$request->q40;
        if($rq8>=18 ){
            $tCompromiso="??Felicidades! Contin??e trabajando como hasta ahora";
        }
        if($rq8<18){
            $tCompromiso="Es necesario afilar la sierra, puedes entranarte poniendo en pr??ctica estas acciones:
            - No postergues tus tareas o tus compromisos.
            - Cumple lo que ofreces y exige que cumplan lo que te han ofrecido.
            - Siempre pon lo mejor de ti en cada cosa que realices. ";
        }

        //return $perfil;
       // $valoresObtenidos=[$rq1,$rq2,$rq3,$rq4,$rq5,$rq6,$rq7,$rq8];
        $data=['res'=>$perfil,'desicion'=>$tDesicion,
        'riegos'=>$tRiesgos,
        'equipo'=>$tEquipo,
        'persistencia'=>$tPersistencia,
        'liderazgo'=>$tLiderazgo,
        'emocional'=>$tEmocional,
        'comunicacion'=>$tComunicacion,
        'compromiso'=>$tCompromiso,
        'vequipo'=>$rq1,
        'vdesicion'=>$rq2,
        'vpersistencia'=>$rq3,
        'vliderazgo'=>$rq4,
        'vemocional'=>$rq5,
        'vriesgo'=>$rq6,
        'vcomunicacion'=>$rq7,
        'vcompromiso'=>$rq8];
        $intento=Intentos::where('usuario_id',Auth::user()->id)->where('tipo_test',"Habilidades Blandas")->update(['is_active'=>0]);
        HistoricoHabilidades::create(['perfil'=>$perfil,
        'vperfil'=>$acum,
        'desicion'=>$tDesicion,
        'riesgo'=>$tRiesgos,
        'equipo'=>$tEquipo,
        'persistencia'=>$tPersistencia,
        'liderazgo'=>$tLiderazgo,
        'emocional'=>$tEmocional,
        'comunicacion'=>$tComunicacion,
        'compromiso'=>$tCompromiso,

        'vequipo'=>$rq1,
        'vdesicion'=>$rq2,
        'vpersistencia'=>$rq3,
        'vliderazgo'=>$rq4,
        'vemocional'=>$rq5,
        'vriesgo'=>$rq6,
        'vcomunicacion'=>$rq7,
        'vcompromiso'=>$rq8,
        'usuario_id'=> Auth::user()->id,
        'nombre'=> Auth::user()->lastname.' '.Auth::user()->firstname]);
        return view('appTest.resultadosHabilidades',$data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HabilidadesBlandas  $habilidadesBlandas
     * @return \Illuminate\Http\Response
     */
    public function show(HabilidadesBlandas $habilidadesBlandas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HabilidadesBlandas  $habilidadesBlandas
     * @return \Illuminate\Http\Response
     */
    public function edit(HabilidadesBlandas $habilidadesBlandas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HabilidadesBlandas  $habilidadesBlandas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HabilidadesBlandas $habilidadesBlandas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HabilidadesBlandas  $habilidadesBlandas
     * @return \Illuminate\Http\Response
     */
    public function destroy(HabilidadesBlandas $habilidadesBlandas)
    {
        //
    }
}
