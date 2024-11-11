@extends('layouts.master')
@section('title', 'Contact Us')
@section('content')

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="container text-center">
                            <img src="images/alpha.jpg" alt="Avatar" class="rounded-circle" width="110" height="110">
                        </div>

                        <h5 class="card-title text-center mt-4">
                            &nbsp;&nbsp; Drop Me
                            <x-monoicon-message class="text-current"
                                style="width: 24px; height: 24px; margin-bottom: 2px;" />
                            Here
                        </h5>
                        {{-- Form Section --}}
                        <form>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="nameInput"
                                    placeholder="I wish to know your name 😆">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="📫">
                                <div id="emailHelp" class="form-text">Your email will not shared with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="messageInput" class="form-label">Message</label>
                                <textarea class="form-control" id="messageInput" rows="3" placeholder="📝"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <x-monoicon-send class="text-current"
                                    style="width: 16px; height: 16px; margin-bottom: 5px;" />
                                Submit
                            </button>
                        </form>
                        {{-- Extra --}}
                        <div class=" mt-5 text-center">
                            <p class="card-text">Feel free to contact me via the following platforms:</p>
                            <div class="mt-3 gap-3">
                                <a href="https://www.linkedin.com/in/alpha-chong-862747247/"
                                    class="text-decoration-none"><x-uiw-linkedin class="text-primary"
                                        style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                                <a href="https://github.com/alpha031117" class="text-decoration-none"><x-uiw-github
                                        class="text-current" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                                <a href="https://twitter.com/alpha_chon21129" class="text-decoration-none"><x-uiw-twitter
                                        class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                                <a href="https://www.facebook.com/chong.shusiang.5/"
                                    class="text-decoration-none"><x-uiw-facebook class="text-primary"
                                        style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="container text-center">
                            <img src="images/alan.jpg" alt="Avatar" class="rounded-circle" width="110" height="110">
                        </div>

                        <h5 class="card-title text-center mt-4">
                            &nbsp;&nbsp; Drop Me
                            <x-monoicon-message class="text-current"
                                style="width: 24px; height: 24px; margin-bottom: 2px;" />
                            Here
                        </h5>
                        {{-- Form Section --}}
                        <form>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="nameInput"
                                    placeholder="I wish to know your name 😆">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="📫">
                                <div id="emailHelp" class="form-text">Your email will not shared with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="messageInput" class="form-label">Message</label>
                                <textarea class="form-control" id="messageInput" rows="3" placeholder="📝"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <x-monoicon-send class="text-current"
                                    style="width: 16px; height: 16px; margin-bottom: 5px;" />
                                Submit
                            </button>
                        </form>
                        {{-- Extra --}}
                        <div class=" mt-5 text-center">
                            <p class="card-text">Feel free to contact me via the following platforms:</p>
                            <div class="mt-3 gap-3">
                                <a href="https://www.linkedin.com/in/alan-koo-0830a3287/"
                                    class="text-decoration-none"><x-uiw-linkedin class="text-primary"
                                        style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                                <a href="https://github.com/AlanKoo0515" class="text-decoration-none"><x-uiw-github
                                        class="text-current" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                                <a href="https://www.instagram.com/alankoo__/"
                                    class="text-decoration-none"><x-iconsax-lin-instagram class="text-primary"
                                        style="width: 27px; height: 27px; margin-bottom: 3px" /></a>
                                <a href="https://www.facebook.com/koomingzhe/"
                                    class="text-decoration-none"><x-uiw-facebook class="text-primary"
                                        style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
