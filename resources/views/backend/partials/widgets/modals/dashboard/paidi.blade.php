<div class="modal fade" id="paidi" role="dialog" aria-labelledby="paidi" aria-hidden="true">
      <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
          <div class="modal-content">
              <div class="block block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                      <h3 class="block-title">Pedidos Pagados</h3>
                      <div class="block-options">
                          <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                              <i class="si si-close"></i>
                          </button>
                      </div>
                  </div>
                  <div class="block-content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Cliente</th>
                                  <th>Total</th>
                                  <th class="text-center">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($invoicesp as $i)
                                  <tr>
                                    <td>{{$i->id}}</td>
                                    <td>{{$i->client->name}} | {{$i->client->dni}}</td>
                                    <td>${{$i->total}}</td>
                                    <td class="text-center">
                                      <div class="btn-group">
                                          <a href="{{url('/client/'.$i->client->id)}}" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Ver cliente">
                                            <i class="fa fa-eye"></i> Ver Cliente
                                          </a>
                                      </div>
                                    </td>
                                  </tr>
                                @empty
                                  <tr>
                                    <td colspan="7">No se han encontrado resultados.</td>
                                  </tr>
                                @endforelse
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="#" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</a>
              </div>
          </div>
      </div>
  </div>
