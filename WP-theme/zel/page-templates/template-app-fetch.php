<?php
/*
 * Template Name: app fetch info
 */
get_header(); ?>

<div class="hb-nav-test">
    <a href="#hb-login" data-to-screen="hb-login">Login &rarr;</a>
    <a href="#hb-loading" data-to-screen="hb-loading">Loading &rarr;</a>
    <a href="#hb-swiper" data-to-screen="hb-swiper">Tabs &rarr;</a>
</div>

<div id="hb-login" class="hb-login hb-screen-test active">
    <div class="hb-login__inner">
        <div class="hb-login__logo">
            <svg width="97" height="51" viewBox="0 0 97 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.188 25.188L12.188 35.5803L12.188 14.7957L30.188 25.188Z" fill="black"/>
                <path d="M41.5025 30.284H46.4305V33.188H37.7405V17.744H41.5025V30.284ZM53.8128 33.364C52.6102 33.364 51.5248 33.1073 50.5568 32.594C49.6035 32.0807 48.8482 31.3473 48.2908 30.394C47.7482 29.4407 47.4768 28.326 47.4768 27.05C47.4768 25.7887 47.7555 24.6813 48.3128 23.728C48.8702 22.76 49.6328 22.0193 50.6008 21.506C51.5688 20.9927 52.6542 20.736 53.8568 20.736C55.0595 20.736 56.1448 20.9927 57.1128 21.506C58.0808 22.0193 58.8435 22.76 59.4008 23.728C59.9582 24.6813 60.2368 25.7887 60.2368 27.05C60.2368 28.3113 59.9508 29.426 59.3788 30.394C58.8215 31.3473 58.0515 32.0807 57.0688 32.594C56.1008 33.1073 55.0155 33.364 53.8128 33.364ZM53.8128 30.108C54.5315 30.108 55.1402 29.844 55.6388 29.316C56.1522 28.788 56.4088 28.0327 56.4088 27.05C56.4088 26.0673 56.1595 25.312 55.6608 24.784C55.1768 24.256 54.5755 23.992 53.8568 23.992C53.1235 23.992 52.5148 24.256 52.0308 24.784C51.5468 25.2973 51.3048 26.0527 51.3048 27.05C51.3048 28.0327 51.5395 28.788 52.0088 29.316C52.4928 29.844 53.0942 30.108 53.8128 30.108ZM66.8967 20.736C67.762 20.736 68.5173 20.912 69.1627 21.264C69.8227 21.616 70.3287 22.078 70.6807 22.65V20.912H74.4427V33.166C74.4427 34.2953 74.2153 35.3147 73.7607 36.224C73.3207 37.148 72.6387 37.8813 71.7147 38.424C70.8053 38.9667 69.6687 39.238 68.3047 39.238C66.486 39.238 65.012 38.8053 63.8827 37.94C62.7533 37.0893 62.108 35.9307 61.9467 34.464H65.6647C65.782 34.9333 66.0607 35.3 66.5007 35.564C66.9407 35.8427 67.4833 35.982 68.1287 35.982C68.906 35.982 69.522 35.7547 69.9767 35.3C70.446 34.86 70.6807 34.1487 70.6807 33.166V31.428C70.314 32 69.808 32.4693 69.1627 32.836C68.5173 33.188 67.762 33.364 66.8967 33.364C65.8847 33.364 64.968 33.1073 64.1467 32.594C63.3253 32.066 62.6727 31.3253 62.1887 30.372C61.7193 29.404 61.4847 28.2893 61.4847 27.028C61.4847 25.7667 61.7193 24.6593 62.1887 23.706C62.6727 22.7527 63.3253 22.0193 64.1467 21.506C64.968 20.9927 65.8847 20.736 66.8967 20.736ZM70.6807 27.05C70.6807 26.1113 70.4167 25.3707 69.8887 24.828C69.3753 24.2853 68.7447 24.014 67.9967 24.014C67.2487 24.014 66.6107 24.2853 66.0827 24.828C65.5693 25.356 65.3127 26.0893 65.3127 27.028C65.3127 27.9667 65.5693 28.7147 66.0827 29.272C66.6107 29.8147 67.2487 30.086 67.9967 30.086C68.7447 30.086 69.3753 29.8147 69.8887 29.272C70.4167 28.7293 70.6807 27.9887 70.6807 27.05ZM82.7523 33.364C81.5496 33.364 80.4643 33.1073 79.4963 32.594C78.543 32.0807 77.7876 31.3473 77.2303 30.394C76.6876 29.4407 76.4163 28.326 76.4163 27.05C76.4163 25.7887 76.695 24.6813 77.2523 23.728C77.8096 22.76 78.5723 22.0193 79.5403 21.506C80.5083 20.9927 81.5936 20.736 82.7963 20.736C83.999 20.736 85.0843 20.9927 86.0523 21.506C87.0203 22.0193 87.783 22.76 88.3403 23.728C88.8976 24.6813 89.1763 25.7887 89.1763 27.05C89.1763 28.3113 88.8903 29.426 88.3183 30.394C87.761 31.3473 86.991 32.0807 86.0083 32.594C85.0403 33.1073 83.955 33.364 82.7523 33.364ZM82.7523 30.108C83.471 30.108 84.0796 29.844 84.5783 29.316C85.0916 28.788 85.3483 28.0327 85.3483 27.05C85.3483 26.0673 85.099 25.312 84.6003 24.784C84.1163 24.256 83.515 23.992 82.7963 23.992C82.063 23.992 81.4543 24.256 80.9703 24.784C80.4863 25.2973 80.2443 26.0527 80.2443 27.05C80.2443 28.0327 80.479 28.788 80.9483 29.316C81.4323 29.844 82.0336 30.108 82.7523 30.108Z"
                      fill="black"/>
            </svg>
        </div>
        <div class="hb-login__content">
            <h1 class="hb-login__heading">Free Social Media Video Audit</h1>
            <p class="hb-login__subheading">We'll analyze your bio, content, production quality, and more.</p>
            <div class="hb-login__form">
                <form class="hb-login-form">
                    <div class="hb-login-form__cell">
                        <div class="hb-login-form__input-wrapper">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10C20 15.523 15.523 20 10 20C4.47705 20 0 15.523 0 10C0 4.47705 4.47705 0 10 0C15.523 0 20 4.47705 20 10Z"
                                      fill="#696969"/>
                                <path d="M12.7134 4.75439H7.2871C5.88887 4.75439 4.75488 5.88838 4.75488 7.28661V12.7129C4.75488 14.1111 5.88887 15.2451 7.2871 15.2451H12.7134C14.1116 15.2451 15.2456 14.1111 15.2456 12.7129V7.28661C15.2456 5.88838 14.1116 4.75439 12.7134 4.75439ZM14.3417 12.5322C14.3417 13.5308 13.5313 14.3412 12.5327 14.3412H7.46829C6.4697 14.3412 5.65935 13.5308 5.65935 12.5322V7.4678C5.65935 6.46921 6.4697 5.65886 7.46829 5.65886H12.5327C13.5313 5.65886 14.3417 6.46921 14.3417 7.4678V12.5322Z"
                                      fill="white"/>
                                <path d="M10.0068 7.28662C8.50947 7.28662 7.29395 8.50214 7.29395 9.99953C7.29395 11.4969 8.50947 12.7124 10.0068 12.7124C11.5042 12.7124 12.7198 11.4969 12.7198 9.99953C12.7198 8.50214 11.5042 7.28662 10.0068 7.28662ZM10.0068 11.8085C9.01027 11.8085 8.19791 10.9961 8.19791 9.99953C8.19791 9.00295 9.01027 8.19059 10.0068 8.19059C11.0034 8.19059 11.8158 9.00295 11.8158 9.99953C11.8158 10.9961 11.0034 11.8085 10.0068 11.8085Z"
                                      fill="white"/>
                                <path d="M12.8995 7.64864C12.6005 7.64864 12.3569 7.40503 12.3569 7.10606C12.3569 6.80708 12.6005 6.56348 12.8995 6.56348C13.1985 6.56348 13.4421 6.80708 13.4421 7.10606C13.4421 7.40503 13.1985 7.64864 12.8995 7.64864Z"
                                      fill="white"/>
                            </svg>
                            <input type="text" class="hb-login-form__input" name="insta-login"
                                   placeholder="Your Instagram username">
                        </div>
                    </div>
                    <p class="hb-login-form__divider">OR</p>
                    <div class="hb-login-form__cell">
                        <div class="hb-login-form__input-wrapper">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10C20 15.523 15.5229 20 10 20C4.47705 20 0 15.523 0 10C0 4.47705 4.47705 0 10 0C15.5229 0 20 4.47705 20 10Z"
                                      fill="#696969"/>
                                <path d="M11.9823 12.5764V7.62169C11.9823 7.62169 12.541 8.55284 14.5603 8.60971C14.668 8.61273 14.7571 8.52415 14.7571 8.41644V7.01619C14.7571 6.912 14.6741 6.82946 14.5699 6.82342C13.0035 6.73484 12.2596 5.53341 12.1866 4.43164C12.1801 4.32946 12.0905 4.25195 11.9883 4.25195H10.3913C10.2851 4.25195 10.1985 4.33802 10.1985 4.44472V12.3212C10.1985 13.1769 9.5447 13.9213 8.69006 13.9615C7.71311 14.0078 6.91887 13.1693 7.03967 12.1783C7.12523 11.4781 7.68694 10.9049 8.38555 10.8077C8.52447 10.7886 8.65986 10.7871 8.79123 10.8017C8.9075 10.8148 9.00967 10.7282 9.00967 10.6114V9.20766C9.00967 9.108 8.93367 9.02143 8.83401 9.01539C8.63369 9.0023 8.42833 9.00683 8.21996 9.03049C6.67929 9.20514 5.43609 10.4519 5.26546 11.993C5.04048 14.026 6.62594 15.7468 8.61356 15.7468C10.4743 15.7468 11.9828 14.2384 11.9828 12.3776"
                                      fill="white"/>
                            </svg>
                            <input type="text" class="hb-login-form__input error" name="tiktok-login"
                                   placeholder="Your TikTok username"> <!-- 'error' css class-->
                        </div>
                    </div>

                    <button type="submit" class="hb-login-form__submit"><span>Start Audit</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="hb-loading" class="hb-loading hb-screen-test">
    <div class="hb-loading__inner">
        <div class="hb-loading__content">
            <div class="hb-loading__progress">
                <div class="hb-loading__progress-line"></div>
            </div>
            <h2 class="hb-loading__text">Analyzing your bio</h2>
        </div>
    </div>
