@extends('backend.layouts.master')

@section('title')
  <title>{{env('APP_NAME')}} | Editando producto {{$product->name}}</title>
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
              <div class="col-sm-12 col-md-6 col-lg-6 col-lg-6 ">
                  <form action="{{url('/product/'.$product->id)}}" method="post" enctype="multipart/form-data">
                  <div class="block">
                      <div class="block-header block-header-default">
                          <h3 class="block-title">Editando a <b>{{$product->name}}</b></h3>
                          <div class="block-options">
                            <a href="{{url('/products')}}" class="btn-block-option">
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
                                <label class="col-12" for="example-text-input">Categoria</label>
                                <div class="col-md-12">
                                  <select class="js-select2 form-control" id="example-select2" name="category_id" style="width: 100%;" data-placeholder="Selecciona una categoria" autofocus required>
                                    <option></option>
                                        @foreach ($categories as $c)
                                          <option value="{{$c->id}}" @if ($c->id == $product->category->id)
                                            selected
                                          @endif>{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Nombre</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Descripcion</label>
                                <div class="col-md-12">
                                  <textarea name="description" rows="4" class="form-control">{{$product->name}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Codigo de barras</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="barcode" name="barcode" value="{{$product->barcode}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Cantidad disponible</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Precio</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Imagen</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="col-sm-12">
                                  <img class="img-fluid" src="{{asset('images/'.$product->image)}}" alt="">
                                </div>
                            </div>
                      </div>
                      <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                        <div class="block-options text-right">
                          <a href="{{url('/products')}}" class="btn-block-option">
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
                <a class="block block-transparent text-center bg-gd-sun" href="{{url('/products#add_new_product')}}">
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
          <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      @include('backend.partials.footer.default')
  </div>
@endsection

@section('js')

@endsection
