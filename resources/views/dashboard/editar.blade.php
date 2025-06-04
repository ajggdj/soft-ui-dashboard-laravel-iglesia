@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-0">Datos</h5>
                    </div>
                </div>
            </div>
            <br>
            @foreach ($datosiglesia as $iglesia)
                <form  method="POST" action="{{ route('guardar-list',$iglesia->id ) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-left: 10px;margin-right: 10px;">
                        <div class="col-md-4" >
                        <div class="form-group">
                            <span>Nombre completo:*</span>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" name="nombre" value="{{ $iglesia->nombre }}">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <span>Domicilio:*</span>
                            <input type="text"  class="form-control" placeholder="Domicilio" name="domicilio" value="{{ $iglesia->domicilio }}">
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <span>Fecha de nacimiento:*</span>
                            <input type="text" class="form-control" placeholder="Fecha de nacimiento" name="fecha_nacimiento" value="{{ $iglesia->fecha_nacimiento }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;margin-right: 10px;">
                        <div class="col-md-4">
                        <div class="form-group">
                            <span>Telefono:*</span>
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono" value="{{ $iglesia->telefono }}">
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <span>Edad:*</span>
                            <input type="text"  class="form-control" placeholder="Edad" name="edad" value="{{ $iglesia->edad }}">
                        </div>
                        </div>
                    </div>
                    <hr class="ct-docs-hr">
                    <br>
                    <h5 class="text-center">SACRAMENTOS RECIBIDOS</h5>

                    <hr class="ct-docs-hr">
                    <div class="row" style="margin-left: 20px;margin-right: 10px;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ $iglesia->bautizo == 1 ? 'checked'  : ''}} id="bautizado" name="bautizo">
                                    <label class="custom-control-label" for="customCheck1">Bautizado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Confimado" name="confirmacion" {{ $iglesia->confirmacion == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Confimado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <span>Acude a misa:*</span>
                            <input type="text" class="form-control" placeholder="Acude a misa" name="acude_misa" value="{{ $iglesia->acude_misa }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 20px;margin-right: 10px;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Primeracomunion" name="primera_comunion" {{ $iglesia->primera_comunion == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Primera Comunión</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Tienepareja" name="pareja" {{ $iglesia->pareja == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Tiene pareja</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <span>Comulga en misa:*</span>
                            <input type="text" class="form-control" placeholder="Comuldga en misa" name="comulga_misa" value="{{ $iglesia->comulga_misa }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 20px;margin-right: 10px;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="CasadoIglesia" name="casado_iglesia" {{ $iglesia->casado_iglesia == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Casado por la iglesia</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <span>Última fecha de confesión:*</span>
                            <input type="text" class="form-control" placeholder="Última fecha de confesión" name="ultima_confecion" value="{{ $iglesia->ultima_confecion }}">
                            </div>
                        </div>
                    </div>
                    <hr class="ct-docs-hr">
                    <h5 class="text-center">ESTADO DE SALUD</h5>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">CUENTA CON ALGÚN PADECIMIENTO PSICOLÓGICO O PSIQUIATRICO DIAGNOSTICADO, SI ES ASÍ CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="padecimiento_psico" >{{ $iglesia->padecimiento_psico }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">TOMA ALGÚN MEDICAMENTO PSIQUIATRICO O NEUROLÓGICO, SI ES ASI CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="medicamentos">{{ $iglesia->medicamentos }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">CUENTA CON ALGÚN PADECIMIENTO O ENFERMEDAD CRÓNICA DIAGNOSTICADA, SI ES ASI, CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="enfermedad">{{ $iglesia->enfermedad }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">SI ES MUJER, SE ENCUENTRA EMBARAZADA</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="embarazada">{{ $iglesia->embarazada }}</textarea>
                        </div>
                    </div>

                    <hr class="ct-docs-hr">
                    <br>
                    <h5 class="text-center">PRACTICA ALGUNO</h5>
                    <hr class="ct-docs-hr">
                    <div class="row" style="margin-left: 10px;margin-right: 10px;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="brujeria" name="brujeria" {{ $iglesia->brujeria == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="Brujeria">Brujeria</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Santeria" name="santeria" {{ $iglesia->santeria == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Santeria</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Adivinación" name="adivinacion" {{ $iglesia->adivinacion == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Adivinación</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Angeloterapia" name="angeloterapia" {{ $iglesia->angeloterapia == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Angeloterapia</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Espiritismo" name="espiritimo" {{ $iglesia->espiritimo == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Espiritismo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Curanderos" name="curanderos" {{ $iglesia->curanderos == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Curanderos</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Reflexologia" name="reflexologia" {{ $iglesia->reflexologia == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Reflexologia</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Esoterismo" name="esoterismo" {{ $iglesia->esoterismo == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Esoterismo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Reiki" name="reiki" {{ $iglesia->reiki == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Reiki</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Feng-Shui" name="feng_shui" {{ $iglesia->feng_shui == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Feng Shui</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Yoga" name="yoga" {{ $iglesia->yoga == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Yoga</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Ouija" name="ouija" {{ $iglesia->ouija == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Ouija</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Magia" name="magia" {{ $iglesia->magia == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Magia</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Adoracion a la muerte" name="muerte" {{ $iglesia->muerte == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Adoracion a la muerte</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="Péndulo" name="pendulo" {{ $iglesia->pendulo == 1 ? 'checked'  : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Péndulo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <span>Otro:*</span>
                            <input type="text" class="form-control" id="otro" placeholder="Otro" name="otro" value="{{ $iglesia->otro }}">
                            </div>
                        </div>
                        <hr class="ct-docs-hr">
                        <br>
                        <h5 class="text-center">MOTIVO DE SOLICITUD DE ORACIÓN</h5>
                        <hr class="ct-docs-hr">
                        <h6 class="text-center">OBSERVACIONES (PARA SER LLENADO POR DISCERNIDOR)</h6>
                        <hr class="ct-docs-hr">
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="observaciones_discernimiento">{{ $iglesia->observaciones_discernimiento }}</textarea>
                            </div>
                        </div>
                        <hr class="ct-docs-hr">
                        <br>
                        <h6 class="text-center">OBSERVACIONES DEL SACERDOTE</h6>
                        <hr class="ct-docs-hr">
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="observaciones_sacerdote">{{ $iglesia->observaciones_sacerdote }}</textarea>
                            </div>
                            </div>

                    </div>
                    <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save Changes</button>
                        </div>
                </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
