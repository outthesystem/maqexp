@extends('backend.layouts.master')

@section('title')
  <title>{{env('APP_NAME')}} | Productos</title>
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
                <div class="col-sm-12 col-md-6 col-xl-6">
                  <div class="block">
                      <div class="block-header block-header-default">
                          <h3 class="block-title">Productos <small>{{$products->count()}}</small></h3>
                      </div>
                      <div class="block-content">
                        <form action="{{url('/products')}}" method="GET">
                          <div class="form-group row">
                              <div class="col-sm-12">
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <button type="button" class="btn btn-secondary">
                                                              <i class="fa fa-search"></i> Buscar
                                                          </button>
                                      </div>
                                      <input type="text" class="form-control" id="example-input1-group2" name="search" placeholder="Buscar..." value="{{$search}}" autofocus>
                                  </div>
                              </div>
                          </div>
                        </form>
                        <table class="table table-sm table-hover table-vcenter">
                            <thead>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Codigo de barras</th>
                              <th>Stock</th>
                              <th>Precio</th>
                              <th class="text-center">Acciones</th>
                            </thead>
                            <tbody>
                              @forelse ($products as $p)
                                <tr>
                                  <td>{{$p->id}}</td>
                                  <td>{{$p->name}}</td>
                                  <td>{{$p->barcode}}</td>
                                  <td>{{$p->quantity}}</td>
                                  <td>{{$p->price}}</td>
                                  <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{url('/product/'.$p->id)}}" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Editar">
                                        <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{url('/deleteproduct/'.$p->id)}}" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Eliminar">
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
                      <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <center>
                                    {!! $products->links() !!}</center>
                                </div>
                  </div>
                </div>
                  <div class="col-sm-2 col-md-2 col-lg-2 col-lg-2">
                    <a class="block block-transparent text-center bg-gd-lake" href="{{url('/products#add_new_product')}}" data-toggle="modal" data-target="#add_new_product">
                        <div class="block-content">
                            <p class="mt-5">
                                <i class="si si-plus fa-4x text-white-op"></i>
                            </p>
                        </div>
                        <div class="block-content bg-black-op-5">
                            <p class="font-w600 text-white">Añadir producto</p>
                      </div>
                    </a>
                  </div>
              </div>
          </div>
          <!-- END Page Content -->

      </main>
      <!-- END Main Container -->
      @include('backend.partials.widgets.modals.product.create')

      @include('backend.partials.footer.default')
  </div>
@endsection

@section('js')
  <script type="text/javascript">
  $(document).ready(function() {

  if(window.location.href.indexOf('#add_new_product') != -1) {
    $('#add_new_product').modal('show');
  }

  });
  </script>
@endsection
