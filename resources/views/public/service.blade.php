 @extends('public/template/default')

 @section('title')
 Tendance Digital || SERVICE
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
                         <span class="mr-6" style="font-size: 30px; margin-top: -100px;">Tendance</span>
                         <div class="animated-info">
                             <span style="color: #FFC200;">Service</span>
                             <!--<span class="animated-item">Service Website & Mobile APP</span>
                                                                 <span class="animated-item">Course</span>-->
                         </div>
                     </h1>
                     <p>Pelayanan Pembuatan Website Development, Mobile Development, & Maintenance Untuk Memudahkan Anda
                         Dalam Mempromosikan Bisnis Anda.</p>
                     <div class=" mt-2">
                         <!--<a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>-->
                     </div>
                 </div>
             </div>
             <div class="col-lg-5 col-md-12 col-12">
                 <div class="about-image svg">
                     <img src="public/service/images/service.png" class="img-fluid" alt="svg image">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->

 <!-- PARTNER -->
 <section class="clients pt-5 mt-5">
     <div class="container">
         <div class="row">
             <div class="col-sm-12">
                 <div class="container">
                     <div class="section-title text-center">
                         <h2 style="margin-bottom: 50px;">Di Percaya Lebih Dari 100+ Pelanggan Di Indonesia </h2>
                     </div>
                 </div>
                 <center>
                     <div class="d-sm-flex justify-content-between align-items-center">
                         <img src="public/service/images/deloit.svg" alt="deloit" class="p-2 p-lg-0">
                         <img src="public/service/images/erricson.svg" alt="erricson" class="p-2 p-lg-0">
                         <img src=" public/service/images/netflix.svg" alt="netflix" class="p-2 p-lg-0">
                         <img src="public/service/images/instagram.svg" alt="instagram" class="p-2 p-lg-0">
                         <img src=" public/service/images/coinbase.svg" alt="coinbase" class="p-2 p-lg-0">
                     </div>
                 </center>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->

 <!-- LAYANAN KAMI -->
 <section class=" padd-section text-center" style="margin-top: 100px; ">
     <div class="container">
         <div class="section-title text-center">
             <h2>Layanan Kami</h2>
             <p class="separator">Layanan yang kami berikan untuk membantu anda dalam mempromosikan usaha bisnis
                 anda.</p>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-lg-4">
                 <div class="feature-block">
                     <img style="height: 200px; width: 200px;" src="public/layanankami/img/project.png" alt="img" class="img-fluid">
                     <h4>Maintenance</h4>
                     <p>Jasa untuk pembuatan wesbite & app mobile untuk meningkatkan bisnis anda.</p>
                     <a href="#" class="btn mr-lg-2 custom-btn">Pesan Sekarang</a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4">
                 <div class="feature-block">
                     <img style="height: 200px; width: 200px;" src="public/layanankami/img/mobile.png" alt="img" class="img-fluid">
                     <h4>Mobile Development</h4>
                     <p>Pelatihan membuat aplikasi mobile yang baik dan benar dengan di bimbing oleh mentor profesional
                         di bidangnya.</p>
                     <a href="#" class="btn mr-lg-2 custom-btn">Pesan Sekarang</a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4">
                 <div class="feature-block">
                     <img style="height: 200px; width: 200px;" src="public/layanankami/img/website.png" alt="img" class="img-fluid">
                     <h4>Website Development</h4>
                     <p>Pelatihan membuat aplikasi mobile yang baik dan benar dengan di bimbing oleh mentor profesional
                         di bidangnya.</p>
                     <a href="#" class="btn mr-lg-2 custom-btn">Pesan Sekarang</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->

 <!-- PROJECTS -->
 <!--<section class="project py-5" id="project">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-11 text-center mx-auto col-12">
                         <div class="col-lg-8 mx-auto">
                             <h2>Things I have designed for digital media agencies</h2>
                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <div class="project-info">
                                     <img src="public/images/project/project-image01.png" class="img-fluid"
                                         alt="project image">
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="project-info">
                                     <img src="public/public/images/project/project-image02.png" class="img-fluid"
                                         alt="project image">
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="project-info">
                                     <img src="public/images/project/project-image03.png" class="img-fluid"
                                         alt="project image">
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="project-info">
                                     <img src="public/images/project/project-image04.png" class="img-fluid"
                                         alt="project image">
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="project-info">
                                     <img src="public/images/project/project-image05.png" class="img-fluid"
                                         alt="project image">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>-->
 <!-- END -->

 <!-- CLIENT KAMI -->
 <div class="bgded overlay light" id="Team">
     <section id="services" class="hoc container clear padd-section text-center" style="margin-top: 80px;">
         <div class=" container">
             <div class="section-title text-center">
                 <h2>Client Kami</h2>
                 <p class="separator">Beberapa client yang telah mempercayai kami.</p>
             </div>
         </div>
         <ul class="nospace group elements elements-three">
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 200px;" src="{{ asset('public/service/images/client/srm.png') }}">
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 200px;" src="{{ asset('public/service/images/client/emka.png') }}">
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 250px;" src="{{ asset('public/service/images/client/rantau_kadam.png') }}">
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 250px;" src="{{ asset('public/service/images/client/sdnpane.png') }}">
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 100px;" src="{{ asset('public/service/images/client/ois.png') }}">
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 100px;" src="{{ asset('public/service/images/client/scopus.png') }}">
                 </article>
             </li>
         </ul>
     </section>
 </div>
 <!-- END -->

 <!-- GALLERY -->
 <!--<section id="pricing" class="padd-section text-center" style="margin-top: 80px;">
     <div class="container">
         <div class="section-title text-center">
             <h2>Client Kami</h2>
             <p class="separator">Beberapa client yang telah mempercayai kami.</p>
         </div>
     </div>
     <div class="responsive">
         <div class="gallery">
             <a target="_blank" href="{{ asset('public/service/images/galery/test.png') }}">
                 <img src="{{ asset('public/service/images/galery/test.png') }}" width="600" height="400">
             </a>
             <div class="desc">Foto 1</div>
         </div>
     </div>
     <div class="responsive">
         <div class="gallery">
             <a target="_blank" href="{{ asset('public/service/images/galery/test.png') }}">
                 <img src="{{ asset('public/service/images/galery/test.png') }}" width="600" height="400">
             </a>
             <div class="desc">Foto 1</div>
         </div>
     </div>
     <div class="responsive">
         <div class="gallery">
             <a target="_blank" href="{{ asset('public/service/images/galery/test.png') }}">
                 <img src="{{ asset('public/service/images/galery/test.png') }}" width="600" height="400">
             </a>
             <div class="desc">Foto 1</div>
         </div>
     </div>
     <div class="responsive">
         <div class="gallery">
             <a target="_blank" href="{{ asset('public/service/images/galery/test.png') }}">
                 <img src="{{ asset('public/service/images/galery/test.png') }}" width="600" height="400">
             </a>
             <div class="desc">Foto 1</div>
         </div>
     </div>
     <div class="clearfix"></div>
 </section>-->
 {{-- END --}}
 @endsection
