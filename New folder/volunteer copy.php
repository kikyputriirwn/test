<!doctype html>
<html lang="en">

<head>
    <?php include "layouts/head.php" ?>
    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

        /* DEMO GENERAL ============================== */
        .hover {
            overflow: hidden;
            position: relative;
            padding-bottom: 60%;
        }

        .hover-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 90;
            transition: all 0.4s;
        }

        .hover img {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.3s;
        }

        .hover-content {
            position: relative;
            z-index: 99;
        }


        /* DEMO 1 ============================== */
        .hover-1 img {
            width: 105%;
            position: absolute;
            top: 0;
            left: -5%;
            transition: all 0.3s;
        }

        .hover-1-content {
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 99;
            transition: all 0.4s;
        }

        .hover-1 .hover-overlay {
            background: rgba(0, 0, 0, 0.5);
        }

        .hover-1-description {
            transform: translateY(0.5rem);
            transition: all 0.4s;
            opacity: 0;
        }

        .hover-1:hover .hover-1-content {
            bottom: 2rem;
        }

        .hover-1:hover .hover-1-description {
            opacity: 1;
            transform: none;
        }

        .hover-1:hover img {
            left: 0;
        }

        .hover-1:hover .hover-overlay {
            opacity: 0;
        }


        /* DEMO 2 ============================== */
        .hover-2 .hover-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1));
        }

        .hover-2-title {
            position: absolute;
            top: 50%;
            left: 0;
            text-align: center;
            width: 100%;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-2-description {
            width: 100%;
            position: absolute;
            bottom: 0;
            opacity: 0;
            left: 0;
            text-align: center;
            z-index: 99;
            transition: all 0.3s;
        }

        .hover-2:hover .hover-2-title {
            transform: translateY(-1.5rem);
        }

        .hover-2:hover .hover-2-description {
            bottom: 0.5rem;
            opacity: 1;
        }

        .hover-2:hover .hover-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1));
        }


        /* DEMO 3 ============================== */
        .hover-3::after {
            content: '';
            width: calc(100% - 3rem);
            height: calc(100% - 3rem);
            border: 1px solid #fff;
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            z-index: 90;
            transition: all 0.3s;
            transform: scale(1.1);
            opacity: 0;
            display: block;
            opacity: 0;
        }

        .hover-3-content {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            text-align: center;
            z-index: 99;
        }

        .hover-3-description {
            opacity: 0;
            transform: scale(1.3);
            transition: all 0.3s;
        }

        .hover-3 img {
            width: 110%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hover-3 .hover-overlay {
            background: rgba(0, 0, 0, 0.2);
        }

        .hover-3:hover img {
            width: 100%;
        }

        .hover-3:hover::after {
            opacity: 1;
            transform: none;
        }

        .hover-3:hover .hover-3-description {
            opacity: 1;
            transform: none;
        }

        .hover-3:hover .hover-overlay {
            background: rgba(0, 0, 0, 0.8);
        }


        /* DEMO 4 ============================== */
        .hover-4 img {
            width: 110%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hover-4 .hover-overlay {
            background: rgba(0, 0, 0, 0.4);
            z-index: 90;
        }

        .hover-4-title {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 3rem;
            z-index: 99;
        }

        .hover-4-description {
            position: absolute;
            top: 2rem;
            left: 2rem;
            text-align: right;
            border-right: 3px solid #fff;
            padding: 0 1rem;
            z-index: 99;
            transform: translateX(-1.5rem);
            opacity: 0;
            transition: all 0.3s;
        }

        @media (min-width: 992px) {
            .hover-4-description {
                width: 50%;
            }
        }

        .hover-4:hover img {
            width: 100%;
        }

        .hover-4:hover::after {
            opacity: 1;
            transform: none;
        }

        .hover-4:hover .hover-4-description {
            opacity: 1;
            transform: none;
        }

        .hover-4:hover .hover-overlay {
            background: rgba(0, 0, 0, 0.8);
        }


        /* DEMO 5 ============================== */
        .hover-5::after {
            content: '';
            width: 100%;
            height: 10px;
            background: #47c650;
            position: absolute;
            bottom: -10px;
            left: 0;
            display: block;
            transition: all 0.3s;
            z-index: 999;
        }

        .hover-5 .hover-overlay {
            background: rgba(0, 0, 0, 0.4);
        }

        .hover-5-title {
            position: absolute;
            bottom: 1rem;
            left: 0;
            transition: all 0.3s;
            padding: 2rem 3rem;
            z-index: 99;
        }

        .hover-5-title span {
            transition: all 0.4s;
            opacity: 0;
            color: #47c650;
        }

        .hover-5:hover .hover-overlay {
            background: rgba(0, 0, 0, 0.8);
        }

        .hover-5:hover .hover-5-title {
            bottom: 0;
        }

        .hover-5:hover .hover-5-title span {
            opacity: 1;
        }

        .hover-5:hover::after {
            bottom: 0;
        }

        /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
        body {
            min-height: 100vh;
            background-color: #fafafa;
        }
    </style>
</head>

<body>

    <!-- main -->
    <main class="ds-pge-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12  col-md-12  col-lg-10  col-xl-10  col-xxl-10">
                    <!-- Case Studies -->
                    <div class="ds-case-studies ds-case-studies-details ds-about-section text-center">
                        <h2 class="ds-heading-inner ds-boder_text"><span>Design Graphic</span></h2>
                        <div class="text-center ds-back-home">
                            <a class="ds-back-to-home" href="index.php"><i class="uil uil-estate"></i></a>
                        </div>

                        <!-- testtt -->
                        <div class="container py-5">

                            <!-- DEMO 1 -->
                            <div class="py-5">
                                <h3 class="font-weight-bold mb-0">Demo 1</h3>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <!-- DEMO 1 Item-->
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="hover hover-1 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-3.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-1-content px-5 py-4">
                                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DEMO 1 Item-->
                                    <div class="col-lg-6">
                                        <div class="hover hover-1 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-4.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-1-content px-5 py-4">
                                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DEMO 2-->
                            <div class="py-5">
                                <h3 class="font-weight-bold mb-0">Demo 2</h3>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <!-- DEMO 2 Item-->
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="hover hover-2 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-2.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-2-content px-5 py-4">
                                                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-2-description text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DEMO 2 Item-->
                                    <div class="col-lg-6">
                                        <div class="hover hover-2 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-1.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-2-content px-5 py-4">
                                                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-2-description text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DEMO 3 -->
                            <div class="py-5">
                                <h3 class="font-weight-bold mb-0">Demo 3</h3>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <!-- DEMO 3 Item-->
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="hover hover-3 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-5.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-3-content px-5 py-4">
                                                <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-3-description small text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DEMO 3 Item    -->
                                    <div class="col-lg-6">
                                        <div class="hover hover-3 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-6.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-3-content px-5 py-4">
                                                <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-3-description small text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DEMO 4 -->
                            <div class="py-5">
                                <h3 class="font-weight-bold mb-0">Demo 4</h3>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <!-- DEMO 4 Item-->
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="hover hover-4 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-7.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-4-content">
                                                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-4-description text-uppercase mb-0 small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DEMO 4 Item            -->
                                    <div class="col-lg-6">
                                        <div class="hover hover-4 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-8.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-4-content">
                                                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Image </span>Caption</h3>
                                                <p class="hover-4-description text-uppercase mb-0 small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- DEMO 5 -->
                            <div class="py-5">
                                <h3 class="font-weight-bold mb-0">Demo 5</h3>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <!-- DEMO 5 Item-->
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="hover hover-5 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-10.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-5-content">
                                                <h3 class="hover-5-title text-uppercase font-weight-light mb-0">Image <strong class="font-weight-bold text-white">Caption </strong><span>Colorfull</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- DEMO 5 Item-->
                                        <div class="hover hover-5 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-9.jpg" alt="">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-5-content">
                                                <h3 class="hover-5-title text-uppercase font-weight-light mb-0">Image <strong class="font-weight-bold text-white">Caption </strong><span>Colorfull</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /testtt -->

                    </div>
                    <!-- Case Studies -->
                </div>
            </div>
        </div>
    </main>
    <!-- main -->

    <!-- footer -->
    <?php include "layouts/footer.php" ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>