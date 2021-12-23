<header id="home" class="cursor-light">
    <div class="inner-header nav-icon">
        <div class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-2">
                        <a class="navbar-brand link" href="#home">
                            <img src="{{ asset('templates/singlepage/images/logo-pdp.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="col-8 col-lg-10 simple-navbar d-flex align-items-center justify-content-end">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="navbar-nav ml-auto d-flex align-items-center">
                                    <a class="nav-link home scroll" href="#home">Home</a>
                                    <a class="nav-link scroll" href="#about">About</a>
                                    <a class="nav-link scroll" href="#product">Produk</a>
                                    <a class="nav-link scroll" href="#testimoni">Testimoni</a>
                                    <a class="nav-link scroll" href="#photo">Photo</a>
                                    <a class="nav-link scroll" href="#video">Video</a>
                                    <a href="https://api.whatsapp.com/send?phone={{ session('data')->wa }}" target="blank" class="btn button btn-medium btn-rounded btn-transparent ml-0 ml-lg-5">Pesan</a>
                                    <span class="menu-line scroll"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--toggle btn-->
        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                    <div class="col-12 d-flex justify-content-center align-items-center text-center">
                        <a href="#home" class="navbar-brand"><img src="{{ asset('templates/singlepage/images/logo-pdp.png')}}" alt="logo"></a>
                    </div>
                    <div class="col-12 col-lg-8 text-center text-lg-left">
                        <nav class="side-nav w-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#product">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimoni">Testimoni</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#photo">Photo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#video">Video</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
