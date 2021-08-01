<!-- //? ==================== About Section ==================== -->
<!-- ======= Tabs Section ======= -->
<!-- //* aici avem 3 butoane care te duc pe 3 taburi diferite -->
<!-- //! de ce sunt atatea div-uri :))) -->
<section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

        <!-- //? aici este doar titlul -->
        <div class="section-title">
            <h2>About Us</h2>
            <h3>Find out more <span>about us</span></h3>
        </div>

        <!-- //? un rand cu titlurile tb-urilor -->
        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-4">
                <a id="tab-01" class="nav-link tab active show" style="background:none" data-bs-toggle="tab" data-bs-target="#tab-1" onclick="myFunction1()">
                    <i class="ri-team-line"></i>
                    <h4 class="d-none d-lg-block">Who we are?</h4>
                </a>
            </li>
            <li class="nav-item col-4">
                <a id="tab-02" class="nav-link tab" data-bs-toggle="tab" data-bs-target="#tab-2" onclick="myFunction2()">
                    <i class="ri-currency-line"></i>
                    <h4 class="d-none d-lg-block">What are we trying to do?</h4>
                </a>
            </li>
            <li class="nav-item col-4">
                <a id="tab-03" class="nav-link tab" data-bs-toggle="tab" data-bs-target="#tab-3" onclick="myFunction3()">
                    <i class="ri-vip-diamond-line"></i>
                    <h4 class="d-none d-lg-block">What we offer?</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="d-lg-none d-xl-none padding_10"> Who we are? </h3>
                        <h3 class="padding_10"> A group of aliens.</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="/img/tabs-1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3 class="d-lg-none d-xl-none padding_10"> What are we trying to do? </h3>
                        <h3 class="padding_10">Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="/img/tabs-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3 class="d-lg-none d-xl-none padding_10"> What we offer? </h3>
                        <h3 class="padding_10">Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
                                Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="/img/tabs-3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= End Tabs Section ======= -->
<!-- //? ==================== End About Section ==================== -->
