@extends('backend.layouts.master')

@section('title')
  <title>{{env('APP_NAME')}} | Dashboard</title>
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
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <a class="block block-link-pop text-center" href="javascript:void(0)" data-toggle="modal" data-target="#finishedi">
                      <div class="block-content">
                          <p class="font-size-h1 text-danger">
                              <strong>{{$invoices->count()}}</strong>
                          </p>
                          <p class="font-w600">
                              <i class="fa fa-shopping-cart text-muted mr-5"></i> Pedidos realizados (pendientes de entregar)
                          </p>
                      </div>
                  </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                    <a class="block block-link-pop text-center" href="javascript:void(0)" data-toggle="modal" data-target="#deliveredi">
                    <div class="block-content">
                        <p class="font-size-h1 text-warning">
                            <strong>{{$invoicesd->count()}}</strong>
                        </p>
                        <p class="font-w600">
                            <i class="fa fa-shopping-cart text-muted mr-5"></i> Pedidos entregados
                        </p>
                      </div>
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                  <a class="block block-link-pop text-center" href="javascript:void(0)" data-toggle="modal" data-target="#paidi">
                  <div class="block-content">
                      <p class="font-size-h1 text-success">
                          <strong>{{$invoicesp->count()}}</strong>
                      </p>
                      <p class="font-w600">
                          <i class="fa fa-chart-line text-muted mr-5"></i> Pedidos pagados
                      </p>
                    </div>
              </a>
            </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                    <a class="block block-link-pop text-center" href="{{url('clients')}}">
                    <div class="block-content">
                        <p class="font-size-h1 text-default">
                            <strong>{{$clients->count()}}</strong>
                        </p>
                        <p class="font-w600">
                            <i class="fa fa-user text-muted mr-5"></i> Clientes registrados
                        </p>
                      </div>
                </a>
              </div>


              </div>
          </div>
          <!-- END Page Content -->

      </main>
      <!-- END Main Container -->

      @include('backend.partials.widgets.modals.dashboard.finishedi')
      @include('backend.partials.widgets.modals.dashboard.deliveredi')
      @include('backend.partials.widgets.modals.dashboard.paidi')

      @include('backend.partials.footer.default')
  </div>
@endsection
