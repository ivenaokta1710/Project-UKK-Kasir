<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img id="photo" src=""
                                            alt="product image">
                                    </figure>
                                    
                                </div>
                               
                            </div>
                            <!-- End Gallery -->
                        <!-- Alert Bootstrap untuk sukses -->
                        <div id="success-alert" class="alert alert-success d-none" role="alert">
                        <span id="success-message"></span>
                        </div>
                        <!-- Alert Bootstrap untuk error -->
                        <div id="error-alert" class="alert alert-danger d-none" role="alert">
                        <span id="error-message"></span>
                        </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30" id="barang">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Categori: <a href="" id="categori"></a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand" id="harga"></span></ins>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        {{-- fungsinya untuk --}}
                                        <form action="#" id="form-cart">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id_barang" id="id_barang">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                    </form>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-20">
                                    <li>Availability:<span class="in-stock text-success ml-5" id="stok"></span>
                                    <li>Terjual:<span class="in-stock text-success ml-5" id="terjual"></span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- HEADER IJOO --}}
    <header class="header-area header-style-4 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+62) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a href="page-contact.html">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Banyak Diskon tersedia <a href="">View details</a>
                                    </li>
                                    <li>Tedapat banyak barang yang anda butuhkan</li>
                                    <li>Temukan penawaran terbaik di IVORMARKET!<a
                                            href="#">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END HEADER IJOO --}}

        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    {{-- logo  --}}
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/logo1.png"
                                alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>

                        {{-- Start Keranjang cekout --}}
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('keranjang') }}">
                                        <img alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-cart.svg"><span class="pro-count blue">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- End Keranjang cekout  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/logo.svg" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li><a href="#"><i class=""></i></a>Makanan</li>
                                    <li><a href="#"><i class=""></i></a>Minuman</li>
                                    <li><a href="#"><i class=""></i></a>Makanan Ringan atau Snack</li>
                                    <li><a href="#"><i class=""></i></a>Permbumbuan Dapur</li>
                                    <li><a href="#"><i class=""></i></a>Frozen food</li>
                                    <li><a href="#"><i class=""></i></a>Makan Segar</li>
                                    <li><a href="#"><i class=""></i></a>Rumah Tangga</li>
                                    <li><a href="#"><i class=""></i></a>Kecantikan</li>
                                    <li><a href="#"><i class=""></i></a>Kesehatan</li>
                                    <li><a href="#"><i class=""></i></a>Hobi dan olahraga</li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        {{-- MENU BARR --}}
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('landing') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li class="position-static"><a href="#">Mega menu <i
                                                class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Konsumsi</a>
                                                <ul>
                                                    <li><a href="#">Semangka</a></li>
                                                    <li><a href="#">Es Cream Oreo</a></li>
                                                    <li><a href="#">Daging Sapi</a></li>
                                                    <li><a href="#">Buah Strawberry</a></li>
                                                    <li><a href="#">Indomie</a></li>
                                                    <li><a href="#">Potato Lays</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Non Konsumsi</a>
                                                <ul>
                                                    <li><a href="#">Lipstik Dior</a></li>
                                                    <li><a href="#">Raket Yonex</a></li>
                                                    <li><a href="#">Satu Set Pisau</a></li>
                                                    <li><a href="#">Pensil Warna</a></li>
                                                    <li><a href="#">Buku</a></li>
                                                    <li><a href="#">Fresh Care Roll</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="#"><img
                                                            src="{{ asset('evara') }}/assets/imgs/banner/menu-benner.png"
                                                            alt="Evara"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hemat besar</h4>
                                                        <h3>Di IVORmart<br>Jangan lewatkan</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Ayo Belanja!</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>30%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Blog Category Grid</a></li>
                                            <li><a href="#">Blog Category List</a></li>
                                            <li><a href="#">Blog Category Big</a></li>
                                            <li><a href="#">Blog Category Wide</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-headset"></i><span>Hubungi</span> 1900 - 888 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('keranjang') }}">
                                    <img alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">2</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>