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
                  <div class="block block-themed block-rounded">
                  
                      <div class="block-header bg-earth">
                          <h3 class="block-title">Elige tu usuario</h3>
                          <div class="block-options">
                              <button type="button" class="btn-block-option">
                                  <i class="si si-user"></i>
                              </button>
                          </div>
                      </div>
                      <div class="block-content">
                          <div class="row">
                            @foreach ($clients as $c)
                              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <a class="block block-link-shadow text-center" href="{{url('/selectproduct/'.$c->id)}}">
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-user fa-4x"></i>
                                        </p>
                                        <p class="font-w600">{{$c->name}}</p>
                                    </div>
                                </a>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- END Page Content -->

      </main>
      <!-- END Main Container -->

      @include('backend.partials.footer.default')
  </div>
@endsection
