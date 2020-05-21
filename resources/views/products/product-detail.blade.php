@extends('layouts.front')

@section('content')

    <section class="right-area">
        <div class="grid">
            
        <!-- Bread Crumb STRAT -->

        <div class="mt-sm-15">
            <div class="banner inner-banner1 ">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Wraps</h1>
                <div class="bread-crumb right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Home</a>/</li>
                    <li><span>Wraps</span></li>
                </ul>
                </div>
            </section>
            </div>
        </div>

        <!-- Bread Crumb END -->
        
        <div class="pt-70">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-xs-30">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                    
                    <a href="#"><img src="{{ asset('images/1.jpg') }}" alt="Stylexpo"></a>
                    
                </div>
                <div class="share-link">
                    <label>Share This : </label>
                    <div class="social-link">
                    <ul class="social-icon">
                        <li><a class="facebook" title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="instagram" title="Instagram" href="#"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a class="linkedin" title="Linkedin" href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                    </div>
                </div>
                
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-12">
                        <div class="product-detail-main p-20">
                            <div class="product-item-details">
                            <h1 class="product-item-name">{{ $product -> name }}</h1>
                            
                            <div class="price-box">Starting From <span class="price">${{ $product -> price }}</span></div>
                            <hr>
                            <br>
                            <p>{{ $product -> description }}</p>
                            <div class="product-size select-arrow input-box select-dropdown mb-20 mt-30">
                                <label>Options-1</label>
                                <fieldset>
                                <select class="selectpicker form-control option-drop" id="select-by-size">
                                    <option selected="selected" value="#">1</option>
                                    <option value="#">2</option>
                                    <option value="#">3</option>
                                </select>
                                </fieldset>
                            </div>
                            <div class="product-color select-arrow input-box select-dropdown mb-20">
                                <label>Options-2</label>
                                <fieldset>
                                <select class="selectpicker form-control option-drop" id="select-by-color">
                                    <option selected="selected" value="#">4</option>
                                    <option value="#">5</option>
                                    <option value="#">6</option>
                                    <option value="#">7</option>
                                </select>
                                </fieldset>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                I will Upload My Own Artwork
                                </label>
                            </div>
                            <hr>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                                <input type="submit" value="UPLOAD">
                            </form>
                            <hr>
                            <div class="mb-20">
                                <div class="bottom-detail cart-button">
                                <ul>
                                    <li class="pro-cart-icon">
                                
                                        <a href="{{ route('cart.add', $product->id) }}">
                                            <button title="Add to Cart" class="btn-color">Add to Cart</button>
                                        </a>
                                    
                                    </li>
                                </ul>
                                </div>
                            </div>
                            
                                <hr>
                            
                            <div class="mt-20">
                                <a class="popup-with-form" href="#inquiry-form">
                                    <button class="btn btn-primary"><i class="fas fa-caret-right"></i> Make an Inquiry</button>
                                </a>
                            </div>

                            <!-- form itself -->
                            <div id="popup_containt">
                
                                <div id="inquiry-form" class="white-popup-block mfp-hide popup-position">
                                <div class="popup-title">
                                    <h2 class="main_title heading"><span>Send Us an Inquiry</span></h2>
                                </div>
                                <div class="popup-detail">
                                    
                                    <div class="modal-body mx-3">
                                        <div class="md-form">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <input type="text" id="form34" class="form-control validate" placeholder="Your name">
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <input type="email" id="form29" class="form-control validate" placeholder="Your email">
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-phone prefix grey-text"></i>
                                            <input type="text" id="form32" class="form-control validate" placeholder="Contact Number">
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                                            <textarea type="text" id="form8" class="md-textarea form-control" rows="4" placeholder="Your message"></textarea>
                                        </div>

                                    </div>
                                    
                                        <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-unique btn-color">Send <i class="fas fa-paper-plane ml-1"></i></button>
                                        </div>
                                    
                                </div>
                            </div>
                            </div>
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
