<div class="modal fade" id="add_new_product" role="dialog" aria-labelledby="add_new_product" aria-hidden="true">
  <form action="{{url('/products')}}" method="POST" id="form">
      <div class="modal-dialog modal-dialog-popout" role="document">
          <div class="modal-content">
              <div class="block block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                      <h3 class="block-title">Agregar producto</h3>
                      <div class="block-options">
                          <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                              <i class="si si-close"></i>
                          </button>
                      </div>
                  </div>
                  <div class="block-content">
                    {{csrf_field()}}
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Categoria</label>
                          <div class="col-md-12">
                            <select class="js-select2 form-control" id="example-select2" name="category_id" style="width: 100%;" data-placeholder="Selecciona una categoria" autofocus required>
                              <option></option>
                                  @foreach ($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Nombre</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="name" name="name" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Descripcion</label>
                          <div class="col-md-12">
                              <textarea name="description" rows="4" class="form-control"></textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Codigo de barras</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="barcode" name="barcode">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Cantidad</label>
                          <div class="col-md-12">
                              <input type="number" class="form-control" id="quantity" name="quantity">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12" for="example-text-input">Precio</label>
                          <div class="col-md-12">
                              <input type="number" class="form-control" id="price" name="price" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="#" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</a>
                  <button type="submit" class="btn btn-alt-success">
                      <i class="fa fa-check"></i> Crear
                  </button>
              </div>
          </div>
      </div>
    </form>
  </div>
