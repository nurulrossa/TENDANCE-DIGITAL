 @extends('public/template/default')

 @section('title')
 Tendance Digital || HOME
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
                         <span class="mr-6" style="font-size: 30px; margin-top: -100px;">Selamat Datang
                             Di</span>
                         <div class="animated-info">
                             <span style="color: #FFC200;">Tendance Digital</span>
                             <!--<span class="animated-item">Service Website & Mobile APP</span>
                                <span class="animated-item">Course</span>-->
                         </div>
                     </h1>
                     <p>Sebuah Start Up karya anak bangsa yang menekuni di bidang Software House & Academy untuk
                         memajukan dunia digital.</p>
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
 </div>
 <!-- END -->

 <!--   ACADEMY -->
 <section id="pricing" class="padd-section text-center" style="margin-top: 80px;">
     <div class="container">
         <div class="section-title text-center">
             <h2>Jelajahi Academy Kami
                 </h2>
                 <p class="separator">Pilih Program yang membuat kamu asik.</p>
                 <a href="{{ url('/academy') }}" class="btn custom-btn custom-btn-bg custom-btn-link" style="margin-bottom: 30px;">Selengkapnya</a>
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
         </div>
     </div>
 </section>
 <!-- END -->

 <!-- KENAPA PILIH KAMI -->
 <div class="bgded overlay light" id="Team">
     <section id="services" class="hoc container clear padd-section text-center" style="margin-top: 80px;">
         <div class=" container">
             <div class="section-title text-center">
                 <h2>Kenapa Memilih Kami ?</h2>
                 <p class="separator">Layanan yang kami berikan untuk membantu anda dalam mempromosikan usaha
                     bisnis anda.</p>
             </div>
         </div>
         <ul class="nospace group elements elements-three">
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 100px;" src="public/images/graduate1.png" alt="avatar" class="avatar">
                     <h6 class="heading">Belajar Dari Dasar</h6>
                     <p style="color: #FFC200;">Kemampuan kamu masih nol ? tenang, kita akan membimbingan kalian
                         sampai bisa di bantu oleh mentor profesional.</p>
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 100px;" src="public/images/mentor.png" alt="avatar" class="avatar">
                     <h6 class="heading">Mentor Profesional</h6>
                     <p style="color: #FFC200;">Kami akan membimbing kalian bersama mentor yang profesional pada
                         bidangnya, jadi tidak perlu ragu lagi.</p>
                 </article>
             </li>
             <li class="one_third">
                 <article>
                     <img style="height: 100px; width: 100px;" src="public/images/kerja.png" alt="avatar" class="avatar">
                     <h6 class="heading">Berkesempatan Kerja Bersama Kami</h6>
                     <p style="color: #FFC200;">Setalah kalian mengikuti course dari kami, kalian akan mendapatkan
                         reward & berkesempatan bekerja bersama kami.</p>
                 </article>
             </li>
         </ul>
     </section>
 </div>
 <!-- END -->

 <!-- INFO -->
 <div style="margin-top: 80px; ">
     <div class=" alert alert-warning" role="alert" style="height: 180px; text-align:center;">
         <p> <strong style="font-size: 30px;">Dicari Banyak Perusahaan</strong></p>
         <p>Banyak lowongan pekerjaan dengan course bersama kami.</p>
         <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Selengkapnya</a>
     </div>
 </div>
 <!-- END -->

 <!-- CONTACT -->
 <section class="contact py-5" id="contact" style="margin-top: 80px;">
     <div class="container">
         <div class="row">

             <div class="col-lg-5 mr-lg-5 col-12">
                 <div class="google-map w-100">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.850251133641!2d110.38211721474845!3d-7.805673094375073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577754891ebf%3A0xb382b0ef0e555077!2sJl.%20Bimosari%20No.314%2C%20Tahunan%2C%20Kec.%20Umbulharjo%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta%2055167!5e0!3m2!1sid!2sid!4v1651151113747!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>

                 <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                     <div class="contact-info-item">
                         <h3 class="mb-3 text-white">Kantor Kami</h3>
                         <p class="footer-text mb-0"><i class="fas fa-phone"></i> +62 813-9114-0713</p>
                         <p><a href="mailto:admin@tendancedigital.com"><i class="fas fa-envelope"></i> admin@tendancedigital.com</a>
                         </p>
                     </div>

                     <ul class="social-links">
                         <li><a href="#" class="uil uil-facebook" data-toggle="tooltip" data-placement="left" title="Facebook"></a></li>
                         <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                         <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-6 col-12">
                 <div class="contact-form">
                     <h2 class="mb-4">Hubungi Kami</h2>

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
                                 <input type="submit" class="form-control submit-btn" value="Kirim">
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

         </div>
     </div>
 </section>
 {{-- END --}}

 {{-- MODAL --}}


 <!-- Modal DATA DIRI-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Data Diri</h5>
             </div>
             <div class="modal-body">
                 <form class="row g-3">
                     <div class="col-md-6">
                         <label for="nama" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control" id="nama" value="" required>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan nama yang valid.
                         </div>
                     </div>
                     <div class="col-md-6">
                         <label for="hp" class="form-label">No.HP</label>
                         <input type="numeric" class="form-control" id="hp" value="" required>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan NO.HP yang valid.
                         </div>
                     </div>
                     <div class="col-md-6">
                         <label for="email" class="form-label">Email</label>
                         <div class="input-group has-validation">
                             <span class="input-group-text" id="inputGroupPrepend3">@</span>
                             <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" placeholder="example@gamil.com" required>
                             <div id="validationServer05Feedback" class="invalid-feedback">
                                 Harap berikan email yang valid.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <label for="kota" class="form-label">Kota</label>
                         <input type="text" class="form-control" id="kota" aria-describedby="validationServer03Feedback" required>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan kota yang valid.
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="alamat" class="form-label">Alamat</label>
                         <textarea class="form-control" id="alamat" aria-describedby="validationServer03Feedback" required></textarea>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan alamat yang valid.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <label for="academy" class="form-label">Academy</label>
                         <input type="text" class="form-control" id="academy" aria-describedby="validationServer05Feedback" readonly>
                     </div>
                     <div class="col-md-4">
                         <label for="diskon" class="form-label">Diskon</label>
                         <input type="text" class="form-control" id="diskon" aria-describedby="validationServer05Feedback" readonly>
                     </div>
                     <div class="col-md-4">
                         <label for="total" class="form-label">Total</label>
                         <input type="text" class="form-control" id="total" aria-describedby="validationServer05Feedback" readonly>
                     </div>
                     <div class="col-12 mt-3">
                         <div class="form-check">
                             <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                             <label class="form-check-label" for="invalidCheck3">
                                 Setuju dengan syarat dan ketentuan
                             </label>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer col-12">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                 <button class="btn btn-success" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-toggle="modal" data-target="#myModal2" data-backdrop="static" data-keyboard="false">Pembayaran</button>
             </div>
         </div>
     </div>
 </div>
 <!-- END -->

 <!-- MODAL PEMBAYARAN -->
 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Pembayaran</h5>
             </div>
             <div class="modal-body">
                 <form class="row g-3">
                     <div class="col-md-12">
                         <label for="nama" class="form-label">BCA</label>
                         <input type="text" class="form-control" id="nama" value="" placeholder="2342342342434234234 - AN.kdnflknsdklfnslednf" readonly>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan nama yang valid.
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="nama" class="form-label">BCA</label>
                         <input type="text" class="form-control" id="nama" value="" placeholder="2342342342434234234 - AN.kdnflknsdklfnslednf" readonly>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan NO.HP yang valid.
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="nama" class="form-label">BCA</label>
                         <input type="text" class="form-control" id="nama" value="" placeholder="2342342342434234234 - AN.kdnflknsdklfnslednf" readonly>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan NO.HP yang valid.
                         </div>
                     </div>
                     <div class="col-md-">
                         <label for="file" class="form-label">Bukti Pembayaran</label>
                         <input type="file" class="form-control" id="kota" aria-describedby="validationServer03Feedback" required>
                         <div id="validationServer05Feedback" class="invalid-feedback">
                             Harap berikan file yang valid.
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer col-12">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                 <button type="button" id="tombol" class="btn btn-warning" onclick="timer='100000'; window.location='{{ url ('/') }}';   Swal.fire('Pembayaran Terkirim', 'Silahkan Tunggu Email Dari kami 1x24 jam', 'success')  "><b>Pesan</b></button>
             </div>
         </div>
     </div>
 </div>
 <!-- END -->

 <!-- MODAL MENTORING BIMBEL -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Mentoring Bimbel</h5>
             </div>
             <div class="modal-body">
                 <ul class="list-unstyled" style="text-align: center;">
                     <li><b>1 X</b> Pertemuan</li>
                     <hr>
                     <li>Mentor Profesional pada bidangnya</li>
                     <hr>
                     <li>Di bimbing sampai bisa</li>
                     <hr>
                     <li>Diskusi bersama praktisi</li>
                     <hr>
                     <li>Waktu fleksibel</li>
                 </ul>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
 <!-- END -->

 <!-- MODAL DASAR WEBSITE -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Dasar Website Development</h5>
             </div>
             <div class="modal-body">
                 <ul class="list-unstyled" style="text-align: center;">
                     <li><b>10 X</b> Pertemuan</li>
                     <hr>
                     <li>Mentor Profesional pada bidangnya</li>
                     <hr>
                     <li>Di bimbing hingga aplikasi siap public</li>
                     <hr>
                     <li>Diskusi bersama praktisi</li>
                     <hr>
                     <li>Waktu satu minggu 3x pertemuan</li>
                     <hr>
                     <li>Mendapatkan Reward di akhir pertemuan</li>
                     <hr>
                     <li>Berkesempatan kerja bersama kami</li>
                     <hr>
                     <li>Pembelajaran yang asik</li>
                     <hr>
                     <li>Pembelajaran menggunakan github/gitlab</li>
                     <hr>
                     <li>Di bimbing hingga upload & setting cpanel</li>
                 </ul>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
 <!-- END -->

 <!-- MODAL DASAR MOBILE -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Dasar Mobile Development</h5>
             </div>
             <div class="modal-body">
                 <ul class="list-unstyled" style="text-align: center;">
                     <li><b>10 X</b> Pertemuan</li>
                     <hr>
                     <li>Mentor Profesional pada bidangnya</li>
                     <hr>
                     <li>Di bimbing hingga aplikasi siap public</li>
                     <hr>
                     <li>Diskusi bersama praktisi</li>
                     <hr>
                     <li>Waktu satu minggu 3x pertemuan</li>
                     <hr>
                     <li>Mendapatkan Reward di akhir pertemuan</li>
                     <hr>
                     <li>Berkesempatan kerja bersama kami</li>
                     <hr>
                     <li>Pembelajaran yang asik</li>
                     <hr>
                     <li>Pembelajaran menggunakan github/gitlab</li>
                     <hr>
                     <li>Di bimbing hingga upload & setting play store</li>
                 </ul>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
 <!-- END -->
 @endsection
