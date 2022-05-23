@extends('public/template/default')

@section('title')
Tendance Digital || ABOUT
@endsection


@section('content')
<!-- HEADER -->
<section class="about full-screen d-lg-flex justify-content-center align-items-center" style="margin-top: -100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                <div class="about-text">
                    <!--<small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>-->
                    <h1 class="animated animated-text">
                        <span class="mr-6" style="font-size: 30px; margin-top: -100px;">Tentang</span>
                        <div class="animated-info">
                            <span style="color: #FFC200;">{{ $profil->nama }}</span>
                            <!--<span class="animated-item">Service Website & Mobile APP</span>
                             <span class="animated-item">Course</span>-->
                        </div>
                    </h1>
                    <p>{{ $profil->tentang }}</p>
                    <div class=" mt-2">
                        <!--<a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <div class="about-image svg">
                    <img src="public/images/about.png" class="img-fluid" alt="svg image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- VISI & MISI -->
<div class="wrapper coloured" id="About">
    <section id="testimonials" class="hoc container clear">
        <div class="section-title text-center">
            <h2>VISI & MISI</h2>

        </div>
        <article class="one_half first">
            <figure class="clear"><img style="width: 100px; height: 100px" src="public/about/images/demo/VISI.png" alt="">
                <figcaption>
                    <!--  <h6 class="heading">VISI</h6> -->
                    <!-- <em>Adipiscing fusce eu velit</em></figcaption> -->
            </figure>
            <blockquote>{{ $profil->visi }}</blockquote>
        </article>
        <article class="one_half">
            <figure class="clear"><img style="width: 100px; height: 100px;" src="public/about/images/demo/MISI.png" alt="">
                <figcaption>
                    <!-- <h6 class="heading">MISI</h6> -->
                    <!-- <em>Mauris erat aliquam leo</em></figcaption> -->
            </figure>
            <blockquote>{{ $profil->misi }}</blockquote>
        </article>
    </section>
</div>
<!-- END -->

<div class="bgded overlay light" id="Team">
    <section id="services" class="hoc container clear padd-section text-center" style="margin-top: 80px;">
        <div class=" container">
            <div class="section-title text-center">
                <h2>Team</h2>
                <p class="separator">Tendance Digital memiliki team yang profesional di bidanganya, sehingga dapat mendirikan sebuah start up software house hingga saat ini.</p>
            </div>
        </div>
        <ul class="nospace group elements elements-three">
            <li class="one_third">
                <article><a href="#"><i class="fas fa-hourglass-half"></i></a>
                    <h6 class="heading">Eko Muhammad Rilo</h6>
                    <p style="color: #FFC200;">CEO</p>
                </article>
            </li>
            <li class="one_third">
                <article>
                    <img style="height: 200px; width: 200px;" src="public/about/images/team/berto.png" alt="avatar" class="avatar">
                    <h6 class="heading">Berto Juni Krisnanto</h6>
                    <p style="color: #FFC200;">Co-Founder & CTO</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-sliders-h"></i></a>
                    <h6 class="heading">Nurul Rossa</h6>
                    <p style="color: #FFC200;">COO</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-tty"></i></a>
                    <h6 class="heading">Rona Leonsa</h6>
                    <p style="color: #FFC200;">CFO</p>
                </article>
            </li>
            <li class="one_third">
                <article>
                    <img style="height: 200px; width: 200px;" src="public/about/images/team/noni.jpg" alt="avatar" class="avatar">
                    <h6 class="heading">Inosensia Prisilia</h6>
                    <p style="color: #FFC200;">CMO</p>
                </article>
            </li>
        </ul>
    </section>
</div>








@endsection
