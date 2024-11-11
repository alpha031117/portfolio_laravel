@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    {{-- Floating Navigation Buttons --}}
    <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 1000;">
        <div class="d-flex flex-column gap-2">
            <a href="#alpha-section" id="to-alpha" class="btn btn-primary rounded-circle p-2 shadow-lg"
                style="width: 45px; height: 45px; display: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6" />
                </svg>
            </a>
            <a href="#alan-section" id="to-alan" class="btn btn-primary rounded-circle p-2 shadow-lg"
                style="width: 45px; height: 45px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>
        </div>
    </div>

    <div class="container py-6">
        {{-- Alpha Chong's Section --}}
        <div id="alpha-section" class="row align-items-center g-5 mb-5 min-vh-100">
            <div class="col-lg-6 order-lg-2">
                <img src="images/hero_image.gif" class="d-block img-fluid rounded" alt="Alpha Chong's Image" loading="lazy">
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h2 class="fw-bold display-5">Hi There 👋</h2>
                        <h2 class="fw-bold display-5">I'm Alpha Chong</h2>
                    </div>
                </div>

                <div class="lc-block mb-3">
                    <div editable="rich">
                        <p class="lead animated-text text-muted">
                            A fullstack software engineer with a passion for web2/web3 development.
                        </p>
                    </div>
                </div>
                <div class="lc-block d-grid d-md-flex justify-content-md-start">
                    <a class="btn btn-primary px-4 me-md-2" style="cursor: none;" href="/about">
                        <x-iconsax-bro-more-square class="text-current"
                            style="width: 20px; height: 20px; margin-bottom: 3px;" />
                        &nbsp;&nbsp; Know more about me!
                    </a>
                </div>
                <div class="lc-block d-grid d-md-flex justify-content-md-start mt-3 gap-3">
                    <a href="https://www.linkedin.com/in/alpha-chong-862747247/"
                        class="text-decoration-none"><x-uiw-linkedin class="text-primary"
                            style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    <a href="https://github.com/alpha031117" class="text-decoration-none"><x-uiw-github class="text-current"
                            style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    <a href="https://twitter.com/alpha_chon21129" class="text-decoration-none"><x-uiw-twitter
                            class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    <a href="https://www.facebook.com/chong.shusiang.5/" class="text-decoration-none"><x-uiw-facebook
                            class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                </div>
            </div>
        </div>

        {{-- Alan Koo's Section --}}
        <div id="alan-section" class="row align-items-center g-5 min-vh-100">
            <div class="col-lg-6">
                <img src="images/alan_hero_image.gif" class="d-block img-fluid rounded" alt="Alan Koo's Image"
                    loading="lazy">
            </div>
            <div class="col-lg-6">
                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h2 class="fw-bold display-5">Hi There 👋</h2>
                        <h2 class="fw-bold display-5">I'm Alan Koo</h2>
                    </div>
                </div>

                <div class="lc-block mb-3">
                    <div editable="rich">
                        <p class="lead animated-text text-muted">
                            I'm a fullstack developer with a keen eye for design.
                        </p>
                    </div>
                </div>
                <div class="lc-block d-grid d-md-flex justify-content-md-start">
                    <a class="btn btn-primary px-4 me-md-2" style="cursor: none;" href="/about">
                        <x-iconsax-bro-more-square class="text-current"
                            style="width: 20px; height: 20px; margin-bottom: 3px;" />
                        &nbsp;&nbsp; Know more about me!
                    </a>
                </div>
                <div class="lc-block d-grid d-md-flex justify-content-md-start mt-3 gap-3">
                    <a href="https://www.linkedin.com/in/alan-koo-0830a3287/" class="text-decoration-none"><x-uiw-linkedin
                            class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    <a href="https://github.com/AlanKoo0515" class="text-decoration-none"><x-uiw-github class="text-current"
                            style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    <a href="https://www.instagram.com/alankoo__/" class="text-decoration-none"><x-iconsax-lin-instagram
                            class="text-primary" style="width: 27px; height: 27px; margin-bottom: 3px" /></a>
                    <a href="https://www.facebook.com/koomingzhe/" class="text-decoration-none"><x-uiw-facebook
                            class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                </div>
            </div>
        </div>
    </div>
@endsection
