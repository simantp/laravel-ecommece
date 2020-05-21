@extends('layouts.front')

@section('content')

  <section class="right-area">
          
    <!-- Bread Crumb STRAT -->
      
      <div class="mt-sm-15">
          <div class="banner inner-banner1 ">
          <section class="banner-detail center-xs">
              <h1 class="banner-title">Products</h1>
              <div class="bread-crumb right-side float-none-xs">
              <ul>
                  <li><a href="index.html">Home</a>/</li>
                  <li><span>Products</span></li>
              </ul>
              </div>
          </section>
          </div>
      </div>
      
    <!-- Bread Crumb END -->
      
      <div class="ptb-70">
          <div class="row">
              
              <div class="col-xl-12 col-lg-12 col-lgmd-100per">
                  
                  <div class="product-listing">
                      <div class="inner-listing">
                          <div class="row">

                            @foreach ($products as $product)
                                
                              <div class="col-xl-4 col-lg-6 col-md-4 col-6 item-width mb-30">
                                  <div class="product-item">
                                      <div class="product-image"> <a href="{{ route('product.single', $product -> id) }}"> <img src="{{ asset('images/1.jpg') }}" alt="Stylexpo"> </a>
                                      </div>
                                      <div class="product-item-details">
                                          <div class="product-item-name"> <a href="{{ route('product.single', $product -> id) }}">{{ $product -> name }}</a> </div>
                                          <div class="price-box">Starting From <span class="price">${{ $product -> price }}</span></div>
                                      </div>
                                  </div>
                              </div>
                            
                            @endforeach

                          </div>
                          
                          <div class="row">
                              <div class="col-12">
                                  <div class="pagination-bar">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                          <li class="active"><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              
          </div>
      </div>
      
  </section>

@endsection