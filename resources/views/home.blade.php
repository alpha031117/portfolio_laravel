@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="container py-6">
    <div class="row flex-lg-row-reverse align-items-center g-5">
        <div class="col-10 mx-auto col-sm-8 col-lg-6">
            <img src="images/hero_image.gif" class="d-block mx-lg-auto img-fluid" alt="" loading="lazy">
        </div>
        <div class="col-lg-6">
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h2 class="fw-bold display-5">Hi There 👋</h2>
                    <h2 class="fw-bold display-5">I'm Alpha Chong</h2>
                </div>
            </div>

            <div class="lc-block mb-3">
                <div editable="rich">
                    <p class="lead animated-text">
                        A fullstack software engineer with a passion for web2/web3 development.
                    </p>
                </div>
            </div>
            <div class="lc-block d-grid d-md-flex justify-content-md-start">
                <a class="btn btn-primary px-4 me-md-2" style="cursor: none;" href="#">
                    <x-iconsax-bro-more-square class="text-current" style="width: 20px; height: 20px; margin-bottom: 3px;" />
                    &nbsp;&nbsp; Know more about me !
                </a>
            </div>
            <div class="lc-block d-grid d-md-flex justify-content-md-start mt-3 gap-3">
                <a href="#"><x-uiw-linkedin class="text-primary" style="width: 20px; height: 20px; margin-bottom: 3px" /></a>
                <x-uiw-github class="text-current" style="width: 20px; height: 20px; margin-bottom: 3px" />
                <x-uiw-twitter class="text-primary" style="width: 20px; height: 20px; margin-bottom: 3px" />
                <x-uiw-facebook class="text-primary" style="width: 20px; height: 20px; margin-bottom: 3px" />
            </div>
        </div>
    </div>
</div>
@endsection
