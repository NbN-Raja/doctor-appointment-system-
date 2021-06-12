<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Doctors</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- tailwind -->

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <?php

include 'navbar.php';
?>

    <!-- Logo  -->

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Our Gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ######## Page  Title End ####### -->

    <div class="image">
        <img src="../doctors/img/logo.png">
    </div>


    </div>
    <!-- ######## Gallery End ####### -->


    <!-- ################# Our Departments Starts Here#######################--->


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
        <meta name="description" content="Free open source Tailwind CSS Store template">
        <meta name="keywords"
            content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">



        <style>
            .work-sans {
                font-family: 'Work Sans', sans-serif;
            }

            #menu-toggle:checked+#menu {
                display: block;
            }

            .hover\:grow {
                transition: all 0.3s;
                transform: scale(1);
            }

            .hover\:grow:hover {
                transform: scale(1.02);
            }

            .carousel-open:checked+.carousel-item {
                position: static;
                opacity: 100;
            }

            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }

            #carousel-1:checked~.control-1,
            #carousel-2:checked~.control-2,
            #carousel-3:checked~.control-3 {
                display: block;
            }

            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }

            #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #000;
                /*Set to match the Tailwind colour you want the active one to be */
            }
        </style>

    </head>

    <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">











        <section class="bg-white py-8">

            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                            href="#">
                            Doctors
                        </a>


                    </div>
                </nav>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/1.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class=""> Dr. Mala Shrestha</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/2.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Binod Mishra</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/3.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Aryan Acharya</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/4.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Sundar Shrestha</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/5.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Binod Kumar</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/6.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Bidhya Acharya</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/7.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Mala Shrestha</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="assets/images/doctors/8.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Dr. Mala Shrestha</p>

                        </div>
                        <p class="pt-1 text-gray-900">Contact <i> 9865022457 </i></p>
                        <p class="pt-1 text-gray-900">Timing: Mon-Friday</p>
                    </a>
                </div>

            </div>

        </section>








        <?php

include 'footer.php';

?>

















    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>


</html>