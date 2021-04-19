@extends('layouts.default')
@section('content')
<!--  Modal -->
      <section class="py-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0">
                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
                    <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                            @if (isset($producto->imagen[0]->url))
                                @for ($i=0; $i < count($producto->imagen); $i++)
                                    <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{$producto->imagen[$i]->url}}" alt="..."></div>
                                @endfor  
                            @else
                                <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png" alt="..."></div>
                            @endif
                    </div>
                </div>
                <div class="col-sm-10 order-1 order-sm-2">
                    <div class="owl-carousel product-slider" data-slider-id="1">
                        @if (isset($producto->imagen[0]->url))
                            @for ($e=0; $e < count($producto->imagen); $e++)
                                <a class="d-block" href="{{$producto->imagen[0]->url}}" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="{{$producto->imagen[$e]->url}}" alt="..."></a>
                            @endfor
                        @else
                            <a class="d-block" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png" alt="..."></a>
                        @endif    
                    </div>
                </div>
              </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
              <ul class="list-inline mb-2">
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
              </ul>
              <h1>{{$producto->nombre}}</h1>
              <p class="text-muted lead">{{$producto->precio}}</p>
              <p class="text-small mb-4">{{$producto->descripcion}}</p>
              <div class="row align-items-stretch mb-4">
                    <form method="POST" class="row align-items-stretch mb-4" action="{{ route('carrito.store') }}">
                            @csrf
                        <div class="col-sm-5 pr-sm-0">
                            <div
                                class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                <span class="small text-uppercase text-gray mr-4 no-select">Cantidad</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input name='amount' class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    <input name='productId' class="form-control border-0 shadow-0 p-0" type="hidden" value="{{$producto->id}}">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 pl-sm-0">
                            <input style="height: fit-content;" value="Add to cart" type="submit" class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" />
                        </div>
                    </form>
              </div>
            </div>
          </div>
          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Descripcion</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Descripcion del producto</h6>
                <p class="text-muted text-small mb-0">{{$producto->descripcion}}</p>
              </div>
            </div>
          </div>
      </section>    
      
@endsection