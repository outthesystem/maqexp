@extends('backend.layouts.master')

@section('title')
  <title>{{env('APP_NAME')}} | Productos</title>
@endsection

@section('view')
  <div id="page-container" class="side-scroll sidebar-inverse page-header-modern main-content-boxed side-trans-enabled">

      @include('backend.partials.navbar.guest')

      <!-- Main Container -->
      <main id="main-container">
          <!-- Page Content -->
          <div class="content">
              <div class="row">
                <div class="col-sm-12">
                  <nav class="breadcrumb push">
                      <a class="breadcrumb-item" href="{{url('/')}}">{{$client->name}}</a>
                      <span class="breadcrumb-item active">Selecciona la categoria</span>
                  </nav>
                  <div class="block block-themed block-rounded">
                      <div class="block-header bg-earth">
                          <h3 class="block-title">Selecciona la categoria</h3>
                          <div class="block-options">
                            @if ($confirmed != true)

                            <button type="button" class="btn-block-option" data-toggle="modal" data-target="#modal_confirm">
                                <i class="si si-user"></i> Confirma tu DNI
                            </button>
                          @endif
                          </div>
                      </div>
                      <div class="block-content">
                          <div class="row">
                            @if ($confirmed == true)
                              @foreach ($categories as $c)
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                  <a class="block block-link-pop text-center" href="{{url('/categoryselected/'.$client->id.'/'.$c->id.'/'.$invoice->id)}}">
                                    <div class="block-content bg-body-light">
                                        <p class="font-w600">
                                            <i class="fa fa-shopping-cart text-muted mr-5"></i> {{$c->name}}
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <p class="font-size-h1 text-danger">
                                            <strong>{{$c->products->count()}}</strong>
                                        </p>
                                    </div>
                                </a>
                                </div>
                              @endforeach
                            @endif
                          </div>
                      </div>
                  </div>

                  @if ($confirmed == TRUE)
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-pulse">
                            <h3 class="block-title">Detalles del pedido</h3>
                            <div class="block-options">

                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-sm table-hover table-vcenter">
                                    <thead>
                                      <th>ID</th>
                                      <th>Producto</th>
                                      <th>Cantidad</th>
                                      <th>Precio</th>
                                      <th>Total</th>
                                      <th class="text-center">Acciones</th>
                                    </thead>
                                    <tbody>
                                      @forelse ($invoice->items as $i)
                                        <tr>
                                          <td>{{$i->id}}</td>
                                          <td>{{$i->product->name}}</td>
                                          <td>{{$i->quantity}}</td>
                                          <td>${{$i->price}}</td>
                                          <td>${{$i->price_total}}</td>
                                          <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{url('/deleteitem/'.$i->id)}}" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Eliminar">
                                                  <i class="fa fa-times"></i>
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
                              <br>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                  <a class="block block-transparent text-center bg-success" href="{{url('/confirminvoice/'.$client->id.'/'.$invoice->id)}}">
                                      <div class="block-content">
                                          <p class="mt-5">
                                              <i class="si si-check fa-4x text-white-op"></i>
                                          </p>
                                          <p class="font-w600 text-white">Confirmar pedido</p>
                                      </div>
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                  <a class="block block-transparent text-center bg-danger" href="{{url('/cancelinvoice/'.$client->id.'/'.$invoice->id)}}">
                                      <div class="block-content">
                                          <p class="mt-5">
                                              <i class="si si-close fa-4x text-white-op"></i>
                                          </p>
                                          <p class="font-w600 text-white">Cancelar pedido</p>
                                      </div>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endif

                </div>
              </div>
          </div>
          <!-- END Page Content -->

      </main>
      <!-- END Main Container -->
      @if ($confirmed == false)
        @include('backend.partials.widgets.modals.invoice.confirm')

        @else

      @endif

      @include('backend.partials.footer.default')
  </div>
@endsection

@section('js')
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#modal_confirm').modal('show');
    });
  </script>
@endsection
