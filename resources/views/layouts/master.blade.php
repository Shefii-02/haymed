<!DOCTYPE html>
<html lang="fr">

<head>
    <title>
        Heymed Healthcare Solutiton Pvt. Ltd
    </title>

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="format-detection" content="telephone=no">


    <meta name='description' content='HeymedHealthcare'>

    <meta property="og:title" content="Heymed Healthcare">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://heymedhealthcare.com/">
    <meta property="og:site_name" content="Heymed Healthcare">
    <meta name="theme-color" content="#fff" />




    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">

    <meta property="og:locale" content="fr_CA">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css?v=1.2'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/home.css?v=1.2'>

    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/layout.css?v=1.2'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="all">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>


    <style>
        /* Background Styles */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            /* Opacity transition */
        }

        #background-container {
            height: 100%;
            width: 100%;
        }

        .active {
            opacity: 1;
        }

        /* Smooth Camera Panning Effects */
        .zoom {
            animation: zoom 5s infinite alternate ease-in-out;
        }

        .pan-left {
            animation: panLeft 5s infinite alternate ease-in-out;
        }

        .pan-right {
            animation: panRight 5s infinite alternate ease-in-out;
        }

        .pan-top {
            animation: panTop 5s infinite alternate ease-in-out;
        }

        .pan-bottom {
            animation: panBottom 5s infinite alternate ease-in-out;
        }

        /* Keyframes for Smooth Camera Panning */
        @keyframes zoom {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.2);
            }
        }

        @keyframes panLeft {
            0% {
                transform: scale(1.1) translateX(0);
            }

            100% {
                transform: scale(1.1) translateX(-20px);
            }
        }

        @keyframes panRight {
            0% {
                transform: scale(1.1) translateX(0);
            }

            100% {
                transform: scale(1.1) translateX(20px);
            }
        }

        @keyframes panTop {
            0% {
                transform: scale(1.1) translateY(0);
            }

            100% {
                transform: scale(1.1) translateY(-20px);
            }
        }

        @keyframes panBottom {
            0% {
                transform: scale(1.1) translateY(0);
            }

            100% {
                transform: scale(1.1) translateY(20px);
            }
        }

        /* Overlay Content */
        .overlay {
            /* position: absolute;
            z-index: 10;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%; */
            opacity: 0;
            /* Start hidden */
            visibility: hidden;
            /* Ensure it's hidden */
            /* transition: opacity 0.5s ease-in-out, visibility 0s 0.5s; */
            /* Transition for opacity */
        }

        .img-div.active .overlay {
            opacity: 1;
            /* Make visible */
            visibility: visible;
            /* Make it part of the layout */
        }

        .img-div .content {
            padding-inline: 2rem;
        }

        .overlay h1 {
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-shadow: 2px 2px #1b3a6a;
        }

        .overlay p {
            color: #ffffff;
            font-size: 1.1rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px #1b3a6a;
            font-weight: 500;
        }
    </style>
    @stack('header')
</head>

