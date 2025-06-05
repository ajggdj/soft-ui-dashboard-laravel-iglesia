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
            <form  method="POST" action="{{ route('historial-guardar') }}" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="iglesia" value="{{  $userid }}">
                <div class="row" style="margin-left: 10px;margin-right: 10px;">

                    <hr class="ct-docs-hr">
                    <h5 class="text-center">ESTADO DE SALUD</h5>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">CUENTA CON ALGÚN PADECIMIENTO PSICOLÓGICO O PSIQUIATRICO DIAGNOSTICADO, SI ES ASÍ CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="padecimiento_psico"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">TOMA ALGÚN MEDICAMENTO PSIQUIATRICO O NEUROLÓGICO, SI ES ASI CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="medicamentos"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">CUENTA CON ALGÚN PADECIMIENTO O ENFERMEDAD CRÓNICA DIAGNOSTICADA, SI ES ASI, CUÁL</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="enfermedad"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">SI ES MUJER, SE ENCUENTRA EMBARAZADA</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="embarazada"></textarea>
                        </div>
                    </div>
                </div>
                <hr class="ct-docs-hr">
                <br>
                <h5 class="text-center">PRACTICA ALGUNO</h5>
                <div class="row" style="margin-left: 10px;margin-right: 10px;">
                    <div class="col-md-12">
                        
                    <hr class="ct-docs-hr">
                    <br>
                    <h5 class="text-center">MOTIVO DE SOLICITUD DE ORACIÓN</h5>
                    <hr class="ct-docs-hr">
                    <h6 class="text-center">OBSERVACIONES (PARA SER LLENADO POR DISCERNIDOR)</h6>
                    <hr class="ct-docs-hr">
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="observaciones_discernimiento"></textarea>
                        </div>
                    </div>
                    <hr class="ct-docs-hr">
                    <br>
                    <h6 class="text-center">OBSERVACIONES DEL SACERDOTE</h6>
                    <hr class="ct-docs-hr">
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="observaciones_sacerdote"></textarea>
                        </div>
                        </div>

                </div>
                <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save Changes</button>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
