<?php

namespace App\Http\Controllers;
use App\Models\Church_information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $church_information = Church_information::all();
        return view('dashboard', compact('church_information'));
    }

    public function create(){
        return view('dashboard.create');
    }

    public function registrar(Request $request){
        $table = new Church_information();
        //datos personales
        $table->nombre = $request->nombre;
        $table->domicilio = $request->domicilio;
        $table->fecha_nacimiento = $request->fecha_nacimiento;
        $table->telefono = $request->telefono;
        $table->edad = $request->edad;


        //SACRAMENTOS RECIBIDOS
        if($request->bautizo == 1){
            $table->bautizo = 1;
        }else{
            $table->bautizo = 0;
        }

        if($request->confirmacion == 1){
            $table->confirmacion = 1;
        }else{
            $table->confirmacion     = 0;
        }

        if($request->primera_comunion == 1){
            $table->primera_comunion = 1;
        }else{
            $table->primera_comunion     = 0;
        }

        if($request->pareja == 1){
            $table->pareja = 1;
        }else{
            $table->pareja     = 0;
        }

        if($request->casado_iglesia == 1){
            $table->casado_iglesia = 1;
        }else{
            $table->casado_iglesia     = 0;
        }

        $table->acude_misa = $request->acude_misa;
        $table->comulga_misa = $request->comulga_misa;
        $table->ultima_confecion = $request->ultima_confecion;

        //ESTADO DE SALUD
        if($request->padecimiento_psico == null){
            $table->padecimiento_psico = 'N/A';
        }else{
            $table->padecimiento_psico = $request->padecimiento_psico;
        }

        if($request->medicamentos == null){
            $table->medicamentos = 'N/A';
        }else{
            $table->medicamentos = $request->medicamentos;
        }

        if($request->enfermedad == null){
            $table->enfermedad = 'N/A';

        }else{
            $table->enfermedad = $request->enfermedad;

        }

        if($request->embarazada == null){
            $table->embarazada = 'null';
        }else{
            $table->embarazada = $request->embarazada;
        }

        //PRACTICA ALGUNO
        if($request->brujeria == 1){
            $table->brujeria = 1;
        }else{
            $table->brujeria     = 0;
        }

        if($request->santeria == 1){
            $table->santeria = 1;
        }else{
            $table->santeria = 0;
        }

        if($request->adivinacion == 1){
            $table->adivinacion = 1;
        }else{
            $table->adivinacion     = 0;
        }

        if($request->angeloterapia == 1){
            $table->angeloterapia = 1;
        }else{
            $table->angeloterapia = 0;
        }

        if($request->espiritimo == 1){
            $table->espiritimo = 1;
        }else{
            $table->espiritimo     = 0;
        }

        if($request->curanderos == 1){
            $table->curanderos = 1;
        }else{
            $table->curanderos     = 0;
        }

        if($request->reflexologia == 1){
            $table->reflexologia = 1;
        }else{
            $table->reflexologia     = 0;
        }

        if($request->esoterismo == 1){
            $table->esoterismo = 1;
        }else{
            $table->esoterismo     = 0;
        }

        if($request->reiki == 1){
            $table->reiki = 1;
        }else{
            $table->reiki     = 0;
        }

        if($request->feng_shui == 1){
            $table->feng_shui = 1;
        }else{
            $table->feng_shui     = 0;
        }

        if($request->yoga == 1){
            $table->yoga = 1;
        }else{
            $table->yoga     = 0;
        }

        if($request->ouija == 1){
            $table->ouija = 1;
        }else{
            $table->ouija     = 0;
        }

        if($request->magia == 1){
            $table->magia = 1;
        }else{
            $table->magia     = 0;
        }

        if($request->muerte == 1){
            $table->muerte = 1;
        }else{
            $table->muerte     = 0;
        }

        if($request->pendulo == 1){
            $table->pendulo = 1;
        }else{
            $table->pendulo     = 0;
        }
        if($request->otro == null){
            $table->otro = 'N/A';
        }else{
            $table->otro = $request->otro;
        }


        //MOTIVO DE SOLICITUD DE ORACIÓN
        if($request->fecha_discernimiento == null){
            $table->fecha_discernimiento = 'N/A';
        }else{
            $table->fecha_discernimiento = $request->fecha_discernimiento;
        }
        $table->observaciones_discernimiento = $request->observaciones_discernimiento;
        $table->observaciones_sacerdote = $request->observaciones_sacerdote;
        $table->activo = 1;
        $table->save();
        return view('dashboard.create');
    }

    public function editar(Request $request, $id){
        $datosiglesia = DB::select('select * from church_informations where activo = 1');
        return view('dashboard.editar',['datosiglesia'=>$datosiglesia]);
    }
    public function guardar(Request $request, $id){
        $table = Church_information::find($id);
        //datos personales
        $table->nombre = $request->nombre;
        $table->domicilio = $request->domicilio;
        $table->fecha_nacimiento = $request->fecha_nacimiento;
        $table->telefono = $request->telefono;
        $table->edad = $request->edad;


        //SACRAMENTOS RECIBIDOS
        if($request->bautizo == 1){
            $table->bautizo = 1;
        }else{
            $table->bautizo = 0;
        }

        if($request->confirmacion == 1){
            $table->confirmacion = 1;
        }else{
            $table->confirmacion     = 0;
        }

        if($request->primera_comunion == 1){
            $table->primera_comunion = 1;
        }else{
            $table->primera_comunion     = 0;
        }

        if($request->pareja == 1){
            $table->pareja = 1;
        }else{
            $table->pareja     = 0;
        }

        if($request->casado_iglesia == 1){
            $table->casado_iglesia = 1;
        }else{
            $table->casado_iglesia     = 0;
        }

        $table->acude_misa = $request->acude_misa;
        $table->comulga_misa = $request->comulga_misa;
        $table->ultima_confecion = $request->ultima_confecion;

        //ESTADO DE SALUD
        if($request->padecimiento_psico == null){
            $table->padecimiento_psico = 'N/A';
        }else{
            $table->padecimiento_psico = $request->padecimiento_psico;
        }

        if($request->medicamentos == null){
            $table->medicamentos = 'N/A';
        }else{
            $table->medicamentos = $request->medicamentos;
        }

        if($request->enfermedad == null){
            $table->enfermedad = 'N/A';

        }else{
            $table->enfermedad = $request->enfermedad;

        }

        if($request->embarazada == null){
            $table->embarazada = 'null';
        }else{
            $table->embarazada = $request->embarazada;
        }

        //PRACTICA ALGUNO
        if($request->brujeria == 1){
            $table->brujeria = 1;
        }else{
            $table->brujeria     = 0;
        }

        if($request->santeria == 1){
            $table->santeria = 1;
        }else{
            $table->santeria = 0;
        }

        if($request->adivinacion == 1){
            $table->adivinacion = 1;
        }else{
            $table->adivinacion     = 0;
        }

        if($request->angeloterapia == 1){
            $table->angeloterapia = 1;
        }else{
            $table->angeloterapia = 0;
        }

        if($request->espiritimo == 1){
            $table->espiritimo = 1;
        }else{
            $table->espiritimo     = 0;
        }

        if($request->curanderos == 1){
            $table->curanderos = 1;
        }else{
            $table->curanderos     = 0;
        }

        if($request->reflexologia == 1){
            $table->reflexologia = 1;
        }else{
            $table->reflexologia     = 0;
        }

        if($request->esoterismo == 1){
            $table->esoterismo = 1;
        }else{
            $table->esoterismo     = 0;
        }

        if($request->reiki == 1){
            $table->reiki = 1;
        }else{
            $table->reiki     = 0;
        }

        if($request->feng_shui == 1){
            $table->feng_shui = 1;
        }else{
            $table->feng_shui     = 0;
        }

        if($request->yoga == 1){
            $table->yoga = 1;
        }else{
            $table->yoga     = 0;
        }

        if($request->ouija == 1){
            $table->ouija = 1;
        }else{
            $table->ouija     = 0;
        }

        if($request->magia == 1){
            $table->magia = 1;
        }else{
            $table->magia     = 0;
        }

        if($request->muerte == 1){
            $table->muerte = 1;
        }else{
            $table->muerte     = 0;
        }

        if($request->pendulo == 1){
            $table->pendulo = 1;
        }else{
            $table->pendulo     = 0;
        }
        if($request->otro == null){
            $table->otro = 'N/A';
        }else{
            $table->otro = $request->otro;
        }


        //MOTIVO DE SOLICITUD DE ORACIÓN
        if($request->fecha_discernimiento == null){
            $table->fecha_discernimiento = 'N/A';
        }else{
            $table->fecha_discernimiento = $request->fecha_discernimiento;
        }
        $table->observaciones_discernimiento = $request->observaciones_discernimiento;
        $table->observaciones_sacerdote = $request->observaciones_sacerdote;
        $table->activo = 1;
        $table->save();
        return redirect()->back();
    }

    public function historial(){
        return view('historial.index');
    }
}
