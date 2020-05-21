@extends('layouts.front')

@section('content')

<section class="right-area">
    <div class="grid">
        
        <!-- Bread Crumb STRAT -->
    <div class="mt-sm-15">
      <div class="banner inner-banner1 ">
        <section class="banner-detail center-xs">
          <h1 class="banner-title">Checkout</h1>
          <div class="bread-crumb right-side float-none-xs">
            <ul>
              <li><a href="index.html">Home</a>/</li>
              <li><a href="cart.html">Cart</a>/</li>
              <li><span>Checkout</span></li>
            </ul>
          </div>
        </section>
      </div>
    </div>

    <!-- Bread Crumb END -->
    <div class="ptb-70">
      <div class="row">
        <div class="col-12">
          
          <div class="checkout-content" >

            <div class="heading-part align-center">
              <h2 class="heading">Shipping Details</h2>
            </div>


            {{-- <form class="checkout-form" action="{{route('orders.store')}}" method="post"> --}}

            <form class="checkout-form" action="{{route('orders.store')}}" method="post">

              @csrf

              <div class="col-xl-6 col-lg-6 col-md-6 form-part" style="float:left; position:relative; margin-right:40px">
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="shipping_fullname" placeholder="" value="" required>
                    
                  </div>
                  {{-- <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" name="shipping_lastname" placeholder="" value="" required>
                    
                  </div> --}}
                </div>
                  
                {{-- <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="customer_email" placeholder="you@example.com" required>
                  
                </div> --}}
                  
                <div class="mb-3">
                  <label for="email">Contact Number</label>
                  <input type="text" class="form-control" name="shipping_phone" placeholder="" required>
                  
                </div>

                <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="shipping_address" placeholder="1234 Main St" required>
                  
                </div>

                {{-- <div class="mb-3">
                  <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" name="shipping_address2" placeholder="Apartment or suite">
                </div> --}}

                <div class="row">
                    <div class="mb-3">
                        <label for="address2">City</label>
                        <input type="text" class="form-control" name="shipping_city" placeholder="Apartment or suite">
                    </div>
                  {{-- <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" name="shipping_city">
                      <option value="Australia">Australia</option>
                    </select>
                    
                  </div> --}}
                  <div class="col-md-4 mb-3">
                    <div class="mb-3">
                        <label for="address2">City</label>
                        <input type="text" class="form-control" name="shipping_state" placeholder="Apartment or suite">
                    </div>
                    
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" name="shipping_zipcode" placeholder="">
                  </div>
                </div>
                <hr class="mb-4">
                  
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6" style="position:relative">
                    <div class="heading-part align-center">
                      <h2 class="heading">Payment</h2>
                    </div>
                  <div class="payment-option-box mb-30">
                  <div class="payment-option-box-inner gray-bg">
                    <div class="payment-top-box">
                      <div class="radio-box left-side"> <span>
                        <input type="radio" id="paypal" value="paypal" name="payment_method">
                        </span>
                        <label for="paypal">PayPal</label>
                      </div>
                      <div class="paypal-box">
                        <div class="paypal-top"> <img src="{{ asset('images/paypal-img.png') }}" alt="Stylexpo"> </div>
                        <div class="paypal-img"> <img src="{{ asset('images/payment-method.png') }}" alt="Stylexpo"> </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <button type="submit" class="btn btn-color mt-3 right-side float-none-xs"><i class="fa fa-angle-right"></i>Place Order</button>
              
              </div>

            </form>

            
          </div>
        </div>
      </div>
    </div>
        
    </div>
  </section>

@endsection