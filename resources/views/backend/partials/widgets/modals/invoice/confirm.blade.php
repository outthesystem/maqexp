<div class="modal fade" id="modal_confirm" role="dialog" aria-labelledby="modal_confirm" aria-hidden="true">
  <form action="{{url('/selectproduct/'.$client->id)}}" method="get" id="form">
      <div class="modal-dialog modal-dialog-popout" role="document">
          <div class="modal-content">
              <div class="block block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                      <h3 class="block-title">Confirma tu usuario</h3>
                      <div class="block-options">
                          <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                              <i class="si si-close"></i>
                          </button>
                      </div>
                  </div>
                  <div class="block-content">
                    {{csrf_field()}}
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Escribe tu DNI</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="dni" name="dni" autofocus autocomplete="off">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="#" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</a>
                  <button type="submit" class="btn btn-alt-success">
                      <i class="fa fa-check"></i> Confirmar
                  </button>
              </div>
          </div>
      </div>
    </form>
  </div>
