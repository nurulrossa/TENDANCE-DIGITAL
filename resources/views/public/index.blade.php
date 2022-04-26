 @extends('public/template/default')

 @section('title')
 Tendance Digital
 @endsection


 @section('content')
 <!-- HEADER -->
 <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
     <div class="container">
         <div class="row">
             <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                 <div class="about-text">
                     <!--<small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>-->
                     <h1 class="animated animated-text">
                         <span class="mr-6" style="font-size: 30px; margin-top: -100px;">Selamat Datang Di</span>
                         <div class="animated-info">
                             <span style="color: #FFC200;">Tendance Digital</span>
                             <!--<span class="animated-item">Service Website & Mobile APP</span>
                             <span class="animated-item">Course</span>-->
                         </div>
                     </h1>
                     <p>Sebuah Start Up karya anak bangsa yang menekuni di bidang Software House & Academy untuk memajukan dunia digital.</p>
                     <div class=" mt-2">
                         <!--<a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>-->
                     </div>
                 </div>
             </div>
             <div class="col-lg-5 col-md-12 col-12">
                 <div class="about-image svg">
                     <img src="public/images/undraw/undraw_software_engineer_lvl5.svg" class="img-fluid" alt="svg image">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->

 <!-- PROMO -->
 <div class=" mt-2">
     <div class="alert alert-primary" role="alert" style="height: 180px; text-align:center;">
         <div style="font-size: 40px;" id="demo"></div>
         <p> <strong style="font-size: 30px;">Diskon 75%</strong> Promo Ramadhan
             <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Dapatkan Sekarang</a>
         </p>
     </div>
     <!-- END -->

     <!-- LAYANAN KAMI -->
     <!--<section id="get-started" class="padd-section text-center" style="margin-top: 80px; position:relative;">
         <div class="container">
             <div class="section-title text-center">
                 <h2>Layanan Kami</h2>
                 <p class="separator">Layanan yang kami berikan untuk membantu anda dalam mempromosikan usaha bisnis anda.</p>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 200px; width: 200px;" src="public/layanankami/img/project.png" alt="img" class="img-fluid">
                         <h4>Website & App Mobile</h4>
                         <p>Jasa untuk pembuatan wesbite & app mobile untuk meningkatkan bisnis anda.</p>
                         <a href="#" class="btn mr-lg-2 custom-btn">Selengkapnya</a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 200px; width: 200px;" src="public/layanankami/img/mobile.png" alt="img" class="img-fluid">
                         <h4>Academy App Mobile</h4>
                         <p>Pelatihan membuat aplikasi mobile yang baik dan benar dengan di bimbing oleh mentor profesional di bidangnya.</p>
                         <a href="#" class="btn mr-lg-2 custom-btn">Selengkapnya</a>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 200px; width: 200px;" src="public/layanankami/img/website.png" alt="img" class="img-fluid">
                         <h4>Academy Website</h4>
                         <p>Pelatihan membuat website yang baik dan benar dengan di bimbing oleh mentor profesional di bidangnya.</p>
                         <a href="#" class="btn mr-lg-2 custom-btn">Selengkapnya</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>-->
     <!-- END -->

     <!-- COURSE -->
     <section id="pricing" class="padd-section text-center" style="margin-top: 80px;">
         <div class="container">
             <div class="section-title text-center">
                 <h2>Jelajahi Course Kami</h2>
                 <p class="separator">Pilih Program yang membuat kamu asik.</p>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Dasar Website Development</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.150.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.100.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>10 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Di bimbing hingga aplikasi siap public</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Dasar Mobile (Android)</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.150.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.100.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>10 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Di bimbing hingga aplikasi siap public</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Front End Web Development</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.150.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>12 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Berkesempatan mendapatkan project dari kami</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Back End Web Development</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.150.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>12 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Berkesempatan mendapatkan project dari kami</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3" style="margin-top: auto;">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Mobile Android (Flutter)</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.150.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>12 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Berkesempatan mendapatkan project dari kami</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>UI/UX Design & Researchr</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.200.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.130.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>10 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Berkesempatan mendapatkan project dari kami</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="block-pricing">
                         <div class="table">
                             <h4>Business Analysis</h4>
                             <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.200.000-,</s></h4>
                             <h2 style="margin-top:-30px;">Rp.100.00-,</h2>
                             <ul class="list-unstyled">
                                 <li><b>10 X</b> Pertemuan</li>
                                 <li>Mentor Profesional</li>
                                 <li>Berkesempatan mendapatkan project dari kami</li>
                                 <li>Diskusi bersama praktisi</li>
                             </ul>
                             <div class="table_btn" style="margin-top: 20px;">
                                 <button type="button" class="btn btn-warning"><b>Pesan</b></button>
                                 <button type="button" class="btn btn-info"><b>Detail</b></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- END -->

     <!-- KENAPA PILIH KAMI -->
     <!--<section id="get-started" class="padd-section text-center wow fadeInUp" style="margin-top: 80px;">
         <div class="container">
             <div class="section-title text-center" style="margin: 50px;">
                 <h2>Kenapa Pilih Kami ?</h2>
                 <p class="separator">Layanan yang kami berikan untuk membantu anda dalam mempromosikan usaha bisnis anda.</p>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 100px; width: 100px;" src="public/images/graduate1.png" alt="avatar" class="avatar">
                         <h4 style="margin-top: 30px;">Belajar Dari Dasar</h4>
                         <p>Kemampuan lamu masih nol ? tenang, kita akan membimbingan kalian sampai bisa di bantu oleh mentor profesional.</p>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 100px; width: 100px;" src="public/images/mentor.png" alt="avatar" class="avatar">
                         <h4 style="margin-top: 30px;">Mentor Profesional</h4>
                         <p>Kami akan membimbing kalian bersama mentor yang profesional pada bidangnya, jadi tidak perlu ragu lagi.</p>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4">
                     <div class="feature-block">
                         <img style="height: 100px; width: 100px;" src="public/images/kerja.png" alt="avatar" class="avatar">
                         <h4 style="margin-top: 30px;">Berkesempatan Kerja Bersama Kami</h4>
                         <p>Setalah kaliam mengikuti course kami, kalian akan berkesempatan bekerja bersama kami.</p>
                     </div>
                 </div>
             </div>
         </div>
 </div>
 </section>-->
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
                             <img src="public/images/project/project-image01.png" class="img-fluid" alt="project image">
                         </div>
                     </div>
                     <div class="item">
                         <div class="project-info">
                             <img src="public/public/images/project/project-image02.png" class="img-fluid" alt="project image">
                         </div>
                     </div>
                     <div class="item">
                         <div class="project-info">
                             <img src="public/images/project/project-image03.png" class="img-fluid" alt="project image">
                         </div>
                     </div>
                     <div class="item">
                         <div class="project-info">
                             <img src="public/images/project/project-image04.png" class="img-fluid" alt="project image">
                         </div>
                     </div>
                     <div class="item">
                         <div class="project-info">
                             <img src="public/images/project/project-image05.png" class="img-fluid" alt="project image">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>-->


     <!-- CONTACT -->
     <!--<section class="contact py-5" id="contact">
     <div class="container">
         <div class="row">

             <div class="col-lg-5 mr-lg-5 col-12">
                 <div class="google-map w-100">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>

                 <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                     <div class="contact-info-item">
                         <h3 class="mb-3 text-white">Say hello</h3>
                         <p class="footer-text mb-0">010 020 0960</p>
                         <p><a href="mailto:hello@company.co">hello@company.co</a></p>
                     </div>

                     <ul class="social-links">
                         <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                         <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                         <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-6 col-12">
                 <div class="contact-form">
                     <h2 class="mb-4">Interested to work together? Let's talk</h2>

                     <form action="" method="get">
                         <div class="row">
                             <div class="col-lg-6 col-12">
                                 <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                             </div>

                             <div class="col-lg-6 col-12">
                                 <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                             </div>

                             <div class="col-12">
                                 <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                             </div>

                             <div class="ml-lg-auto col-lg-5 col-12">
                                 <input type="submit" class="form-control submit-btn" value="Send Button">
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

         </div>
     </div>
 </section>-->
     @endsection
