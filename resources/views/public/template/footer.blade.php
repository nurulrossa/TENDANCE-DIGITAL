<div style="position:fixed;right:20px;bottom:20px;">
    <a href="https://api.whatsapp.com/send?phone=+6281391140713&text=Halo%20TENDANCE%20DIGITAL,%20mau%20tanya-tanya%20Program%20Tendance%20Digital%20Dong.">
        <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
            <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Hubungi Kami</button></a>
</div>

<!-- FOOTER -->
<footer class="footer" style="background-color: #e7e7e7; margin-top:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4" style="margin-top: 100px;">
                <div class="footer-logo">
                    <img style="width: fit-content; height: 200px; margin-top:-70px; margin-bottom:-50px;" class="navbar-brand" src="public/images/logo.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Tendance Academy</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mentoring Bimbel</a></li>
                        <li><a href="#">Wesite Development</a></li>
                        <li><a href="#">Mobile Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Business Analysis</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Tendance Service</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Website Development</a></li>
                        <li><a href="#">Mobile Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Tendance Career</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Apprenticeship</a></li>
                        <li><a href="#">Job vacancy</a></li>
                        <li><a href="#">Job Conect</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Tentang Tendance</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Kebijakan & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <tr>
        <div class="copyrights" style="margin-top: 50px;">
            <div class="container">
                <div class="credits">
                    <p>&copy; Copyrights
                        <script type='text/javascript'>
                            var creditsyear = new Date();
                            document.write(creditsyear.getFullYear());
                        </script> Tendance Digital. All rights reserved.
                    </p>
                    Designed by <a href="https://instagram/tendance_digital/">Tendance Digital </a>Software House ||
                    Academy Digital
                </div>
            </div>
        </div>
</footer>
<!-- END FOOTER -->

<!-- PUBLIC -->
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/jQuery.headroom.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/Headroom.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/smoothscroll.js"></script>
<script src="public/js/custom.js"></script>
<!-- END -->

<!-- HITUNG MUNDUR -->
<script>
    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date("april 22, 2022 15:37:25").getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

        // Untuk mendapatkan tanggal dan waktu hari ini
        var now = new Date().getTime();

        // Temukan jarak antara sekarang dan tanggal hitung mundur
        var distance = countDownDate - now;

        // Perhitungan waktu untuk hari, jam, menit dan detik
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Keluarkan hasil dalam elemen dengan id = "demo"
        document.getElementById("demo").innerHTML = days + " Hari " + hours + " Jam " +
            minutes + " Menit " + seconds + " Detik ";

        // Jika hitungan mundur selesai, tulis beberapa teks
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<!-- END -->

<!-- SWEET ALERT -->
<script src="public/sweetalert/sweetalert2.all.min.js"></script>
<!-- END -->

{{-- PARTNER --}}
<script src="public/service/vendors/aos/js/aos.js"></script>
<script src="public/service/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
<script src="public/service/js/template.js"></script>
{{-- END --}}
<script>
    document.querySelector(".fourth").addEventListener("click", function() {
        swal({
            title: "Alert Set on Timer",
            text: "This alert will disappear after 3 seconds.",
            position: "bottom",
            backdrop: "linear-gradient(yellow, orange)",
            background: "white",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            showConfirmButton: false,
            showCancelButton: false,
            timer: 3000
        });
    });
</script>