</div>

<div id="hb-swiper" class="swiper hb-screen-test mySwiper1 hb-content">
    <header class="hb-content__header">
        <div class="hb-content__header-top">
            <div class="hb-content__header-logo">
                <svg width="97" height="51" viewBox="0 0 97 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.188 25.188L12.188 35.5803L12.188 14.7957L30.188 25.188Z" fill="black"/>
                    <path d="M41.5025 30.284H46.4305V33.188H37.7405V17.744H41.5025V30.284ZM53.8128 33.364C52.6102 33.364 51.5248 33.1073 50.5568 32.594C49.6035 32.0807 48.8482 31.3473 48.2908 30.394C47.7482 29.4407 47.4768 28.326 47.4768 27.05C47.4768 25.7887 47.7555 24.6813 48.3128 23.728C48.8702 22.76 49.6328 22.0193 50.6008 21.506C51.5688 20.9927 52.6542 20.736 53.8568 20.736C55.0595 20.736 56.1448 20.9927 57.1128 21.506C58.0808 22.0193 58.8435 22.76 59.4008 23.728C59.9582 24.6813 60.2368 25.7887 60.2368 27.05C60.2368 28.3113 59.9508 29.426 59.3788 30.394C58.8215 31.3473 58.0515 32.0807 57.0688 32.594C56.1008 33.1073 55.0155 33.364 53.8128 33.364ZM53.8128 30.108C54.5315 30.108 55.1402 29.844 55.6388 29.316C56.1522 28.788 56.4088 28.0327 56.4088 27.05C56.4088 26.0673 56.1595 25.312 55.6608 24.784C55.1768 24.256 54.5755 23.992 53.8568 23.992C53.1235 23.992 52.5148 24.256 52.0308 24.784C51.5468 25.2973 51.3048 26.0527 51.3048 27.05C51.3048 28.0327 51.5395 28.788 52.0088 29.316C52.4928 29.844 53.0942 30.108 53.8128 30.108ZM66.8967 20.736C67.762 20.736 68.5173 20.912 69.1627 21.264C69.8227 21.616 70.3287 22.078 70.6807 22.65V20.912H74.4427V33.166C74.4427 34.2953 74.2153 35.3147 73.7607 36.224C73.3207 37.148 72.6387 37.8813 71.7147 38.424C70.8053 38.9667 69.6687 39.238 68.3047 39.238C66.486 39.238 65.012 38.8053 63.8827 37.94C62.7533 37.0893 62.108 35.9307 61.9467 34.464H65.6647C65.782 34.9333 66.0607 35.3 66.5007 35.564C66.9407 35.8427 67.4833 35.982 68.1287 35.982C68.906 35.982 69.522 35.7547 69.9767 35.3C70.446 34.86 70.6807 34.1487 70.6807 33.166V31.428C70.314 32 69.808 32.4693 69.1627 32.836C68.5173 33.188 67.762 33.364 66.8967 33.364C65.8847 33.364 64.968 33.1073 64.1467 32.594C63.3253 32.066 62.6727 31.3253 62.1887 30.372C61.7193 29.404 61.4847 28.2893 61.4847 27.028C61.4847 25.7667 61.7193 24.6593 62.1887 23.706C62.6727 22.7527 63.3253 22.0193 64.1467 21.506C64.968 20.9927 65.8847 20.736 66.8967 20.736ZM70.6807 27.05C70.6807 26.1113 70.4167 25.3707 69.8887 24.828C69.3753 24.2853 68.7447 24.014 67.9967 24.014C67.2487 24.014 66.6107 24.2853 66.0827 24.828C65.5693 25.356 65.3127 26.0893 65.3127 27.028C65.3127 27.9667 65.5693 28.7147 66.0827 29.272C66.6107 29.8147 67.2487 30.086 67.9967 30.086C68.7447 30.086 69.3753 29.8147 69.8887 29.272C70.4167 28.7293 70.6807 27.9887 70.6807 27.05ZM82.7523 33.364C81.5496 33.364 80.4643 33.1073 79.4963 32.594C78.543 32.0807 77.7876 31.3473 77.2303 30.394C76.6876 29.4407 76.4163 28.326 76.4163 27.05C76.4163 25.7887 76.695 24.6813 77.2523 23.728C77.8096 22.76 78.5723 22.0193 79.5403 21.506C80.5083 20.9927 81.5936 20.736 82.7963 20.736C83.999 20.736 85.0843 20.9927 86.0523 21.506C87.0203 22.0193 87.783 22.76 88.3403 23.728C88.8976 24.6813 89.1763 25.7887 89.1763 27.05C89.1763 28.3113 88.8903 29.426 88.3183 30.394C87.761 31.3473 86.991 32.0807 86.0083 32.594C85.0403 33.1073 83.955 33.364 82.7523 33.364ZM82.7523 30.108C83.471 30.108 84.0796 29.844 84.5783 29.316C85.0916 28.788 85.3483 28.0327 85.3483 27.05C85.3483 26.0673 85.099 25.312 84.6003 24.784C84.1163 24.256 83.515 23.992 82.7963 23.992C82.063 23.992 81.4543 24.256 80.9703 24.784C80.4863 25.2973 80.2443 26.0527 80.2443 27.05C80.2443 28.0327 80.479 28.788 80.9483 29.316C81.4323 29.844 82.0336 30.108 82.7523 30.108Z"
                          fill="black"/>
                </svg>
            </div>
            <div class="swiper-pagination1 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" data-index="0">
                    <span class="num">1</span>
                    <span class="custom-pagination-item"> Basic information </span>
                </span>

                <span class="swiper-pagination-bullet" data-index="1">
                    <span class="num">2</span>
                    <span class="custom-pagination-item"> Summary  </span>
                </span>

                <span class="swiper-pagination-bullet" data-index="2">
                    <span class="num">3</span>
                    <span class="custom-pagination-item"> Bio analysis </span>
                </span>

                <span class="swiper-pagination-bullet" data-index="3">
                    <span class="num">4</span>
                    <span class="custom-pagination-item"> Consistency analysis </span>
                </span>

                <span class="swiper-pagination-bullet" data-index="4">
                    <span class="num">5</span>
                    <span class="custom-pagination-item"> Content analysis </span>
                </span>

                <span class="swiper-pagination-bullet" data-index="5">
                    <span class="num">6</span>
                    <span class="custom-pagination-item"> Overall production score </span>
                </span>
                <span class="swiper-pagination-bullet last-child" data-index="6">
                    <span class="num">7</span>
                    <span class="custom-pagination-item"> Content score </span>
                </span>
                <div class="gradient-overlay"></div>
            </div>
            <div class="hb-content__header-actions">
                <div class="swiper-button-next1">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.188232" width="20" height="20" rx="10" fill="#212121"/>
                        <path d="M8.5 14.1882L12.5 10.1882L8.5 6.18823" stroke="white" stroke-linecap="round"/>
                    </svg>
                </div>
                <a href="#!" class="hb-btn">Click Here</a>
            </div>
        </div>
    </header>

    <div class="swiper-wrapper">

        <div class="swiper-slide swiper-slider-1 swiper-slide-type1 active">
            <div class="swiper-slide-inner">
                <div class="swiper-slide-inner__content">
                    <h2 class="hb-heading-v1 hb-text-center">Basic information</h2>
                    <div class="swiper-slide-inner__holder">
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--1">
                            <div class="swiper-slide-inner__head">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 11.9221C15.1171 12.8857 12.5704 13.3794 10 13.3763C7.3475 13.3763 4.81667 12.8596 2.5 11.9221M13.3333 5.8763V4.20964C13.3333 3.76761 13.1577 3.34368 12.8452 3.03112C12.5326 2.71856 12.1087 2.54297 11.6667 2.54297H8.33333C7.89131 2.54297 7.46738 2.71856 7.15482 3.03112C6.84226 3.34368 6.66667 3.76761 6.66667 4.20964V5.8763M10 10.8763H10.0083M4.16667 17.543H15.8333C16.2754 17.543 16.6993 17.3674 17.0118 17.0548C17.3244 16.7423 17.5 16.3183 17.5 15.8763V7.54297C17.5 7.10094 17.3244 6.67702 17.0118 6.36446C16.6993 6.0519 16.2754 5.8763 15.8333 5.8763H4.16667C3.72464 5.8763 3.30072 6.0519 2.98816 6.36446C2.67559 6.67702 2.5 7.10094 2.5 7.54297V15.8763C2.5 16.3183 2.67559 16.7423 2.98816 17.0548C3.30072 17.3674 3.72464 17.543 4.16667 17.543Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Your Profession</span>
                            </div>
                            <div class="swiper-slide-inner__info">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <span>
                                    Mindset <br>
                                    Coach
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--2">
                            <div class="swiper-slide-inner__head">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.16679 3.42212C7.76302 3.579 6.43209 4.12905 5.32715 5.00898C4.22222 5.88891 3.38819 7.06295 2.92107 8.39597C2.45395 9.72899 2.37271 11.1668 2.68671 12.544C3.00071 13.9211 3.69718 15.1816 4.69597 16.1804C5.69476 17.1792 6.95527 17.8757 8.33242 18.1897C9.70958 18.5037 11.1474 18.4225 12.4804 17.9553C13.8135 17.4882 14.9875 16.6542 15.8674 15.5493C16.7474 14.4443 17.2974 13.1134 17.4543 11.7096H9.16679V3.42212Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.0733 8.37631H12.5V3.80298C13.5545 4.17709 14.5122 4.78176 15.3034 5.57293C16.0946 6.3641 16.6992 7.32183 17.0733 8.37631Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Your Niche</span>
                            </div>
                            <div class="swiper-slide-inner__info has-highlight swiper-slide-inner__item--2">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <span>Mindset</span>
                                <span>Breathwork</span>
                                <span>EFT tapping</span>
                            </div>
                        </div>
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--3">
                            <div class="swiper-slide-inner__head">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.6665 5.04289C4.6665 4.60086 4.8421 4.17694 5.15466 3.86438C5.46722 3.55182 5.89114 3.37622 6.33317 3.37622H14.6665C15.1085 3.37622 15.5325 3.55182 15.845 3.86438C16.1576 4.17694 16.3332 4.60086 16.3332 5.04289V18.3762L10.4998 15.4596L4.6665 18.3762V5.04289Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Your primary topic</span>
                            </div>
                            <div class="swiper-slide-inner__info">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <span>How to create your dream life and let go of anxiety</span>
                            </div>
                        </div>
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--4">
                            <div class="swiper-slide-inner__head">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.70758 3.31537C9.95758 2.54787 11.0434 2.54787 11.2926 3.31537L12.5584 7.21037C12.6129 7.37744 12.7188 7.52302 12.861 7.62629C13.0032 7.72956 13.1743 7.78524 13.3501 7.78537H17.4459C18.2534 7.78537 18.5884 8.8187 17.9359 9.2937L14.6226 11.7004C14.4803 11.8038 14.3743 11.9497 14.32 12.1171C14.2656 12.2844 14.2657 12.4647 14.3201 12.632L15.5851 16.527C15.8351 17.2954 14.9559 17.9337 14.3034 17.4587L10.9901 15.052C10.8477 14.9485 10.6761 14.8928 10.5001 14.8928C10.324 14.8928 10.1525 14.9485 10.0101 15.052L6.69675 17.4587C6.04425 17.9337 5.16508 17.2945 5.41508 16.527L6.68008 12.632C6.73448 12.4647 6.73451 12.2844 6.68017 12.1171C6.62583 11.9497 6.51991 11.8038 6.37758 11.7004L3.06425 9.2937C2.41091 8.8187 2.74758 7.78537 3.55425 7.78537H7.64925C7.82512 7.78542 7.9965 7.72982 8.13885 7.62654C8.2812 7.52325 8.38723 7.37758 8.44175 7.21037L9.70758 3.31537Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Your primary topic</span>
                            </div>
                            <div class="swiper-slide-inner__info">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <span>People looking to transform their life</span>
                            </div>
                        </div>
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--5">
                            <div class="swiper-slide-inner__head">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6668 6.70955L15.0002 7.54289M16.6668 6.70955L15.0002 5.87622M16.6668 6.70955V8.79289M11.6668 4.20955L10.0002 3.37622L8.3335 4.20955M3.3335 6.70955L5.00016 5.87622M3.3335 6.70955L5.00016 7.54289M3.3335 6.70955V8.79289M10.0002 18.3762L8.3335 17.5429M10.0002 18.3762L11.6668 17.5429M10.0002 18.3762V16.2929M5.00016 15.8762L3.3335 15.0429V12.9596M15.0002 15.8762L16.6668 15.0429V12.9596"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Followers</span>
                            </div>
                            <div class="swiper-slide-inner__info">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <strong class="hb-big-text">13,800</strong>
                            </div>
                        </div>
                        <div class="swiper-slide-inner__item swiper-slide-inner__item--6">
                            <div class="swiper-slide-inner__head">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.1665 17.5428H18.3332V15.8761C18.3331 15.3566 18.1712 14.8499 17.87 14.4267C17.5687 14.0034 17.143 13.6845 16.6521 13.5143C16.1612 13.3441 15.6295 13.331 15.1309 13.477C14.6323 13.6229 14.1915 13.9206 13.8698 14.3286M14.1665 17.5428H5.83317M14.1665 17.5428V15.8761C14.1665 15.3295 14.0615 14.807 13.8698 14.3286M13.8698 14.3286C13.5604 13.5553 13.0263 12.8924 12.3365 12.4254C11.6467 11.9585 10.8328 11.7089 9.99984 11.7089C9.16685 11.7089 8.35297 11.9585 7.66317 12.4254C6.97337 12.8924 6.4393 13.5553 6.12984 14.3286M5.83317 17.5428H1.6665V15.8761C1.66654 15.3566 1.82845 14.8499 2.12972 14.4267C2.43099 14.0034 2.85666 13.6845 3.34755 13.5143C3.83843 13.3441 4.37015 13.331 4.86879 13.477C5.36742 13.6229 5.80819 13.9206 6.12984 14.3286M5.83317 17.5428V15.8761C5.83317 15.3295 5.93817 14.807 6.12984 14.3286M12.4998 6.70947C12.4998 7.37251 12.2364 8.0084 11.7676 8.47724C11.2988 8.94608 10.6629 9.20947 9.99984 9.20947C9.3368 9.20947 8.70091 8.94608 8.23207 8.47724C7.76323 8.0084 7.49984 7.37251 7.49984 6.70947C7.49984 6.04643 7.76323 5.41055 8.23207 4.94171C8.70091 4.47286 9.3368 4.20947 9.99984 4.20947C10.6629 4.20947 11.2988 4.47286 11.7676 4.94171C12.2364 5.41055 12.4998 6.04643 12.4998 6.70947ZM17.4998 9.20947C17.4998 9.6515 17.3242 10.0754 17.0117 10.388C16.6991 10.7005 16.2752 10.8761 15.8332 10.8761C15.3911 10.8761 14.9672 10.7005 14.6547 10.388C14.3421 10.0754 14.1665 9.6515 14.1665 9.20947C14.1665 8.76745 14.3421 8.34352 14.6547 8.03096C14.9672 7.7184 15.3911 7.54281 15.8332 7.54281C16.2752 7.54281 16.6991 7.7184 17.0117 8.03096C17.3242 8.34352 17.4998 8.76745 17.4998 9.20947ZM5.83317 9.20947C5.83317 9.6515 5.65758 10.0754 5.34502 10.388C5.03245 10.7005 4.60853 10.8761 4.1665 10.8761C3.72448 10.8761 3.30055 10.7005 2.98799 10.388C2.67543 10.0754 2.49984 9.6515 2.49984 9.20947C2.49984 8.76745 2.67543 8.34352 2.98799 8.03096C3.30055 7.7184 3.72448 7.54281 4.1665 7.54281C4.60853 7.54281 5.03245 7.7184 5.34502 8.03096C5.65758 8.34352 5.83317 8.76745 5.83317 9.20947Z"
                                          stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Engagement rate</span>
                            </div>
                            <div class="swiper-slide-inner__info">
                                <div class="swiper-slide-inner__info-overlay"></div>
                                <strong class="hb-big-text">13%</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide swiper-slider-2 swiper-slide-type2">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type2__holder">
                        <div class="swiper-slide-type2__item swiper-slide-type2__item--img">
                            <h2 class="hb-heading-v1">Profile Summary</h2>
                            <svg class="hb-desktop-only" width="444" height="523" viewBox="0 0 444 523" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_dddd_304_771)">
                                    <circle cx="123.291" cy="123.291" r="123.291"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0 288)"
                                            fill="#E7E7E7"/>
                                </g>
                                <g filter="url(#filter1_dddd_304_771)">
                                    <circle cx="123.291" cy="123.291" r="123.291"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0 228)"
                                            fill="#E7E7E7"/>
                                </g>
                                <g filter="url(#filter2_dddd_304_771)">
                                    <circle cx="123.291" cy="123.291" r="123.291"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0 168)"
                                            fill="#E7E7E7"/>
                                </g>
                                <g filter="url(#filter3_dddd_304_771)">
                                    <circle cx="123.291" cy="123.291" r="123.291"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0 108.315)"
                                            fill="#E7E7E7"/>
                                </g>
                                <defs>
                                    <filter id="filter0_dddd_304_771" x="19.9351" y="203.675" width="403.535"
                                            height="318.649" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="7"/>
                                        <feGaussianBlur stdDeviation="7.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="28"/>
                                        <feGaussianBlur stdDeviation="14"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_771"
                                                 result="effect2_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="63"/>
                                        <feGaussianBlur stdDeviation="19"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_771"
                                                 result="effect3_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="113"/>
                                        <feGaussianBlur stdDeviation="22.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_771"
                                                 result="effect4_dropShadow_304_771"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_771"
                                                 result="shape"/>
                                    </filter>
                                    <filter id="filter1_dddd_304_771" x="19.9351" y="143.675" width="403.535"
                                            height="318.649" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="7"/>
                                        <feGaussianBlur stdDeviation="7.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="28"/>
                                        <feGaussianBlur stdDeviation="14"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_771"
                                                 result="effect2_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="63"/>
                                        <feGaussianBlur stdDeviation="19"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_771"
                                                 result="effect3_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="113"/>
                                        <feGaussianBlur stdDeviation="22.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_771"
                                                 result="effect4_dropShadow_304_771"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_771"
                                                 result="shape"/>
                                    </filter>
                                    <filter id="filter2_dddd_304_771" x="19.9351" y="83.6753" width="403.535"
                                            height="318.649" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="7"/>
                                        <feGaussianBlur stdDeviation="7.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="28"/>
                                        <feGaussianBlur stdDeviation="14"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_771"
                                                 result="effect2_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="63"/>
                                        <feGaussianBlur stdDeviation="19"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_771"
                                                 result="effect3_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="113"/>
                                        <feGaussianBlur stdDeviation="22.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_771"
                                                 result="effect4_dropShadow_304_771"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_771"
                                                 result="shape"/>
                                    </filter>
                                    <filter id="filter3_dddd_304_771" x="19.9351" y="23.9907" width="403.535"
                                            height="318.649" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="7"/>
                                        <feGaussianBlur stdDeviation="7.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="28"/>
                                        <feGaussianBlur stdDeviation="14"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_771"
                                                 result="effect2_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="63"/>
                                        <feGaussianBlur stdDeviation="19"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_771"
                                                 result="effect3_dropShadow_304_771"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="113"/>
                                        <feGaussianBlur stdDeviation="22.5"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_771"
                                                 result="effect4_dropShadow_304_771"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_771"
                                                 result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                            <svg class="hb-mobile-only" width="240" height="249" viewBox="0 0 240 249" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_dddd_304_1510)">
                                    <circle cx="66.2275" cy="66.2275" r="66.2275"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0.909668 123.019)"
                                            fill="#E7E7E7"/>
                                </g>
                                <g filter="url(#filter1_dddd_304_1510)">
                                    <circle cx="66.2275" cy="66.2275" r="66.2275"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0.909668 90.8577)"
                                            fill="#E7E7E7"/>
                                </g>
                                <g filter="url(#filter2_dddd_304_1510)">
                                    <circle cx="66.2275" cy="66.2275" r="66.2275"
                                            transform="matrix(0.899101 -0.437741 0.899101 0.437741 0.909668 58.6963)"
                                            fill="#E7E7E7"/>
                                </g>
                                <defs>
                                    <filter id="filter0_dddd_304_1510" x="11.6182" y="77.723" width="216.764"
                                            height="171.167" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="3.76014"/>
                                        <feGaussianBlur stdDeviation="4.02872"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="15.0406"/>
                                        <feGaussianBlur stdDeviation="7.52028"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_1510"
                                                 result="effect2_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="33.8413"/>
                                        <feGaussianBlur stdDeviation="10.2061"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_1510"
                                                 result="effect3_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="60.6994"/>
                                        <feGaussianBlur stdDeviation="12.0862"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_1510"
                                                 result="effect4_dropShadow_304_1510"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_1510"
                                                 result="shape"/>
                                    </filter>
                                    <filter id="filter1_dddd_304_1510" x="11.6182" y="45.5616" width="216.764"
                                            height="171.167" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="3.76014"/>
                                        <feGaussianBlur stdDeviation="4.02872"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="15.0406"/>
                                        <feGaussianBlur stdDeviation="7.52028"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_1510"
                                                 result="effect2_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="33.8413"/>
                                        <feGaussianBlur stdDeviation="10.2061"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_1510"
                                                 result="effect3_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="60.6994"/>
                                        <feGaussianBlur stdDeviation="12.0862"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_1510"
                                                 result="effect4_dropShadow_304_1510"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_1510"
                                                 result="shape"/>
                                    </filter>
                                    <filter id="filter2_dddd_304_1510" x="11.6182" y="13.4002" width="216.764"
                                            height="171.167" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="3.76014"/>
                                        <feGaussianBlur stdDeviation="4.02872"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                 result="effect1_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="15.0406"/>
                                        <feGaussianBlur stdDeviation="7.52028"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/>
                                        <feBlend mode="normal" in2="effect1_dropShadow_304_1510"
                                                 result="effect2_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="33.8413"/>
                                        <feGaussianBlur stdDeviation="10.2061"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                        <feBlend mode="normal" in2="effect2_dropShadow_304_1510"
                                                 result="effect3_dropShadow_304_1510"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                       result="hardAlpha"/>
                                        <feOffset dy="60.6994"/>
                                        <feGaussianBlur stdDeviation="12.0862"/>
                                        <feColorMatrix type="matrix"
                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.01 0"/>
                                        <feBlend mode="normal" in2="effect3_dropShadow_304_1510"
                                                 result="effect4_dropShadow_304_1510"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect4_dropShadow_304_1510"
                                                 result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="swiper-slide-type2__item swiper-slide-type2__item--text">
                            <h2 class="hb-heading-v1">Profile Summary</h2>
                            <ul>
                                <li>Your audience loves the full moon posts and your manifestation practice. Keep those
                                    coming.
                                </li>
                                <li>Hooks need be stronger to pull the audience in and cut straight to the value e.g. Do
                                    you
                                    even wonder why it’s hard to make changes to your life? Don’t feel bad you are not
                                    alone.
                                </li>
                                <li>Keep on giving practical tips to your audience, it gives them immediate value and
                                    will
                                    keep them engaged.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide swiper-slider-3 swiper-slide-type3">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type3__holder">
                        <div class="swiper-slide-type3__item swiper-slide-type3__item--text">
                            <h2 class="hb-heading-v1">Bio Score</h2>
                            <div class="hb-score">6 \ 10</div>
                            <ul class="hb-list">
                                <li>Proof to how you help your clients is missing</li>
                                <li>Not clear what you offer immediately</li>
                                <li>Link your freebie in the bio</li>
                            </ul>
                        </div>
                        <div class="swiper-slide-type3__item swiper-slide-type3__item--img">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/circle-desktop.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-mobile.png" alt="service" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide swiper-slider-4 swiper-slide-type4">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type4__holder">
                        <div class="swiper-slide-type4__item swiper-slide-type4__item--text">
                            <h2 class="hb-heading-v1">Consistency score</h2>
                            <div class="hb-score mb24">8 \ 10</div>
                            <ul class="hb-list">
                                <li>You post between 1-3 posts a week, mostly talking videos. Try to spread them out
                                    throughout the week
                                </li>
                                <li>Good job on starting to incorporate b-roll videos</li>
                                <li>You can definitely post more! People want to hear you.</li>
                            </ul>
                        </div>
                        <div class="swiper-slide-type4__item swiper-slide-type4__item--img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/circles.png" alt="Consistency score" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide swiper-slider-5 swiper-slide-type5">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type5__holder">
                        <div class="swiper-slide-type5__item swiper-slide-type5__item--text">
                            <h2 class="hb-heading-v1">Content score</h2>
                            <div class="hb-score mb24">8 \ 10</div>
                            <ul class="hb-list">
                                <li>Hooks need to be stronger</li>
                                <li>Practice videos are popular! Do more of those</li>
                                <li>Try to experiment with other types of videos. Your audience wants to get to know
                                    you.
                                    Share with them your personal story, why you chose this niche, etc.
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide-type5__item swiper-slide-type5__item--img">
                            <picture>
                                <source media="(min-width:1221px)" srcset="<?php echo get_template_directory_uri() ?>/img/paper-desktop.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/paper-mobile.png" alt="Content score" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide swiper-slider-6 swiper-slide-type6">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type6__holder">
                        <div class="swiper-slide-type6__item swiper-slide-type6__item--text">
                            <h2 class="hb-heading-v1">Production score</h2>
                            <div class="hb-score mb24">9 \ 10</div>
                            <ul class="hb-list">
                                <li>Great lighting in your videos</li>
                                <li>Use of title and subtitles</li>
                                <li>Titles should be more intriguing</li>
                            </ul>
                        </div>
                        <div class="swiper-slide-type6__item swiper-slide-type6__item--img">
                            <svg width="332" height="332" viewBox="0 0 332 332" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M196.838 24.6189C188.972 -7.6731 143.018 -7.6731 135.152 24.6189C133.977 29.4713 131.674 33.9779 128.429 37.7719C125.184 41.5659 121.089 44.5402 116.477 46.4526C111.865 48.3651 106.867 49.1617 101.89 48.7777C96.912 48.3936 92.0953 46.8397 87.8315 44.2425C59.4311 26.9373 26.9321 59.4363 44.2373 87.8367C55.4153 106.177 45.5 130.106 24.6344 135.178C-7.67827 143.023 -7.67827 188.998 24.6344 196.822C29.4881 197.998 33.9955 200.304 37.7895 203.551C41.5835 206.799 44.5569 210.896 46.4675 215.511C48.3782 220.125 49.172 225.125 48.7845 230.104C48.3969 235.083 46.8389 239.9 44.2373 244.163C26.9321 272.563 59.4311 305.062 87.8315 287.757C92.0945 285.156 96.9116 283.598 101.891 283.21C106.87 282.823 111.87 283.616 116.484 285.527C121.098 287.438 125.196 290.411 128.443 294.205C131.691 297.999 133.997 302.507 135.172 307.36C143.018 339.673 188.992 339.673 196.817 307.36C197.997 302.509 200.305 298.005 203.553 294.213C206.801 290.422 210.898 287.45 215.511 285.54C220.124 283.63 225.122 282.836 230.1 283.221C235.077 283.606 239.894 285.16 244.158 287.757C272.558 305.062 305.057 272.563 287.752 244.163C285.155 239.899 283.601 235.083 283.216 230.105C282.83 225.127 283.625 220.129 285.535 215.516C287.445 210.903 290.417 206.806 294.208 203.558C298 200.31 302.504 198.002 307.355 196.822C339.668 188.977 339.668 143.002 307.355 135.178C302.501 134.002 297.994 131.696 294.2 128.449C290.406 125.201 287.433 121.103 285.522 116.489C283.611 111.875 282.817 106.875 283.205 101.896C283.593 96.9168 285.151 92.0996 287.752 87.8367C305.057 59.4363 272.558 26.9373 244.158 44.2425C239.895 46.8441 235.078 48.4021 230.099 48.7897C225.12 49.1772 220.12 48.3833 215.505 46.4727C210.891 44.5621 206.794 41.5887 203.546 37.7947C200.298 34.0007 197.993 29.4933 196.817 24.6396L196.838 24.6189ZM165.995 228.1C182.465 228.1 198.26 221.557 209.906 209.911C221.552 198.265 228.095 182.47 228.095 166C228.095 149.53 221.552 133.735 209.906 122.089C198.26 110.443 182.465 103.9 165.995 103.9C149.525 103.9 133.729 110.443 122.083 122.089C110.437 133.735 103.895 149.53 103.895 166C103.895 182.47 110.437 198.265 122.083 209.911C133.729 221.557 149.525 228.1 165.995 228.1Z"
                                      fill="#D9D9D9"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide swiper-slider-7 swiper-slide-type7 ">
            <div class="swiper-slide-inner">
                <div class="hb-container3">
                    <div class="swiper-slide-type7__holder">
                        <div class="swiper-slide-type7__item swiper-slide-type7__item--img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/img-card.png" alt="Video Deep Dive" loading="lazy">
                        </div>
                        <div class="swiper-slide-type7__item swiper-slide-type7__item--text">
                            <h2 class="hb-heading-v1">Video Deep Dive</h2>
                            <ul class="hb-list-total">
                                <li>
                                    <strong>Hook strength:</strong>
                                    <span>Weak. Make it more controversial or something that the audience can relate to.</span>
                                </li>
                                <li>
                                    <strong>Call to Action:</strong>
                                    <span>Not strong enough. This is a subject that hits close to everybody - what do you want your viewers to do with it? How will you help them?</span>
                                </li>
                                <li class="total">
                                    <span>Video content score: </span>
                                    <strong>6.5</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="hb-content__footer">
        <div class="hb-container1">
            <p class="hb-content__footer-text">Ready to level up your video strategy?</p>
            <div class="hb-content__footer-form">
                <form>
                    <div class="hb-content__footer-input">
                        <input type="email" placeholder="Insert your email for early access: ">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
</div>

<?php get_footer(); ?>
