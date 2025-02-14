@extends('layouts.master')
@push('header')
    <style>
        .frame-type-news_newsliststicky img {
            width: 100% !important;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            height: 230px !important;
        }

        .newslistmetas a {
            color: #000;
            /* font-family: Oxygen-Bold; */
            font-weight: 300;
        }

        time {
            font-size: 14px;
        }

        .frame-type-news_newsliststicky h3 {
            line-height: 22px;
            font-size: 16px;
        }

        .news-list-item .col-md-9 {
            background-color: #f9f9f9;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 1.5rem;
        }
    </style>
@endpush
@section('content')
    <section class='intro mb-50'>

        <div class='content'>
            <h1 class="text-white fw-bold">Media center</h1>
        </div>
        <figure>
            <img src="/assets/img/banners/banner-03.jpeg" alt="A-Propos-Hero-Bg">
        </figure>
    </section>
    <section class="my-5">
        <div id="c101" class="frame rwcontainer frame-default frame-type-news_newsliststicky frame-layout-1">
            <div class="news">
                <div class="news-list-view asterdmnewslist my-8" id="news-container-101">
                    <div class="article asterarticle1 articletype-1 topnews">

                        <div class="row news-list-item mb-3">
                            <div class="col-md-3 newslistmedia">

                                <div class="news-img-wrap newshllitimg relative">
                                    <a title="#" href="#">
                                        <img loading="lazy" src="/assets/img/specialities/speciality-01.jpeg" width="810"
                                            height="773" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="col-md-9 articletype-1 newslistmetas djhfhd">
                                <a itemprop="url" title="#" href="#">
                                    <!-- category -->
                                    <time class="customtime text-black " itemprop="datePublished" datetime="2024-12-10">
                                        <span class="updatedon">Updated on</span>
                                        <span class="ox-regu">December 10, 2024</span>

                                    </time>

                                    <h3 class=" my-3 ">

                                        <span class="" itemprop="headline">Nurse Maria Victoria Juan from Philippines
                                            wins the prestigious Aster Guardians Global Nursing Award 2024</span>
                                    </h3>

                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="article asterarticle1 articletype-1 topnews">

                        <div class="row news-list-item mb-3">
                            <div class="col-md-3 newslistmedia">

                                <div class="news-img-wrap newshllitimg relative">
                                    <a title="#" href="#">


                                        <img loading="lazy" src="/assets/img/specialities/speciality-02.jpeg" width="800"
                                            height="800" alt="">

                                    </a>
                                </div>

                            </div>

                            <div class="col-md-9 articletype-1 newslistmetas djhfhd" itemscope="itemscope"
                                itemtype="http://schema.org/Article">
                                <a itemprop="url" title="Aster DM Gulf unit explores $250m Saudi expansion"
                                    href="/newsroom/aster-dm-gulf-unit-explores-250m-saudi-expansion">
                                    <!-- category -->


                                    <time class="customtime text-black " itemprop="datePublished" datetime="2024-12-10">
                                        <span class="updatedon">Updated on</span>
                                        <span class="ox-regu">December 10, 2024</span>

                                    </time>

                                    <h3 class=" my-3 ">

                                        <span class="" itemprop="headline">Aster DM Gulf unit explores $250m Saudi
                                            expansion</span>
                                    </h3>

                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="article asterarticle1 articletype-1 topnews">

                        <div class="row news-list-item mb-3">
                            <div class="col-md-3 newslistmedia">

                                <div class="news-img-wrap newshllitimg relative">
                                    <a title="#" href="#">
                                        <img loading="lazy" src="/assets/img/specialities/speciality-03.jpeg" width="2827"
                                            height="2262" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-9 articletype-1 newslistmetas djhfhd" itemscope="itemscope"
                                itemtype="http://schema.org/Article">
                                <a itemprop="url"
                                    title="Aster DM Healthcare Appoints Mohamed Alshamari as CEO of Aster Hospitals and Clinics in Saudi Arabia"
                                    href="/newsroom/aster-dm-healthcare-appoints-mohamed-alshamari-as-ceo-of-aster-hospitals-and-clinics-in-saudi-arabia">
                                    <!-- category -->

                                    <time class="customtime text-black " itemprop="datePublished" datetime="2024-09-14">
                                        <span class="updatedon">Updated on</span>
                                        <span class="ox-regu">September 14, 2024</span>

                                    </time>

                                    <h3 class=" my-3 ">

                                        <span class="" itemprop="headline">Aster DM Healthcare Appoints Mohamed
                                            Alshamari as CEO of Aster Hospitals and Clinics in Saudi Arabia</span>
                                    </h3>

                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                {{-- @foreach ($newsItems ?? [] as $news)
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-6">
                    <div class="news-img-wrap newshllitimg relative">
                        <a title="{{ $news->title }}" href="{{ $news->link }}">
                            <img loading="lazy" src="{{ $news->image }}" width="1500" height="844"
                                alt="{{ $news->title }}">
                        </a>
                        <span
                            class="hidden categorytag bg-[#E3D5CA] rounded-20 py-2 px-7 w-fit ox-regu ft-12 absolute max-md:bottom-4 md:top-4 left-4 label label-info">
                            {{ $news->category }}
                        </span>
                    </div>
                </div>
            @endforeach --}}
            </div>

    </section>
@endsection
