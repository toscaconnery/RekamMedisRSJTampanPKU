<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Daftar Dokumen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Startled a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{url('')}}/list_document/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{url('')}}/list_document/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{url('')}}/list_document/css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('')}}/list_document/css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="{{url('')}}/list_document/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/sweetalert2/dist/sweetalert2.min.css">
    <style type="text/css">
        #content {
            position: relative;
        }
        #content #checked {
            position: absolute;
            /*top: 0px;
            right: 0px;*/
        }
    </style>
</head>

<body>
    <!-- mian-content -->
    <section class="mian-content">
        <!-- /header-top-->
        <div class="bs-slider-overlay">

            <div class="header-top">
                <header class="mainheader">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light RWDpagescrollfix">
                        <h1><a class="navbar-brand" href="index.html"><i class="fab fa-magento"></i> RSJ TAMPAN</a></h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
                            <ul class="navbar-nav mx-auto">
                                {{-- <li><a class="nav-link text-uppercase" href="index.html">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Dorp Down <i class="fas fa-caret-down"></i>
                                </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">Services</a>
                                        <a class="dropdown-item" href="blog.html" title="">Blog</a>
                                        <a class="dropdown-item" href="single.html" title="">Single Page</a>
                                    </div>
                                </li>
                                <li class="nav-item active"><a class="nav-link text-uppercase" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase" href="price.html">Pring Plans</a></li>
                                <li class="nav-item"> <a class="nav-link text-uppercase" href="contact.html">Contact</a></li> --}}
                            </ul>
                            <div class="top-info">
                                <ul style=>
                                    <li class="number-phone"><a class="nav-link request text-uppercase font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="banner-content text-center text-white">
                </div>
            </div>
        </div>
    </section>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('')}}/">Home</a>
        </li>
        <li class="breadcrumb-item active">Daftar Dokumen</li>
    </ol>

    <section class="banner-bottom-wthree bg-light py-lg-5 py-md-5 py-3" id="feature">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                {{-- <h4 class="sub-tittle text-uppercase text-center"></h4> --}}
                <h3 class="tittle text-center"> Rawat Jalan</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_perawat" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Perawat</h5>
                                    @if($dokumen->rj_asesmen_awal_perawat)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_dokter" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Dokter</h5>
                                    @if($dokumen->rj_asesmen_awal_dokter)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_gigi_perawat" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Gigi Perawat</h5>
                                    @if($dokumen->rj_asesmen_awal_gigi_perawat)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_gigi_dokter" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Gigi Dokter</h5>
                                    @if($dokumen->rj_asesmen_awal_gigi_dokter)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_informasi_edukasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Informasi dan Edukasi</h5>
                                    @if($dokumen->rj_informasi_edukasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_lapor_rehabilitasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Lapor dan Rehabilitasi</h5>
                                    @if($dokumen->rj_lapor_rehabilitasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_identifikasi_stresor" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Identifikasi Stresor</h5>
                                    @if($dokumen->rj_identifikasi_stresor)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_tes_konseling_hiv" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Tes & Konseling HIV</h5>
                                    @if($dokumen->rj_tes_konseling_hiv)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_izin_vct_hiv" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Izin VCT HIV</h5>
                                    @if($dokumen->rj_izin_vct_hiv)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_hiv_anti_retroval" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Ikhtisar HIV & TERAPI ART</h5>
                                    @if($dokumen->rj_hiv_anti_retroval)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_perkembangan_pasien" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Perkembangan Pasien</h5>
                                    @if($dokumen->rj_perkembangan_pasien)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_psikolog" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Tumbuh Kembang - Psikolog</h5>
                                    @if($dokumen->rj_asesmen_awal_tumbuh_kembang_psikolog)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_asesmen_awal_tumbuh_kembang_dokter" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Tumbuh Kembang - Dokter</h5>
                                    @if($dokumen->rj_asesmen_awal_tumbuh_kembang_dokter)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/rj_resume" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Resume Rawat Jalan</h5>
                                    @if($dokumen->rj_resume)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3" id="feature">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                {{-- <h4 class="sub-tittle text-uppercase text-center"></h4> --}}
                <h3 class="tittle text-center"> IGD</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_triase" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Triase Pasien</h5>
                                    @if($dokumen->igd_triase)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_asesmen_awal_rawat_darurat_perawat" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Rawat Darurat Perawat</h5>
                                    @if($dokumen->igd_asesmen_awal_rawat_darurat_perawat)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_asesmen_awal_rawat_darurat_dokter" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Rawat Darurat Dokter</h5>
                                    @if($dokumen->igd_asesmen_awal_rawat_darurat_dokter)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_suicide_fisik" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Suicide dan Kekerasan Fisik</h5>
                                    @if($dokumen->igd_suicide_fisik)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_catatan_kemajuan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Catatan Kemajuan</h5>
                                    @if($dokumen->igd_catatan_kemajuan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/igd_catatan_perkembangan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Catatan Perkembangan</h5>
                                    @if($dokumen->igd_catatan_perkembangan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-bottom-wthree bg-light py-lg-5 py-md-5 py-3" id="feature">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                <h3 class="tittle text-center"> Rawat Inap</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_surat_persetujuan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Surat dan Persetujuan</h5>
                                    @if($dokumen->ri_surat_persetujuan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_resume_medis" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Resume Medis</h5>
                                    @if($dokumen->ri_resume_medis)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_dpjp_case" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">DPJP dan Case Manager</h5>
                                    @if($dokumen->ri_dpjp_case)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_persetujuan_umum" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Persetujuan Umum</h5>
                                    @if($dokumen->ri_persetujuan_umum)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_hak_kewajiban" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Hak dan Kewajiban</h5>
                                    @if($dokumen->ri_hak_kewajiban)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_asesmen" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Pasien Rawat Inap</h5>
                                    @if($dokumen->ri_asesmen)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_suicide_fisik" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Suicide dan Kekerasan Fisik</h5>
                                    @if($dokumen->ri_suicide_fisik)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_rawat_napza" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asesmen Awal Keperawatan Napza</h5>
                                    @if($dokumen->ri_rawat_napza)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_penilaian_edmunson" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Penilaian Resiko Jatuh Edmunson</h5>
                                    @if($dokumen->ri_penilaian_edmunson)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_risiko_nyeri" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Penilaian Resiko Nyeri</h5>
                                    @if($dokumen->ri_risiko_nyeri)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_catatan_perkembangan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Catatan Perkembangan Pasien Terintegrasi</h5>
                                    @if($dokumen->ri_catatan_perkembangan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_keperawatan_intensif" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Rencana Tindakan Keperawatan Intensif</h5>
                                    @if($dokumen->ri_keperawatan_intensif)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_evaluasi_keperawatan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Evaluasi Tindakan Keperawatan</h5>
                                    @if($dokumen->ri_evaluasi_keperawatan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_monitoring_observasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Monitoring Dan Observasi Pasien Khusus</h5>
                                    @if($dokumen->ri_monitoring_observasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_laboratorium" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Pemeriksaan Laboratorium</h5>
                                    @if($dokumen->ri_laboratorium)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_penggunaan_obat" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Catatan Penggunaan Obat (CPO)</h5>
                                    @if($dokumen->ri_penggunaan_obat)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_riwayat_obat" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Riwayat Penggunaan Obat (Rekonsiliasi Obat)</h5>
                                    @if($dokumen->ri_riwayat_obat)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_efek_samping" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Pelaporan Efek Samping Obat Komite Farmasi dan Terapi</h5>
                                    @if($dokumen->ri_efek_samping)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_asuhan_gizi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Asuhan Gizi</h5>
                                    @if($dokumen->ri_asuhan_gizi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_edukasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Edukasi Pasien dan Keluarga</h5>
                                    @if($dokumen->ri_edukasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_rencana_pemulangan" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Rencana Pemulangan Pasien (Discharge Planning)</h5>
                                    @if($dokumen->ri_rencana_pemulangan)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_panss_ec" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">PANSS EC</h5>
                                    @if($dokumen->ri_panss_ec)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_penilaian_panss" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Lembar Penilaian Panss EC</h5>
                                    @if($dokumen->ri_penilaian_panss)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_lembar_konsultasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Lembar Konsultasi</h5>
                                    @if($dokumen->ri_lembar_konsultasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_transfer_internal" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Transfer Pasien Internal Rumah Sakit</h5>
                                    @if($dokumen->ri_transfer_internal)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_transfer_eksternal" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Transfer Pasien Eksternal Rumah Sakit</h5>
                                    @if($dokumen->ri_transfer_eksternal)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_pemberian_informasi" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Pemberian Informasi</h5>
                                    @if($dokumen->ri_pemberian_informasi)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_pemeriksaan_psikologis" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Pemeriksaan Psikologis</h5>
                                    @if($dokumen->ri_pemeriksaan_psikologis)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 about-in-w3ls text-center" style="margin-bottom: 2em;">
                        <a href="{{url('')}}/ri_serah_terima" id="content">
                            <div class="card" style="background-color: #eaeff2; width: 16em; height: 16em; padding-top: 1em;">
                                <div class="card-body">
                                    <i class="far fa-file-alt mb-3"></i>
                                    <h5 class="card-title text-uppercase" style="color: black">Formulir Serah Terima Pasien Pulang</h5>
                                    @if($dokumen->ri_serah_terima)
                                        <h5 class="card-title" id="checked" style="color: black; margin-bottom: 0em;"><i class="fas fa-check"></i></h5>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <script src="{{url('')}}/list_document/js/jquery-2.2.3.min.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 150) {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
            } else {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
            }
        });
    </script>
  <!-- stats -->
    <script src="{{url('')}}/list_document/js/jquery.waypoints.min.js"></script>
    <script src="{{url('')}}/list_document/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- carousel -->
    <script src="{{url('')}}/list_document/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!--/ start-smoth-scrolling -->
    <script src="{{url('')}}/list_document/js/move-top.js"></script>
    <script src="{{url('')}}/list_document/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- /js -->
    <script src="{{url('')}}/list_document/js/bootstrap.js"></script>
    <!-- //js -->
    <script src="{{url('')}}/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{url('')}}/sweetalert2/dist/sweetalert2.min.js"></script>

    @if(Session::has('pasien_terpilih'))
      @include('sweetalert.pasienterpilih')
    @endif
</body>

</html>