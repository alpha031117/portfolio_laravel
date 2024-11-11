@extends('layouts.app')
@section('title', 'About Us')
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
        {{-- Alan Section --}}
        <div class="">
            {{-- Ming Zhe's Section --}}
            <div id="alpha-section" class="row align-items-center g-5 mb-5 min-vh-100">
                <div class="col-lg-6 order-lg-2">
                    <img src="images/alan.jpg" class="d-block img-fluid rounded shadow-lg mb-5 bg-body" style="width: 90%;"
                        alt="Alpha Chong's Image" loading="lazy">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Hi, I'm Koo Ming Zhe</h2>
                        </div>
                    </div>

                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <p class="">
                                Full Stack Developer | Penultimate Year Software Engineering Student @ University
                                Malaysia Pahang Al-sultan Abdullah
                            </p>
                        </div>
                    </div>
                    <div class="lc-block d-grid d-md-flex justify-content-md-start">
                        <a class="btn btn-primary px-4 me-md-2" style="cursor: none;" href="#">
                            &nbsp;&nbsp; Contact Me
                            <x-iconsax-bro-send-1 class="text-current"
                                style="width: 20px; height: 20px; margin-bottom: 3px; margin-left: 10px;" />
                        </a>
                    </div>
                    <div class="lc-block d-grid d-md-flex justify-content-md-start mt-3 gap-3">
                        <a href="https://www.linkedin.com/in/alan-koo-0830a3287/"
                            class="text-decoration-none"><x-uiw-linkedin class="text-primary"
                                style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                        <a href="https://github.com/AlanKoo0515" class="text-decoration-none"><x-uiw-github
                                class="text-current" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                        <a href="https://www.instagram.com/alankoo__/" class="text-decoration-none"><x-iconsax-lin-instagram
                                class="text-primary" style="width: 27px; height: 27px; margin-bottom: 3px" /></a>
                        <a href="https://www.facebook.com/koomingzhe/" class="text-decoration-none"><x-uiw-facebook
                                class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    </div>
                </div>
            </div>


            {{-- Ming Zhe's About Me Section --}}
            <div id="alpha-section" class="row align-items-center g-5 mb-5 min-vh-100">
                <!-- Centered Header -->
                <div class="col-12 text-center">
                    <h2 class="fw-bold display-4">About Me</h2>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <img src="images/alan_2.jpg" class="d-block img-fluid rounded shadow-lg mb-5 bg-body mt-5"
                        style="width: 100%;" alt="Alpha Chong's Image" loading="lazy">
                </div>

                <div class="col-lg-5 order-lg-2">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Koo Ming Zhe</h2>
                        </div>
                    </div>

                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <p class="">
                                "Passionate Software Engineering student with many years of hands-on experience in full
                                stack development. Skilled in building robust and efficient web applications, I am dedicated
                                to creating seamless user experiences and optimizing backend processes. I bring a balance of
                                technical expertise and a continuous drive for innovation, ready to contribute to impactful
                                projects and solve complex challenges."
                            </p>
                        </div>
                    </div>

                    <div class="lc-block d-flex align-items-center mb-3">
                        <x-ionicon-school-outline style="width: 30px; margin-right: 10px;" />
                        <h6 class="mb-0">University of Malaysia Pahang Al-Sultan Abdullah</h6>
                    </div>

                    <div class="lc-block d-flex align-items-center">
                        <x-ionicon-book-outline style="width: 30px; margin-right: 10px;" />
                        <h6 class="mb-0">Degree in Software Engineering</h6>
                    </div>

                    <div class="counter-section counter-wrapper d-flex justify-content-center gap-5 mt-5">
                        <div class="counter text-center">
                            <h1 class="count-wrapper fw-bold d-flex align-items-center justify-content-center">
                                <span class="count" data-target="3">0</span><span class="plus-sign">+</span>
                            </h1>
                            <p class="fw-bold mt-2">Years Experience</p>
                        </div>
                        <div class="counter text-center">
                            <h1 class="count-wrapper fw-bold d-flex align-items-center justify-content-center">
                                <span class="count" data-target="20">0</span><span class="plus-sign">+</span>
                            </h1>
                            <p class="fw-bold mt-2">Completed Projects</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Ming Zhe's Skills Section -->
            <div id="alpha-section" class="row align-items-start g-5 mb-5 min-vh-100">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold display-4">Skills</h2>
                </div>

                <div class="skill-section col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <x-ionicon-code-slash-outline
                            style="width: 50px; height: 50px; margin-right: 15px; color: #000;" />
                        <h4 class="fw-bold mb-0">Frontend Developer Skills</h4>
                    </div>

                    <!-- Skill 1: React -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-react style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">React</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar react-animation progress-bar-striped" style="width: 50%">50%</div>
                        </div>
                    </div>

                    <!-- Skill 2: Bootstrap -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-bi-bootstrap style="width: 30px;height: 30px; margin-right: 10px;" />
                            <p class="mb-0">Bootstrap</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar bootstrap-animation progress-bar-striped" style="width: 40%">40%
                            </div>
                        </div>
                    </div>

                    <!-- Skill 3: Flutter -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-devicon-flutter style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Flutter</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar flutter-animation progress-bar-striped" style="width: 70%">70%</div>
                        </div>
                    </div>

                    <!-- Skill 4: HTML -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-html5 style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">HTML</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar html-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>

                    <!-- Skill 5: CSS -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-css3-alt style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">CSS</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar css-animation progress-bar-striped" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Section -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <x-monoicon-database style="width: 50px; height: 50px; margin-right: 15px; color: #000;" />
                        <h4 class="fw-bold mb-0">Backend Developer Skills</h4>
                    </div>

                    <!-- Skill 1: Laravel -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-laravel style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Laravel</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar laravel-animation progress-bar-striped" style="width: 30%">30%</div>
                        </div>
                    </div>

                    <!-- Skill 2: MySQL -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-devicon-mysql style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">MySQL</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar mysql-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>

                    <!-- Skill 3: Python -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-python style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Python</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar python-animation progress-bar-striped" style="width: 20%">20%</div>
                        </div>
                    </div>

                    <!-- Skill 4: Java -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-java style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Java</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar java-animation progress-bar-striped" style="width: 60%">60%</div>
                        </div>
                    </div>

                    <!-- Skill 5: JavaScript -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-javascript style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">JavaScript</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar javascript-animation progress-bar-striped" style="width: 80%">80%
                            </div>
                        </div>
                    </div>

                    <!-- Skill 6: PHP -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-php style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">PHP</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar php-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Ming Zhe's Education Qualification Section --}}
            <div id="alpha-section" class="row align-items-start g-5 mb-5 min-vh-100">
                <!-- Centered Header -->
                <div class="col-12 text-center">
                    <h2 class="fw-bold display-4">Education Qualification</h2>
                </div>

                <!-- You can save this as resources/views/education-timeline.blade.php -->
                <div class="container py-5">
                    <div class="main-timeline">

                        <!-- Third Qualification -->
                        <div class="timeline left animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">High School Certificate</h3>
                                    <p class="mb-2"><strong>Sekolah Menengah Jenis Kebangsaan Sin Min</strong></p>
                                    <p class="text-muted mb-2">2016 - 2020</p>
                                    <p class="mb-0">SPM Result: 8As</p>
                                    <p class="mt-2">
                                        Science Stream<br>
                                        Activities: Wushu Club & Badminton Club MT
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Second Qualification -->
                        <div class="timeline right animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">Diploma in Computer Science</h3>
                                    <p class="mb-2"><strong>University of Malaysia Pahang Al-Sultan Abdullah</strong></p>
                                    <p class="text-muted mb-2">2021 - 2023</p>
                                    <p class="mb-0">CGPA: 3.8</p>
                                    <p class="mt-2">
                                        Diploma in Computer Science<br>
                                        Key Achievements: First Class Awards
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- First Qualification -->
                        <div class="timeline left animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">Bachelor of Software Engineering</h3>
                                    <p class="mb-2"><strong>University of Malaysia Pahang Al-Sultan Abdullah</strong></p>
                                    <p class="text-muted mb-2">2023 - Present</p>
                                    <p class="mb-0">CGPA: 3.75</p>
                                    <p class="mt-2">
                                        Major in Software Engineering<br>
                                        Relevant Coursework: Web & Mobile Development, Software Engineering
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Alpha's Section --}}
        <div>
            <div id="alpha-section" class="row align-items-center g-5 mb-5 min-vh-100">
                <div class="col-lg-6 order-lg-2">
                    <img src="images/alpha.jpg" class="d-block img-fluid rounded shadow-lg mb-5 bg-body"
                        style="width: 90%;" alt="Alpha Chong's Image" loading="lazy">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Hi, I'm Alpha Chong</h2>
                        </div>
                    </div>

                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <p class="">
                                Full Stack Developer | Penultimate Year Software Engineering Student @ University
                                Malaysia Pahang Al-sultan Abdullah
                            </p>
                        </div>
                    </div>
                    <div class="lc-block d-grid d-md-flex justify-content-md-start">
                        <a class="btn btn-primary px-4 me-md-2" style="cursor: none;" href="#">
                            &nbsp;&nbsp; Contact Me
                            <x-iconsax-bro-send-1 class="text-current"
                                style="width: 20px; height: 20px; margin-bottom: 3px; margin-left: 10px;" />
                        </a>
                    </div>
                    <div class="lc-block d-grid d-md-flex justify-content-md-start mt-3 gap-3">
                        <a href="https://www.linkedin.com/in/alpha-chong-862747247/"
                            class="text-decoration-none"><x-uiw-linkedin class="text-primary"
                                style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                        <a href="https://github.com/alpha031117" class="text-decoration-none"><x-uiw-github
                                class="text-current" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                        <a href="https://twitter.com/alpha_chon21129" class="text-decoration-none"><x-uiw-twitter
                                class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                        <a href="https://www.facebook.com/chong.shusiang.5/" class="text-decoration-none"><x-uiw-facebook
                                class="text-primary" style="width: 24px; height: 24px; margin-bottom: 3px" /></a>
                    </div>
                </div>
            </div>


            {{-- Alpha's About Me Section --}}
            <div id="alpha-section" class="row align-items-center g-5 mb-5 min-vh-100">
                <!-- Centered Header -->
                <div class="col-12 text-center">
                    <h2 class="fw-bold display-4">About Me</h2>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <img src="images/alpha.jpg" class="d-block img-fluid rounded shadow-lg mb-5 bg-body mt-5"
                        style="width: 100%;" alt="Alpha Chong's Image" loading="lazy">
                </div>

                <div class="col-lg-5 order-lg-2">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Alpha Chong</h2>
                        </div>
                    </div>

                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <p class="">
                                I'm a passionate, self-proclaimed designer who specializes in full stack development
                                . I am very enthusiastic about bringing the technical and visual
                                aspects of digital products to life. User experience, pixel perfect design, and writing
                                clear, readable, highly performant code matters to me.
                            </p>
                        </div>
                    </div>

                    <div class="lc-block d-flex align-items-center mb-3">
                        <x-ionicon-school-outline style="width: 30px; margin-right: 10px;" />
                        <h6 class="mb-0">University of Malaysia Pahang Al-Sultan Abdullah</h6>
                    </div>

                    <div class="lc-block d-flex align-items-center">
                        <x-ionicon-book-outline style="width: 30px; margin-right: 10px;" />
                        <h6 class="mb-0">Degree in Software Engineering</h6>
                    </div>

                    <div class="counter-section counter-wrapper d-flex justify-content-center gap-5 mt-5">
                        <div class="counter text-center">
                            <h1 class="count-wrapper fw-bold d-flex align-items-center justify-content-center">
                                <span class="count" data-target="3">0</span><span class="plus-sign">+</span>
                            </h1>
                            <p class="fw-bold mt-2">Years Experience</p>
                        </div>
                        <div class="counter text-center">
                            <h1 class="count-wrapper fw-bold d-flex align-items-center justify-content-center">
                                <span class="count" data-target="20">0</span><span class="plus-sign">+</span>
                            </h1>
                            <p class="fw-bold mt-2">Completed Projects</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Alpha's Skills Section -->
            <div id="alpha-section" class="row align-items-start g-5 mb-5 min-vh-100">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold display-4">Skills</h2>
                </div>

                <div class="skill-section col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <x-ionicon-code-slash-outline
                            style="width: 50px; height: 50px; margin-right: 15px; color: #000;" />
                        <h4 class="fw-bold mb-0">Frontend Developer Skills</h4>
                    </div>

                    <!-- Skill 1: React -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-react style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">React</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar react-animation progress-bar-striped" style="width: 50%">50%</div>
                        </div>
                    </div>

                    <!-- Skill 2: Bootstrap -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-bi-bootstrap style="width: 30px;height: 30px; margin-right: 10px;" />
                            <p class="mb-0">Bootstrap</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar bootstrap-animation progress-bar-striped" style="width: 40%">40%
                            </div>
                        </div>
                    </div>

                    <!-- Skill 3: Flutter -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-devicon-flutter style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Flutter</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar flutter-animation progress-bar-striped" style="width: 70%">70%</div>
                        </div>
                    </div>

                    <!-- Skill 4: HTML -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-html5 style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">HTML</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar html-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>

                    <!-- Skill 5: CSS -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-css3-alt style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">CSS</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar css-animation progress-bar-striped" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Section -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <x-monoicon-database style="width: 50px; height: 50px; margin-right: 15px; color: #000;" />
                        <h4 class="fw-bold mb-0">Backend Developer Skills</h4>
                    </div>

                    <!-- Skill 1: Laravel -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-laravel style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Laravel</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar laravel-animation progress-bar-striped" style="width: 30%">30%</div>
                        </div>
                    </div>

                    <!-- Skill 2: MySQL -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-devicon-mysql style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">MySQL</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar mysql-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>

                    <!-- Skill 3: Python -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-python style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Python</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar python-animation progress-bar-striped" style="width: 20%">20%</div>
                        </div>
                    </div>

                    <!-- Skill 4: Java -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-java style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">Java</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar java-animation progress-bar-striped" style="width: 60%">60%</div>
                        </div>
                    </div>

                    <!-- Skill 5: JavaScript -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-ionicon-logo-javascript style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">JavaScript</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar javascript-animation progress-bar-striped" style="width: 80%">80%
                            </div>
                        </div>
                    </div>

                    <!-- Skill 6: PHP -->
                    <div class="lc-block mb-4">
                        <div class="lc-block d-flex align-items-center mb-3">
                            <x-lineawesome-php style="width: 30px; margin-right: 10px;" />
                            <p class="mb-0">PHP</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px;">
                            <div class="progress-bar php-animation progress-bar-striped" style="width: 90%">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Alpha's Education Qualification Section --}}
            <div id="alpha-section" class="row align-items-start g-5 mb-5 min-vh-100">
                <!-- Centered Header -->
                <div class="col-12 text-center">
                    <h2 class="fw-bold display-4">Education Qualification</h2>
                </div>

                <!-- You can save this as resources/views/education-timeline.blade.php -->
                <div class="container py-5">
                    <div class="main-timeline">

                        <!-- Third Qualification -->
                        <div class="timeline left animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">High School Certificate</h3>
                                    <p class="mb-2"><strong>Sekolah Menengah Jenis Kebangsaan Sin Min</strong></p>
                                    <p class="text-muted mb-2">2016 - 2020</p>
                                    <p class="mb-0">Grade: 7As in SPM</p>
                                    <p class="mt-2">
                                        Science Stream<br>
                                        Activities: Wushu Club & Badminton Club MT
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Second Qualification -->
                        <div class="timeline right animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">Diploma in Computer Science</h3>
                                    <p class="mb-2"><strong>University of Malaysia Pahang Al-Sultan Abdullah</strong></p>
                                    <p class="text-muted mb-2">2021 - 2023</p>
                                    <p class="mb-0">CGPA: 3.8</p>
                                    <p class="mt-2">
                                        Diploma in Computer Science<br>
                                        Key Achievements: First Class Awards
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- First Qualification -->
                        <div class="timeline left animate">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="timeline-badge">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">Bachelor of Software Engineering</h3>
                                    <p class="mb-2"><strong>University of Malaysia Pahang Al-Sultan Abdullah</strong></p>
                                    <p class="text-muted mb-2">2023 - Present</p>
                                    <p class="mb-0">CGPA: 3.75</p>
                                    <p class="mt-2">
                                        Major in Software Engineering<br>
                                        Relevant Coursework: Web & Mobile Development, Software Engineering
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
