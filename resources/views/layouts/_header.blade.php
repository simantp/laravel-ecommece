<header class="navbar navbar-custom left-area" id="header">
    <div class="header-middle">
      <div class="">
        <div class="row">
          <div class="col-6">
            <div class="header-middle-left">
              <div class="navbar-header float-none-sm">
                <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                  <img alt="pswlogo" src="{{ asset('images/pswlogo.png') }}">
                </a> 
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="right-side header-right-link">
              <ul>
                
                <li class="caticon"> 
                  <a class="popup-with-form" href="#categories_popup"> 
                    <i class="fas fa-list-alt"></i>
                  </a>
                </li>
                  
                <li class="cart-icon"> 
                  <a href="{{ route('cart.index') }}"> 
                    <span></span>
                  </a>
                </li>
                  
                <li class="side-toggle">
                  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                </li>
                  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=""> 
      <div class="position-s">
        <div id="menu" class="navbar-collapse collapse" >
            <p class="text-center">Have Questions<br>Call Us</p>
            <a href="#"><h3 class="text-center">(02) 8033 7339</h3></a>
          <div class="header-middle-left">
            <div class="navbar-header float-none-sm">
              <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                <img alt="pswlogo" src="{{ asset('images/pswlogo.png') }}">
              </a> 
            </div>
          </div>
          <ul class="nav navbar-nav">
            
          <li class="level dropdown"> <span class="opener plus"></span> <a href="{{ route('products.index') }}" class="page-scroll">Products</a>
              <div class="megamenu mobile-sub-menu">
                <div class="megamenu-inner-top">
                  <ul class="sub-menu-level1">
                      <li><a href="shop.html"><span>Digital Printing</span></a>
                      </li>
                      <li><a href="shop.html"><span>3D Sign</span></a>
                      </li>
                      <li><a href="shop.html"><span>Banners</span></a>
                      </li>
                      <li><a href="shop.html"><span>Uniform</span></a>
                      </li> 
                  </ul>
                </div>
              </div>
            </li>
          
              <li class="level"><a href="about.html" class="page-scroll">About Us</a></li>
              
              <li class="level dropdown"> <span class="opener plus"></span> <a href="#" class="page-scroll">Useful Links</a>
              <div class="megamenu mobile-sub-menu">
                <div class="megamenu-inner-top">
                  <ul class="sub-menu-level1">
                      <li><a href="how-it-works.html"><span>How it Works</span></a>
                      </li>
                      <li><a href="#"><span>Privacy Policy</span></a>
                      </li>
                      <li><a href="#"><span>Terms & Conditions</span></a>
                      </li> 
                  </ul>
                </div>
              </div>
            </li>
              
            <li class="level"><a href="contact.html" class="page-scroll">Contact Us</a></li>
            
            
              
          </ul>
            
          <ul class="social-icon">
              
            <li><a title="Facebook" class="facebook"><i class="fab fa-facebook-f"> </i></a></li>
              
            <li><a title="Instagram" class="instagram"><i class="fab fa-instagram-square"></i></a></li>
              
          </ul>
            <div class="mt-40 arr">
              <p class="text-center">© 2020 All Rights Reserved.</p>
            </div>
            <div class="payment text-center">
              <ul class="payment_icon">
                  
                <li class="atos"><a href="#"><img src="{{ asset('images/pay5.png') }}" alt="Stylexpo"></a></li>
                  
              </ul>
            </div>
        </div>
      </div>
    </div>
  
    <div class="popup-links ">
      <div class="popup-links-inner">
        <ul>
            
          <li class="cart-icon">
            <a href="{{ route('cart.index') }}"><span class="icon"></span><span class="icon-text">Cart</span></a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="popup-links ">
      <div class="popup-links-inner">
        <ul>
            
          <li class="categories">
            <a class="popup-with-form" href="#categories_popup"><span class="icon"></span><span class="icon-text">Categories</span></a>
          </li>
            
          <li class="cart-icon">
            <a href="{{ route('cart.index') }}"><span class="icon"></span><span class="icon-text">Cart</span></a>
          </li>
            
        </ul>
      </div>
      <div id="popup_containt">
          <div id="categories_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>Categories</span></h2>
          </div>
          <div class="popup-detail">
            <ul class="cate-inner">
                
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Digital Printing</a>
                <div class="megamenu  mega-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2">
                        <ul class="sub-menu-level2 ">
                            
                          <li class="level3"><a href="shop.html"><span>■</span>A-Frame</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Banner</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Booklet</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Business Card</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Label</a></li>
                          <li class="level3"><a href="shop.html"><span>■</span>Flyers</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="level">
                <a href="shop.html" class="page-scroll">3D Sign</a>
              </li>
              <li class="level">
                <a href="shop.html" class="page-scroll">Real Estate Sign</a>
              </li>
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Promotional Products</a>
                  <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                              
                            <li class="level3"><a href="shop.html"><span>■</span>Bags</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Canvas</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Cups</a></li>
                            
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Signage</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.html"><span>■</span>ACP Boards</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Coreflute Signs</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Frosting</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Lightbox</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Reception sign</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Vinyl</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Uniform/Jersey</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.html"><span>■</span>Business T-Shirt</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Beanies</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Frosting</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Cap</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Event T-Shirt</a></li>
                            <li class="level3"><a href="shop.html"><span>■</span>Jersey Printing</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Vehicle Graphics</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.html"><span>■</span>Vehicle Magnet</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="shop.html" class="page-scroll">Website</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.html"><span>■</span>Domain Registration</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Web Hosting</a></li>
                              <li class="level3"><a href="shop.html"><span>■</span>Web Design</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
                
            </ul>
          </div>  
        </div>
      </div>
    </div>
  
  </header>