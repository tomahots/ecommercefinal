@extends('layouts.default')
@section('content')
     
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Carrito</h1>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Carrito de compra</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Producto</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Precio</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Cantidad</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                      <th class="border-0" scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $totales= 0 ?>
                        @foreach ($productos as $producto)
                            <tr>
                                <th class="pl-0 border-0" scope="row">
                                    <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.html"><img src="{{$producto['producto']->imagen[0]->url}}" alt="..." width="70"/></a>
                                    <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.html">{{$producto['producto']->nombre}}</a></strong></div>
                                    </div>
                                </th>
                                <td class="align-middle border-0">
                                    <p class="mb-0 small">{{$producto['producto']->precio}}</p>
                                </td>
                                <td class="align-middle border-0">
                                    <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family"></span>
                                    <div class="quantity">
                                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                        <input class="form-control form-control-sm border-0 shadow-0 p-0" type="text" value="{{$producto['cantidad']}}"/>
                                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle border-0">
                                    <p class="mb-0 small">{{$producto['cantidad']*$producto['producto']->precio}}</p>
                                </td>
                                <td class="align-middle border-0">
                                 <form method="POST" action="{{route('carrito.destroy',['carrito'=>$producto['producto']->id,'cantidad'=>$producto['cantidad']])}}">
                                  @csrf
                                  {{method_field('DELETE')}}
                                  <input name="productId" value="{{$producto['producto']->id}}" type="hidden">
                                    <a class="reset-anchor"><i class="fas fa-trash-alt small text-muted"></i></a> 
                                  <input type="submit" value="Eliminar">
                                  
                                  </form>
                                </td>
                            </tr>
                            <?php $total = $total + ($producto["producto"]->precio * $producto["cantidad"]); ?>
                        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                    <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="shop.html"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a>
                    </div>
                    <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" 
                    href="
                    
                    {{route('checkout.index')}}
                    ">Procceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>
              </div>
            </div>
            
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong>
                    <span> 
                        {{$total}}
                    </span>
                    </li>
                    <li>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
