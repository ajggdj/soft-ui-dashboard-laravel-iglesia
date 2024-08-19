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
            <div class="row" style="margin-left: 10px;margin-right: 10px;">
                <div class="col-md-4" >
                  <div class="form-group">
                    <span>Nombre completo:*</span>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <span>Domicilio:*</span>
                    <input type="text"  class="form-control" placeholder="Domicilio" />
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <span>Fecha de nacimiento:*</span>
                      <input type="text" class="form-control" placeholder="Fecha de nacimiento" />
                    </div>
                  </div>
            </div>
            <div class="row" style="margin-left: 10px;margin-right: 10px;">
                <div class="col-md-4">
                  <div class="form-group">
                    <span>Telefono:*</span>
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <span>Edad:*</span>
                    <input type="text"  class="form-control" placeholder="Edad" />
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
                            <input class="form-check-input" type="checkbox" value="" id="bautizado" >
                            <label class="custom-control-label" for="customCheck1">Bautizado</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Confimado" >
                            <label class="custom-control-label" for="customCheck1">Confimado</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <span>Acude a misa:*</span>
                    <input type="text" class="form-control" placeholder="Acude a misa" />
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 20px;margin-right: 10px;">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Primeracomunion" >
                            <label class="custom-control-label" for="customCheck1">Primera Comunión</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Tienepareja" >
                            <label class="custom-control-label" for="customCheck1">Tiene pareja</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <span>Comulga en misa:*</span>
                    <input type="text" class="form-control" placeholder="Comuldga en misa" />
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 20px;margin-right: 10px;">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CasadoIglesia" >
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
                    <input type="text" class="form-control" placeholder="Última fecha de confesión" />
                    </div>
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
                            <input class="form-check-input" type="checkbox" value="" id="Brujeria" >
                            <label class="custom-control-label" for="Brujeria">Bautizado</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Santeria" >
                            <label class="custom-control-label" for="customCheck1">Santeria</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Adivinación" >
                            <label class="custom-control-label" for="customCheck1">Adivinación</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Angeloterapia" >
                            <label class="custom-control-label" for="customCheck1">Angeloterapia</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Espiritismo" >
                            <label class="custom-control-label" for="customCheck1">Espiritismo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Curanderos" >
                            <label class="custom-control-label" for="customCheck1">Curanderos</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Reflexologia" >
                            <label class="custom-control-label" for="customCheck1">Reflexologia</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Esoterismo" >
                            <label class="custom-control-label" for="customCheck1">Esoterismo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Reiki" >
                            <label class="custom-control-label" for="customCheck1">Reiki</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Feng-Shui" >
                            <label class="custom-control-label" for="customCheck1">Feng Shui</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Yoga" >
                            <label class="custom-control-label" for="customCheck1">Yoga</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Ouija" >
                            <label class="custom-control-label" for="customCheck1">Ouija</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Magia" >
                            <label class="custom-control-label" for="customCheck1">Magia</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Adoracion a la muerte" >
                            <label class="custom-control-label" for="customCheck1">Adoracion a la muerte</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Péndulo" >
                            <label class="custom-control-label" for="customCheck1">Péndulo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <span>Otro:*</span>
                      <input type="text" class="form-control" id="otro" placeholder="Otro">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                    </div>
                  </div>
                  <hr class="ct-docs-hr">
                  <br>
                  <h6 class="text-center">OBSERVACIONES DEL SACERDOTE</h6>
                  <hr class="ct-docs-hr">
                  <div class="col-md-6">
                      <div class="form-group">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                      </div>
                    </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
