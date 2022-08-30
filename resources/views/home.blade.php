@extends('layouts/main')


@section('container')
    <header class=" w-12 d-flex align-items-center " style="background-color:#0753a6; height:650px;">
        <div class=" px-5">
            <div class="row gx-5 align-items-center justify-content-center">
               
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="my-5 text-xl-start">
                            <h1 class="display-5  text-white mb-2 fs-1 fw-bold" style=" font-family: 'Poppins', sans-serif;">Satu Data</h1>
                            <h5 class="lead fw-normal text-white mb-5  " style="line-height:26px;"> Temukan data yang diterbitkan oleh pemerintah pusat, otoritas lokal, dan badan publik untuk membantu Anda dalam pengambilan keputusan dan perumusan kebijakan yang lebih terukur. </h5>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-start justify-content-xl-start">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control p-3" placeholder="Search" name="search" value="" >
                                
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="img/baner1.svg" alt="..." /></div>
          
            </div>
        </div>
    </header>

    <div class="py-5">
        <div class="container">
            <div class="row">

            <div class="owl-carousel featured-carousel owl-theme">
            
                <div class="item ">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                            <img src="img/piggy-bank.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                             <h3 class="mt-3"  style="color:#555;">Ekonomi</h3>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                        <img src="img/alms.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                        <h3 class="mt-3"  style="color:#555;">kemiskinan</h3> </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                            <img src="img/healthcare.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                            <h3 class="mt-3"  style="color:#555;">Kesehatan</h3></a>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                        <img src="img/italy.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                    <h3 class="mt-3"  style="color:#555;">Pariwisata</h3></a>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                         <img src="img/education.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                         <h3 class="mt-3"  style="color:#555;">Pendidikan</h3></a>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                        <img src="img/people.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                        <h3 class="mt-3"  style="color:#555;">Kependudukan</h3></a>
                    </div>
                </div>



                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                        <img src="img/environment.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                    <h3 class="mt-3"  style="color:#555;">Lingkungan Hidup</h3></a>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <a href="#" class="d-block rounded-2 text-decoration-none text-center bg-white border shadow-hover border-secondary border-1">
                        <img src="img/grant.png" alt="" class="img-fluid mt-2 mx-auto" style="height:10vh; width:10vh;">
                    <h3 class="mt-3"  style="color:#555;">Pemerintah dan Desa</h3></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" id="footer" style="background-color: #141414;">
    <div class="row justify-content-center ">

        <div class=" col-lg-6 col-lg-offset-3 col-sm-d-flex justicol-xs-12 text-center my-5">
                <img src="img/logo-jabar.svg" alt="" class="mx-xxl-3 mx-3 img-fluid" style="height:60px;">
                <img src="img/logo-diskominfo.svg" alt=""  class="mx-xxl-3 mx-3 img-fluid" style="height:60px;" >
                <img src="img/logo-jds-putih.png" alt=""  class="mx-xxl-3 mx-3 img-fluid"  style="height:60px;">
         
        </div>
    </div>  

    <div class="col-lg-8 col-lg-offset-2 col-xs-12 m-auto"> <hr style="border-top: 2px solid #333; margin-top:-10px"></div>

    <div class="row justify-content-center" style="margin-top:-10px">
        <div class="col-lg-6 col-lg-offset-3 col-sm-d-flex justicol-xs-12 text-center">
            <img src="img/satu-data-jabar-white.png" alt=""  class="mx-xxl-3 my-5 img-fluid"  style="height:60px;">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-xs-12 d-lg-flex m-auto justify-content-center">
            <div class="d-flex justify-content-center" style="color:#aaa;">
                <i class="fa-solid fa-location-dot " style="margin-right:10px;"></i>
                <p> Jl. Tamansari No.55, Lb.Siliwangi,  <br>  Kecamatan Coblong, Kota Bandung </p>
            </div>
            <div class="d-flex justify-content-center" style="color:#aaa; margin-left:40px; margin-right:40px;">
                <i class="fa-brands fa-whatsapp" style="margin-right:10px;"></i>
                <p> <a href="" style="text-decoration:none; color:#aaa;">082125675017 (Whatsapp)</a> </p>
            </div>
            <div class="d-flex justify-content-center" style="color:#aaa;">
                <i class="fa-solid fa-envelope" style="margin-right:10px;"></i>
                <p> <a href="" style="text-decoration:none; color:#aaa;">data@jabarprov.go.id</a></p>
            </div>
        </div>
    </div>

    <div>
        <div class="container-fluid mt-5" style="background-color:#0c0c0c;">
            <div class="row  " style="color:#aaa;" >
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="copy-right ">
                        <p class=""> © 2022 Jabar Digital Service.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="social-media">
                  
                                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa-brands fa-spotify"></i></a></li>
                                <li><a href=""><i class="fa-brands fa-instagram"></a></i></li>
                                <li><a href=""><i class="fa-brands fa-twitch"></i></a></li>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



   
@endsection 

@section('scripts')

<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>


@endsection