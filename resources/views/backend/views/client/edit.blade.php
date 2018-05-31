@extends('backend.layouts.master')

@section('title')
  <title>{{env('APP_NAME')}} | Editando cliente {{$client->name}}</title>
@endsection

@section('view')
  <div id="page-container" class="sidebar-o side-scroll sidebar-inverse page-header-modern main-content-boxed">

      @include('backend.partials.aside.default')

      @include('backend.partials.sidebar.default')

      @include('backend.partials.navbar.default')

      <!-- Main Container -->
      <main id="main-container">
          <!-- Page Content -->
          <div class="content">
            <div class="row">
              <div class="col-sm-12">
                  <div class="block">
                    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#btabs-static-finishedi">Pedidos realizados (pendientes) {{$finishedi->count()}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-static-deliveredi">Pedidos entregados {{$deliveredi->count()}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#btabs-static-paidi">Pedidos pagados {{$paidi->count()}}</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="btabs-static-finishedi" role="tabpanel">
                          <div class="table-responsive">
                            <table class="table table-sm table-hover table-vcenter">
                                <thead>
                                  <th>ID</th>
                                  <th>Precio</th>
                                  <th>Creado el</th>
                                  <th class="text-center">Acciones</th>
                                </thead>
                                <tbody>
                                  @forelse ($finishedi as $fi)
                                    <tr>
                                      <td>{{$fi->id}}</td>
                                      <td>${{$fi->total}}</td>
                                      <td>{{$fi->created_at}}</td>
                                      <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{url('/deliverinvoice/'.$fi->id)}}" class="btn btn-sm btn-success js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Entregar pedido">
                                            <i class="fa fa-check"></i> Entregar pedido
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
                            <a href="{{url('exportInvoicesF/'.$client->id)}}" class="btn btn-primary min-width-125">Exportar realizados (pendientes de entrega)</a>
                            <br>
                            <br>
                          </div>
                        </div>
                        <div class="tab-pane" id="btabs-static-deliveredi" role="tabpanel">
                          <div class="table-responsive">
                            <table class="table table-sm table-hover table-vcenter">
                                <thead>
                                  <th>ID</th>
                                  <th>Precio</th>
                                  <th>Creado el</th>
                                  <th class="text-center">Acciones</th>
                                </thead>
                                <tbody>
                                  @forelse ($deliveredi as $di)
                                    <tr>
                                      <td>{{$di->id}}</td>
                                      <td>${{$di->total}}</td>
                                      <td>{{$di->created_at}}</td>
                                      <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{url('/paidinvoice/'.$di->id)}}" class="btn btn-sm btn-success js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Cobrar pedido">
                                            <i class="fa fa-check"></i> Cobrar pedido
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
                            <a href="{{url('exportInvoicesD/'.$client->id)}}" class="btn btn-primary min-width-125">Exportar pedidos entegados</a>
                            <br>
                            <br>

                          </div>
                        </div>
                        <div class="tab-pane" id="btabs-static-paidi" role="tabpanel">
                          <div class="table-responsive">
                            <table class="table table-sm table-hover table-vcenter">
                                <thead>
                                  <th>ID</th>
                                  <th>Precio</th>
                                  <th>Creado el</th>
                                  </thead>
                                <tbody>
                                  @forelse ($paidi as $pi)
                                    <tr>
                                      <td>{{$pi->id}}</td>
                                      <td>${{$pi->total}}</td>
                                      <td>{{$pi->created_at}}</td>
                                    </tr>
                                  @empty
                                    <tr>
                                      <td colspan="7">No se han encontrado resultados.</td>
                                    </tr>
                                  @endforelse
                                </tbody>
                            </table>
                            <a href="{{url('exportInvoicesP/'.$client->id)}}" class="btn btn-primary min-width-125">Exportar pedidos pagados</a>
                            <br>
                            <br>

                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-lg-6 ">
                  <form action="{{url('/client/'.$client->id)}}" method="post">
                  <div class="block">
                      <div class="block-header block-header-default">
                          <h3 class="block-title">Editar a <b>{{$client->name}}</b></h3>
                          <div class="block-options">
                            <a href="{{url('/clients')}}" class="btn-block-option">
                              <i class="fa fa-arrow-left"></i> Volver
                            </a>
                            <button type="submit" class="btn-block-option">
                                <i class="fa fa-check"></i> Guardar
                            </button>
                          </div>
                      </div>
                      <div class="block-content">
                          {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Nombre</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">DNI</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="dni" name="dni" value="{{$client->dni}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Telefono</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                                </div>
                            </div>
                      </div>
                      <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <div class="block-options text-right">
                          <a href="{{url('/clients')}}" class="btn-block-option">
                            <i class="fa fa-arrow-left"></i> Volver
                          </a>
                          <button type="submit" class="btn-block-option">
                              <i class="fa fa-check"></i> Guardar
                          </button>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2 col-lg-2">
                <a class="block block-transparent text-center bg-gd-sun" href="{{url('/clients#add_new_client')}}">
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-plus fa-4x text-white-op"></i>
                        </p>
                    </div>
                    <div class="block-content bg-black-op-5">
                        <p class="font-w600 text-white">Añadir cliente</p>
                  </div>
                </a>
              </div>
              </div>
          <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      @include('backend.partials.footer.default')
  </div>
@endsection

@section('js')

@endsection
