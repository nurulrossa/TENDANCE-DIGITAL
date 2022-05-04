 @extends('public/template/default')

 @section('title')
 Tendance Digital || ACADEMY
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
                             <span style="color: #FFC200;">Academy</span>
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
                     <img src="public/academy/img/academy.png" class="img-fluid" alt="svg image">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->

 <!--   ACADEMY -->
 <section id="pricing" class="padd-section text-center" style="margin-top: 80px;">
     <div class="container">
         <div class="section-title text-center">
             <h2>Jelajahi Academy Kami</h2>
             <p class="separator">Pilih Program yang membuat kamu asik.</p>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-lg-3">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Mentoring Bimbel</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.50.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.10.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>1 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Di bimbing sampai bisa</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="modal" data-target="#exampleModal"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Dasar Website Development</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.150.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.100.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>10 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Di bimbing hingga aplikasi siap public</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-toggle="modal" data-target="#exampleModal1"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Dasar Mobile (Android)</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.150.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.100.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>10 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Di bimbing hingga aplikasi siap public</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-toggle="modal" data-target="#exampleModal2"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Front End Web Development</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.150.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>12 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Berkesempatan mendapatkan project dari kami</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" id="tombol" class="btn btn-warning" onclick="Swal.fire('Periode Pendaftaran Academy Belum Di Buka', 'Silahkan Pilih Academy Yang Lain', 'error')"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3" style="margin-top: 30px;">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Back End Web Development</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.150.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>12 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Berkesempatan mendapatkan project dari kami</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" id="tombol" class="btn btn-warning" onclick="Swal.fire('Periode Pendaftaran Academy Belum Di Buka', 'Silahkan Pilih Academy Yang Lain', 'error')"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3" style="margin-top: 30px;">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Mobile Android (Flutter)</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.250.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.150.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>12 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Berkesempatan mendapatkan project dari kami</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" id="tombol" class="btn btn-warning" onclick="Swal.fire('Periode Pendaftaran Academy Belum Di Buka', 'Silahkan Pilih Academy Yang Lain', 'error')"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3" style="margin-top: 30px;">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>UI/UX Design & Research</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.200.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.130.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>10 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Berkesempatan mendapatkan project dari kami</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" id="tombol" class="btn btn-warning" onclick="Swal.fire('Periode Pendaftaran Academy Belum Di Buka', 'Silahkan Pilih Academy Yang Lain', 'error')"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3" style="margin-top: 30px;">
                 <div class="block-pricing">
                     <div class="table">
                         <h4>Business Analysis</h4>
                         <h4 style="color: #FFC200; margin-top:-30px;"><s>Rp.200.000-,</s></h4>
                         <h2 style="margin-top:-30px;">Rp.100.000-,</h2>
                         <ul class="list-unstyled">
                             <li><b>10 X</b> Pertemuan</li>
                             <li>Mentor Profesional</li>
                             <li>Berkesempatan mendapatkan project dari kami</li>
                             <li>Diskusi bersama praktisi</li>
                         </ul>
                         <div class="table_btn" style="margin-top: 20px;">
                             <button type="button" id="tombol" class="btn btn-warning" onclick="Swal.fire('Periode Pendaftaran Academy Belum Di Buka', 'Silahkan Pilih Academy Yang Lain', 'error')"><b>Pesan</b></button>
                             <button type="button" class="btn btn-info"><b>Detail</b></button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END -->
 @endsection
