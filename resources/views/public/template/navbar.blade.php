</div>
<nav class="navbar navbar-expand-sm navbar-light" style="margin-top: auto;">
    <div class="container">
        <a href="{{ url('/') }}"> <img style="width: fit-content; height: 200px; margin-top:-70px; margin-bottom:-50px;" class="navbar-brand" src="public/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="">
        </div>
        <div class="collapse navbar-collapse dropdown dropdown nav-item" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Program Tendance
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: center;">
                    <li><a class="dropdown-item" href="#">Tendance Academy</a></li>
                    <li><a class="dropdown-item" href="#">Tendance Service</a></li>
                </ul>

                <!--<li class="nav-item">
                    <a href="#about" class="nav-link"><span data-hover="Tendance Academy">Tendance Academy</span></a>
                </li>-->
                <!--<li class="nav-item">
                    <a href="#project" class="nav-link"><span data-hover="Tendance Service">Tendance Service</span></a>
                </li>-->
                <li class="nav-item">
                    <a href="{{ url('/karir') }}#karir" class="nav-link"><span data-hover="Tendance Career">Tendance Career</span></a>
                </li>
                <li class="nav-item">
                    <a href="#resume" class="nav-link"><span data-hover="Blog">Blog</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}#about" class="nav-link"><span data-hover="Tentang Tendance">Tentang Tendance</span></a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-warning">Daftar/Login</button>
                </li>
            </ul>

            <!--<ul class="navbar-nav ml-lg-auto">
                 <div class="ml-lg-4">
                     <div class="color-mode d-lg-flex justify-content-center align-items-center">
                         <i class="color-mode-icon"></i>
                         Color mode
                     </div>
                 </div>
             </ul>-->
        </div>
    </div>
</nav>
