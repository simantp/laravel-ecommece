@extends('layouts.front')

@section('content')

<section class="right-area">
    <div class="grid">
        
        <!-- Bread Crumb STRAT -->
    <div class="mt-sm-15">
      <div class="banner inner-banner1 ">
        <section class="banner-detail center-xs">
          <h1 class="banner-title">Shopping Cart</h1>
          <div class="bread-crumb right-side float-none-xs">
            <ul>
              <li><a href="index.html">Home</a>/</li>
              <li><span>Shopping Cart</span></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
    <!-- Bread Crumb END -->

    @if (session()->has('success_message'))
      <div class="alert alert-success">
        {{ session()->get('success_message') }}
      </div>
    @endif

    @if (session()->has('destroy'))
      <div class="alert alert-danger">
        {{ session()->get('destroy') }}
      </div>
    @endif

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <div class="ptb-70">
      <div class="row">
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th>Product Name</th>
                    <th>Price</th>
                    {{-- <th>Quantity</th>
                    <th>Sub Total</th> --}}
                    <th>Action</th>
                      
                  </tr>
                </thead>
                <tbody>

                  @foreach ($cartItems as $item)

                    <tr>
                      <td>
                        <div class="product-title"> 
                          <a href="{{ route('product.single', $item->model->id) }}">{{ $item -> name }}</a> 
                        </div>
                      </td>
                      <td>
                        <ul>
                          <li>
                            <div class="base-price price-box"> 
                              <span class="price">${{ $item -> price }}</span> 
                            </div>
                          </li>
                        </ul>
                      </td>
                      {{-- <td class="product-quantity">
                        <form action="{{ route('cart.update', $item->id) }}">
                            <input name="quantity" type="number" value="{{ $item -> quantity }}">
                            <input type="submit" value="Save">
                        </form>
                      </td>
                      <td>
                        <div class="total-price price-box"> 
                          <span class="price">${{Cart::get($item->id)->getPriceSum()}}</span> 
                        </div>
                      </td> --}}
                      <td>
                        <a href="{{ route('cart.destroy', $item -> id ) }}"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a>
                        </td>
                    </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <hr>
      <div class="mtb-30">
        <div class="row">
            
          <div class="col-md-6 mb-xs-40"> </div>
            
          <div class="col-md-6">
            <div class="cart-total-table commun-table">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Cart Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Item(s) Subtotal</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">${{number_format(Cart::getSubTotal(),2)}}</span>
                        </div>
                      </td>
                    </tr>
                    {{-- <tr>

                      @foreach(Cart::getConditions() as $condition)

                          <td>{{$condition->getName()}}</td>
                          <td>
                            <div class="price-box"> 
                              <span class="price">${{number_format($condition->getCalculatedValue(\Cart::getSubTotal()),2)}}</span> 
                            </div>
                          </td>

                      @endforeach
                      
                    </tr> --}}
                    <tr>
                      <td>Shipping
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Collect From Rockdale Office
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              Standard Delivery - $12
                            </label>
                          </div>
                      </td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">$0.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td>
                        <div class="price-box"> 
                          <span class="price"><b>${{number_format(Cart::getTotal(),2)}}</b></span> 
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-12">
            <div class="right-side float-none-xs"> 
              <a href="{{ route('cart.checkout') }}" class="btn btn-color">Proceed to checkout
                <span><i class="fa fa-angle-right"></i></span>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
        
    </div>
</section>
        
@endsection