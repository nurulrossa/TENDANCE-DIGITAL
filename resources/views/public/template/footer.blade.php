<!-- FOOTER -->
<footer class="footer" style="background-color: #e7e7e7; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4" style="margin-top: 100px;">
                <div class="footer-logo">
                    <img style="width: fit-content; height: 200px; margin-top:-70px; margin-bottom:-50px;" class="navbar-brand" src="public/images/logo.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Abou Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Features item</a></li>
                        <li><a href="#">Live streaming</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Abou Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Features item</a></li>
                        <li><a href="#">Live streaming</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Support</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">faq</a></li>
                        <li><a href="#">Editor help</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2" style="margin-top: 50px;">
                <div class="list-menu">
                    <h4>Abou Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Features item</a></li>
                        <li><a href="#">Live streaming</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <tr>
        <div class="copyrights" style="margin-top: 50px;">
            <div class="container">
                <p>&copy; Copyrights eStartup. All rights reserved.</p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
