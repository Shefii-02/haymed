<!DOCTYPE html>
<html lang="fr">

<head>
    {{-- <style>
        #didomi-host *:focus {
            outline: none !important;
        }

        #didomi-host .didomi-popup-header {
            font-family: inherit !important;
        }

        #didomi-host p {
            font-weight: 300 !important;
        }

        #didomi-host .didomi-popup-notice .didomi-popup-notice-logo {
            width: 150px !important;
            margin-inline: auto;
        }

        #didomi-host .didomi-buttons .didomi-button {
            justify-content: center;
            font-family: inherit;
            font-weight: 500;
            padding: .75rem 1.5rem !important;
            height: auto !important;
            font-size: 1rem;
            transition: all 250ms ease-in-out;
        }

        .didomi-consent-popup-footer.didomi-popup-footer>a>img,
        .didomi-consent-popup-footer.didomi-popup-footer>a>svg {
            display: none;
        }

        #didomi-host .didomi-exterior-border {
            border-color: var(--outer-border) !important;
        }

        #didomi-host .didomi-popup-container {
            border-color: var(--inner-border) !important;
        }

        #didomi-host .didomi-popup-notice-optin-type {
            max-width: 768px !important;
        }

        .didomi-popup-container {
            padding-bottom: 2rem !important;
            max-width: 100vw !important;
        }
    </style> --}}
    <title>
        Vincent &amp; Dussault | Bâtisseurs de concessionnaires automobiles
    </title>

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="format-detection" content="telephone=no">


    <meta name='description'
        content='Vincent &amp; Dussault est un entrepreneur en construction spécialisé en concessionnaires automobiles'>

    <meta property="og:title" content="Vincent &amp; Dussault | Bâtisseurs de concessionnaires automobiles">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vincentetdussault.com/">
    <meta property="og:site_name" content="Vincent &amp; Dussault">
    <meta name="theme-color" content="#fff" />




    <meta property="og:image" content="https://vincentetdussault.com/images/share-image.jpg">
    <meta property="og:image:secure_url" content="https://vincentetdussault.com/images/share-image.jpg">

    <meta property="og:locale" content="fr_CA">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <link rel="stylesheet" href="https://use.typekit.net/lfn8zwm.css">
    <link rel="stylesheet" rel="preconnect" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel='stylesheet' type='text/css' media='screen'
        href='assets/css/reset.min.9a00fd651c7dd05f3c80728cd48c98570cccb9ec3c5a36369c920c7d7a7a0088.css'>
    <link rel='stylesheet' type='text/css' media='screen'
        href='assets/css/form.min.9fc5f45d3d04772369dc998ed7001799cb4b1f85fde76170aa9aeba95d16efdc.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/home.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/layout.css'>

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



    <script src="assets/js//vendors/gsap.min.min.041b8e0d5d7eec2d130ccecb17432e0ec2a55b4eec524499b5ec71ed0a110650.js">
    </script>


    <script
        src="assets/js//vendors/ScrollTrigger.min.min.356af8ca559167a2d0ecbd16f4eba3a68217cc88f8251f562a64debf9508747c.js">
    </script>


    <script src="assets/js//vendors/lenis.min.min.63ba008a9f3073bba096bd2aab4090b12e1f9e22a305c480ad09953bc7f59705.js">
    </script>


    <script src="assets/js//bolean-anims.min.8818d76f2d1f89a70f595c0fff1056a9715108bf0a758eedc03d356584d59f6b.js"></script>

    <script>
        function replaceNonBreakingSpaces(node) {
            if (node.nodeType === Node.TEXT_NODE) {
                node.textContent = node.textContent.replace(/ ([!?;:])/g, '\u00A0$1');
            } else {
                node.childNodes.forEach(replaceNonBreakingSpaces);
            }
        }
        replaceNonBreakingSpaces(document.body);
    </script>

    <script src="assets/js//logo-switcher.min.dfd1fee948228e61a2191839a54f8bda1ba37589c1833e13e17913125140f0fe.js"></script>

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
    <script>
        $(document).ready(function() {
            // Data for Backgrounds and Content
            const slides = [{
                    image: "https://hayathhealthcare.com/images/banners/3tUZxnj8mFfoK7VTsO80pFIrk3sdow-photo-1586773860383-dab5f3bc1bcc.avif",
                    title: "Welcome to Our Website",
                    description: "Experience a beautiful animated background effect.",
                    buttonText: "Explore Now",
                    animation: "zoom"
                },
                {
                    image: "https://hayathhealthcare.com/images/banners/i7FeWtUNFkqwf808sLzHpObdAelqQP-photo-1587351021759-3e566b6af7cc.avif",
                    title: "Discover New Adventures",
                    description: "Every moment is a new opportunity to explore.",
                    buttonText: "Get Started",
                    // animation: "pan-left"
                    animation: "zoom"
                },
                {
                    image: "https://hayathhealthcare.com/images/banners/3tUZxnj8mFfoK7VTsO80pFIrk3sdow-photo-1586773860383-dab5f3bc1bcc.avif",
                    title: "Unlimited Possibilities",
                    description: "Technology, design, and creativity combined.",
                    buttonText: "Learn More",
                    // animation: "pan-right"
                    animation: "zoom"
                },
                {
                    image: "https://cdn.prod.website-files.com/66d06f3112b793c84dfc2b51/66d703c4753591c16e26c256_banner.avif",
                    title: "A Journey Awaits",
                    description: "Take the next step towards success.",
                    buttonText: "Join Us",
                    // animation: "pan-top"
                    animation: "zoom"
                },
                {
                    image: "https://cdn.prod.website-files.com/66d06f3112b793c84dfc2b51/66fe52c69fec547985a40f52_iStock-959594274-poster-00001.jpg",
                    title: "The Future is Bright",
                    description: "Stay ahead with innovation and passion.",
                    buttonText: "Get Inspired",
                    // animation: "pan-bottom"\    
                    animation: "zoom"
                }
            ];

            let currentIndex = 0;
            const $backgroundContainer = $('#background-container');

            // Add backgrounds dynamically along with content
            slides.forEach((slide, index) => {
                let $backgroundDiv = $('<div></div>').addClass('background').addClass(slide.animation);
                if (index === 0) $backgroundDiv.addClass('active');
                $backgroundDiv.css('background-image', `url('${slide.image}')`);

                let $overlayDivParent = $('<div></div>').addClass('content');
                let $overlayDiv = $('<div></div>').addClass('overlay');
                let $title = $('<h1></h1>').text(slide.title);
                let $description = $('<p></p>').text(slide.description);


                $overlayDiv.append($title, $description);
                $overlayDivParent.append($overlayDiv);

                // Append background and overlay content to container
                let $slideDiv = $('<div class="img-div"></div>').append($backgroundDiv, $overlayDivParent);
                $backgroundContainer.append($slideDiv);
            });

            const changeBackground = () => {
                const $backgrounds = $('.background');
                const $overlays = $('.overlay');
                $('.img-div.active').removeClass('active');

                $backgrounds.each(function(index) {
                    $(this).removeClass('active');
                    if (index === currentIndex) {
                        $(this).addClass('active');
                        $(this).parent().addClass('active');
                    }
                });

                currentIndex = (currentIndex + 1) % slides.length;
            };
            changeBackground()
            setInterval(changeBackground, 5000); // Change every 5 seconds
        });
    </script>
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
