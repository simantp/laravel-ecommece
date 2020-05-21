@extends('layouts.front')

@section('content')

  <section class="right-area">
    <div class="grid">
        
        <!--Carousel-->
        
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                
              <div class="carousel-item active">
                  <img src="{{ asset('images/banner1.png') }}" class="d-block w-100" alt="banner1">
              </div>
                
              <div class="carousel-item">
                <img src="{{ asset('images/banner2.png') }}" class="d-block w-100" alt="banner2">
              </div>
                
            </div>
            
        </div>
        
        <!--End Carousel-->
        
        <h2 class="text-center mt-4">Products</h2>
        
        <!--Products-->
        
        <div class="product-listing">
            <div class="inner-listing">
              <div class="row">
                
                @foreach ($allProducts as $product)

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


                {{-- <div class="col-xl-4 col-lg-6 col-md-4 col-6 item-width mb-30">
                  <div class="product-item">
                      <div class="main-label new-label"><span>Inquiry</span></div>
                    <div class="product-image"> <a href="product-inquiry.html"> <img src="images/2.jpg" alt="Stylexpo"> </a>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-inquiry.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box">Make an Inquiry</div>
                    </div>
                  </div>
                </div> --}}
                  
                  
              </div>
            </div>
          </div> 
        
        <!--End Products-->
        
    </div>
  </section>

@endsection