<body class="home a-propos">
    @include('layouts.layout')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const headerHeight = document.querySelector('body > header').offsetHeight;
            document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
        });

        function toggleBurgerMenu(burger) {
            burger.classList.toggle('active');
            document.querySelector('body > header > nav').classList.toggle('active');
            document.querySelector('body').classList.toggle('freeze');
            document.querySelectorAll('.js-collapsible').forEach(el => el.classList.toggle('active'));
        }
    </script>



    <script src="assets/js/vendors/gsap.js">
    </script>


    <script
        src="assets/js/vendors/ScrollTrigger.js">
    </script>


    {{-- <script src="assets/js//vendors/lenis.min.min.63ba008a9f3073bba096bd2aab4090b12e1f9e22a305c480ad09953bc7f59705.js">
    </script> --}}


    {{-- <script src="assets/js//bolean-anims.min.8818d76f2d1f89a70f595c0fff1056a9715108bf0a758eedc03d356584d59f6b.js"></script> --}}

    {{-- <script>
        function replaceNonBreakingSpaces(node) {
            if (node.nodeType === Node.TEXT_NODE) {
                node.textContent = node.textContent.replace(/ ([!?;:])/g, '\u00A0$1');
            } else {
                node.childNodes.forEach(replaceNonBreakingSpaces);
            }
        }
        replaceNonBreakingSpaces(document.body);
    </script> --}}

    {{-- <script src="assets/js//logo-switcher.min.dfd1fee948228e61a2191839a54f8bda1ba37589c1833e13e17913125140f0fe.js"></script> --}}

    <script>
        const testimonialList = document.querySelector("#testimonials ul");
        const testimonials = document.querySelectorAll("#testimonials ul li");
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const gap = 12;
        let activeSlide = 0;
        let slidesToShow = 5;
        let slideWidth;
        let isAnimating = false;
        let firstNextCalled = false;

        function setSlidesToShow() {
            slideWidth = testimonials[0].offsetWidth + gap;
            testimonialList.style.width = `${100 * testimonials.length / slidesToShow}%`;

            gsap.set(testimonials, {
                width: `${100 / testimonials.length}%`
            });
            snapToSlide(0);
        }

        function snapToSlide(index) {
            activeSlide = index;
            gsap.to(testimonialList, {
                x: -(slideWidth * index),
                duration: 0.5,
                ease: "power2.inOut",
            });

            testimonials.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
            });
        }

        function nextSlide() {
            if (isAnimating) return;
            isAnimating = true;

            gsap.to(testimonials, {
                scaleY: 1,
                duration: 0.5,
                ease: "power2.inOut"
            });

            if (firstNextCalled) {
                let secondLI = document.querySelector("#testimonials ul li:nth-child(3)");
                gsap.to(secondLI, {
                    scaleY: 1.1,
                    duration: 0.5,
                    ease: "power2.inOut"
                });
            }

            if (!firstNextCalled) {
                let secondLI = document.querySelector("#testimonials ul li:nth-child(2)");
                gsap.to(secondLI, {
                    scaleY: 1.1,
                    duration: 0.5,
                    ease: "power2.inOut"
                });
                firstNextCalled = true;
            }

            activeSlide++;
            if (activeSlide >= testimonials.length) {
                activeSlide = 0;
            }
            updateSlidePositions();
            prevButton.disabled = false;
        }

        function prevSlide() {
            if (isAnimating || prevButton.disabled) return;
            isAnimating = true;

            gsap.to(testimonials, {
                scaleY: 1,
                duration: 0.5,
                ease: "power2.inOut"
            });

            let secondLI = document.querySelector("#testimonials ul li:nth-child(1)");
            gsap.to(secondLI, {
                scaleY: 1.1,
                duration: 0.5,
                ease: "power2.inOut"
            });

            activeSlide--;
            if (activeSlide < 0) {
                activeSlide = testimonials.length - 1;
            }
            updateSlidePositions();
        }

        function updateSlidePositions() {
            disableButtons();

            gsap.to(testimonialList, {
                x: -(slideWidth * activeSlide),
                duration: 0.5,
                ease: "power2.inOut",
                modifiers: {
                    x: gsap.utils.unitize(x => parseFloat(x) % (slideWidth * testimonials.length)),
                },
                onComplete: () => {
                    repositionSlides();
                    enableButtons();
                    isAnimating = false;
                },
            });
        }

        function repositionSlides() {
            if (activeSlide === testimonials.length - 4) {
                testimonialList.appendChild(testimonialList.firstElementChild);
                activeSlide--;
            } else if (activeSlide === 0) {
                testimonialList.insertBefore(testimonialList.lastElementChild, testimonialList.firstElementChild);
                activeSlide++;
            }

            gsap.set(testimonialList, {
                x: -(slideWidth * activeSlide)
            });
        }

        function disableButtons() {
            prevButton.disabled = true;
            nextButton.disabled = true;
        }

        function enableButtons() {
            nextButton.disabled = false;
            if (activeSlide > 0) {
                prevButton.disabled = false;
            }
        }

        setSlidesToShow();
        window.addEventListener('resize', setSlidesToShow);

        nextButton.addEventListener('click', nextSlide);
        prevButton.addEventListener('click', prevSlide);

        snapToSlide(activeSlide);

        gsap.set(testimonials[0], {
            scaleY: 1.1
        });

        prevButton.disabled = true;
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" type="text/javascript" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript" defer="defer">
    </script>

    @stack('footer')
    <script>
        $(function() {
            AOS.init()
        }), $(window).on("load", function() {
            AOS.refresh()
        }), $(document).ready(function() {
            var m = $(".brandtabsdiv");
            $(".newsslider").slick({
                infinite: !1,
                slidesToShow: 4.7,
                slidesToScroll: 2,
                arrows: !0,
                prevArrow: $(".an-left"),
                nextArrow: $(".an-right"),
                responsive: [{
                    breakpoint: 2500,
                    settings: {
                        slidesToShow: 3.7,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 2e3,
                    settings: {
                        slidesToShow: 2.7,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2.1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.8,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 530,
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
</body>

</html>
