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
            $tEquipo="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq1<18){
            $tEquipo="Te recomendamos las aiguientes prácticas que se seguro te van ayudar en este proceso
            - Plantéate metas en conjunto (familia, amigos, compañeros) y bálas a pequeños pasos consecutivos. No te olvides de darles seguimiento.
            - Reconoce los logros de otras personas, hazles saber que reconoces su esfuerzo y si es posible felicítalos en público.
            - Escucha atentamente los puntos de vista de otras personas, si puedes toma nota y apóyate de sus ideas para construir un objetivo común. ";
        }
        $tDesicion="";
        $rq2=$request->q5+$request->q6+$request->q7+$request->q8;
        if($rq2>=18 ){
            $tDesicion="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq2<18){
            $tDesicion="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - Cuando vayas a tomar una desición sé conciente de los efectos y céntrate en lo que de verdad importa.
            - Cuando vayas a tomar alguna desición reune la mayor cantidad de información y toma una desición informada.
            - Evita la parálisis del análisis, una desición debe ser tomada o no, no postergues demasiado con el pretexto de que la estás pensando. ";
        }
        $tPersistencia="";
        $rq3=$request->q9+$request->q10+$request->q11+$request->q12;
        if($rq3>=18){
            $tPersistencia="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq3<18){
            $tPersistencia="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - Inicia una actividiad que te supone un esfuerzo y sé constante mínimo por 21 días (hacer ejercicio, aprender un idioma, aprender a tocar un instrumento, etc)
            - Establece un hoario de actividades, prioriza y cumple con ellas.
            - Investiga sobre personajes que lograron sus objetivos gracias a la persistencia, visulízate como uno de ellos. ";
        }

        $tLiderazgo="";
        $rq4=$request->q13+$request->q14+$request->q15+$request->q16+$request->q17;
        if($rq4>=18){
            $tLiderazgo="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq4<18){
            $tLiderazgo="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - La próxima vez que debas trabajar en equipo, no intentes hacerlo todo tú solo o no te aisles del resto. Confía en tus capacidades y en las de los demás.
            - No tengas miedo a tomar la iniciativa y proponer nuevas ideas. Lo peor que puede pasar es que te digan que no.
            - Ten un claro conocimiento  de tus fortalezas y debilidades, busca mejorar en forma continua, estudia, capacítate, lee y reflexiona.
            - Cuando algo salga mal y seguro pasará, no deslindes responsabilidades ni busques culpables. Concéntrate en las acciones a tomar para resolver el problema y ponerte en acción, ayuda a la persona responsable a reconocer su error y a repararlo, a fin de cuentas todos cometemos errores.";
        }

        $tEmocional="";
        $rq5=$request->q18+$request->q19+$request->q20+$request->q21+$request->q22+$request->q23+$request->q24+$request->q25;
        if($rq5>=18 ){
            $tEmocional="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq5<18){
            $tEmocional="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - Cuando sientas enojo, frustraión, miedo, etc. Date tiempo para reflexionar sobre lo que sientes e intenta averiguar siempre cuáles son las causas de esas emociones.
            - Caundo algo no salga como planeaste, recuerda que los cambios son una parte intrínseca de la vida, acéptalos y aprende a adaptarte a ellos. Míralos como una oportunidad para crecer.
            - Mantente atento a los sentimientos de los demás y, siempre que puedas, ayúdales a expresarlos de una manera asertiva.
            - Cuando te enfresntes a una situación que te desespere o enoje, respira... lo primero que hay que hacer es reflexionar y luego actuar de una forma pacífica.
            ";
        }
        $tRiesgos="";
        $rq6=$request->q26+$request->q27+$request->q28+$request->q29+$request->q30;
        if($rq6>=18){
            $tRiesgos="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq6<18){
            $tRiesgos="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - Realiza alguna actividad que consideres conllevan algún riesgo o que tengas temor de realizar (ojo siempre cuida de ti) por ejemplo: Declamar un poema en público, realizar un video cantando, aprender a patinar, etc.
            -  Escríbele un mensaje en redes sociales a una persona que admires, presentate y cuentale porqué la admiras, espera su respuesta, quiza te lleves una gran sorpresa.
            - Realiza un pequeño experimento de ventas, compra una funda de dulces y véndela entre tus amigos, familias y vecinos.";
        }

        $tComunicacion="";
        $rq7=$request->q31+$request->q32+$request->q33+$request->q34+$request->q35;
        if($rq7>=18 ){
            $tComunicacion="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq7<18){
            $tComunicacion="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
            - Escribe un pequeño ensayo sobre algo que te apasione y comparte tus ideas co alguna persona.
            - Mejora tu comunicación no verbal, conversa contigo mismo frente al espejo y sé conciente de tus gestos. ";
        }
        $tCompromiso="";
        $rq8=$request->q36+$request->q37+$request->q38+$request->q39+$request->q40;
        if($rq8>=18 ){
            $tCompromiso="¡Felicidades! Continúe trabajando como hasta ahora";
        }
        if($rq8<18){
            $tCompromiso="Es necesario afilar la sierra, puedes entranarte poniendo en práctica estas acciones:
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
