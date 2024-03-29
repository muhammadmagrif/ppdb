<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/logo-ppdb.png">

    <!-- Main CDN Styles -->
     <?php include "base/cdn_styles.php"; ?>
    <!-- Page CDN Style -->
    <!-- DATE-PICKER -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/date-picker/css/datepicker.min.css">

    
    <!-- Main CSS -->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <!-- Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/yayasan_sekolah.css">

</head>
<body id="page-top">
<div id="wrapper">
    <!-- Sidebar Section -->
    <?php include "base/yayasan_sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column mt-5 pt-3">
        <div id="content">
            <!-- Header Section -->
            <?php include "base/header.php";?>    

            <!-- Body Section -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Details School Section -->
                        <div class="row mx-1 my-3">
                            <!-- Name School Title -->
                            <div class="col-md-12 my-3">
                                <h6 class="text-danger font-weight-bold my-0">Akreditasi A</h6>
                                <h5 class="d-none d-sm-block font-weight-bold text-dark"><?php echo $nama_sekolah ?></h5>
                                <h6 class="d-block d-sm-none font-weight-bold text-dark text-center"><?php echo $nama_sekolah ?></h6>
                            </div>
                            <!-- End Name School Title -->

                            <div class="col-md-12 py-3">
                                <!--  Detail School Tab Menu -->
                                <ul class="nav row  justify-content-md-left border-bottom" id="myTab" role="tablist">
                                    <li class="nav-item col-md-2 col-6">
                                        <a class="nav-link active text-secondary text-center" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">
                                            <span class="fas fa-info fa-lg"></span>
                                            <p class="small font-weight-bold">Info</p>
                                        </a>
                                    </li>
                                    <li class="nav-item col-md-2 col-6">
                                        <a class="nav-link text-secondary text-center" id="rule-tab" data-toggle="tab" href="#rule" role="tab" aria-controls="rule" aria-selected="false">
                                            <span class="fas fa-book fa-lg"></span>
                                            <p class="small font-weight-bold">Aturan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item col-md-2 col-6">
                                        <a class="nav-link text-secondary text-center" id="fee-tab" data-toggle="tab" href="#fee" role="tab" aria-controls="fee" aria-selected="false">
                                            <span class="fas fa-money-bill-wave fa-lg"></span>
                                            <p class="small font-weight-bold">Biaya</p>
                                        </a>
                                    </li>
                                    <li class="nav-item col-md-2 col-6">
                                        <a class="nav-link text-secondary text-center" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                                            <span class="fas fa-list-alt fa-lg"></span>
                                            <p class="small font-weight-bold">Daftar</p>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Detail School Tab Menu -->
                                
                                <!-- Detail School Tab Content -->
                                <div class="tab-content" id="myTabContent">
                                
                                <!-- Info Detail School Tab Panel -->
                                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                <div class="row my-2 py-2">
                                    <div class="col-md-12">
                                        <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                        <hr class="m-0"> -->
                                        <p class="text-justify text-secondary small">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis.
                                        </p>
                                        <!-- Registration Track Section -->
                                        <h6 class="text-danger font-weight-bold m-0">Alur Pendaftaran</h6>
                                        <table class="small">
                                            <tr class="border-bottom">
                                                <td class="font-weight-bold pt-3" colspan=3>Jalur Prestasi</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Periode Pendaftaran</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>12 Juli 2019 - 12 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Verfikasi Berkas</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>20 Juli 2019 - 15 Agustus 2019</td>
                                            </tr>
                                            
                                            <tr class="border-bottom">
                                                <td class="font-weight-bold pt-3" colspan=3>Jalur Reguler</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Periode Pendaftaran</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>12 Agustus 2019 - 20 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tes Akademik</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>21 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tes Psikologi</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>23 Agustus 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tes Kesehatan</td>
                                                <td class="px-1 font-weight-bold"> : </td>
                                                <td>25 Agustus 2019</td>
                                            </tr>
                                        </table>
                                        <!-- End Registration Track Section -->

                                        
                                    </div>
                                </div>
                                </div>
                                <!-- End Info Detail School Tab Panel -->

                                <!-- Rules Detail School Tab Panel -->
                                <div class="tab-pane fade" id="rule" role="tabpanel" aria-labelledby="rule-tab">
                                <div class="row my-2 py-2">
                                    <div class="col-md-6">
                                        <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                        <hr class="m-0">
                                        <ol class="text-secondary mx-0">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit.</li>
                                            <li>Sed do eiusmod tempor incididunt ut labore.</li>
                                            <li>Maecenas volutpat blandit aliquam etiam erat velit scelerisque.</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="font-weight-bold text-danger">Kelengkapan</h6>
                                        <hr class="m-0">
                                        <ol class="text-secondary mx-0">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit.</li>
                                            <li>Sed do eiusmod tempor incididunt ut labore.</li>
                                            <li>Maecenas volutpat blandit aliquam etiam erat velit scelerisque.</li>
                                        </ol>
                                    </div>
                                </div>
                                </div>
                                <!-- End Rules Detail School Tab Panel -->

                                <!-- Fee Detail School Tab Panel -->
                                <div class="tab-pane fade" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                                <div class="row text-center my-2 py-2">
                                    <div class="col-md-12 my-0 p-0 table-responsive">
                                        <!-- <h6 class="font-weight-bold text-danger">Persyaratan</h6>
                                        <hr class="m-0"> -->
                                        <table class="table my-0 table-borderless">
                                            <thead class="text-danger border-bottom">
                                            <tr>
                                                <th scope="col">Jalur</th>
                                                <th scope="col">Pendaftaran</th>
                                                <th scope="col">Pendidikan</th>
                                                <th scope="col">Pembangunan</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="border-top">
                                                <td>Reguler</td>
                                                <td>Rp. 150.000</td>
                                                <td>Rp. 650.000</td>
                                                <td>Rp. 5.600.000</td>
                                                <td>Rp. 6.400.000</td>
                                            </tr>
                                            <tr class="border-top">
                                                <td>Prestasi</td>
                                                <td>Rp. 100.000</td>
                                                <td>Rp. 650.000</td>
                                                <td>Rp. 5.000.000</td>
                                                <td>Rp. 6.750.000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                                </div>
                                <!-- End Fee Detail School Tab Panel -->

                                <!-- Registration School Tab Panel -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <div class="row text-center my-2 py-2">
                                    <?php include "yayasan_sekolah_registrasi.php" ?>
                                </div>      
                                </div>
                                <!-- End Registration School Tab Panel -->

                                </div>
                                <!-- Detail School Tab Content -->
                            </div>
                        </div>
                        <!-- End Detail School Section -->

                        
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <footer id="peserta-footer">
                <?php include "base/footer.php" ?>
            </footer>
        </div>
    </div>
</div>

 <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Main CDN JS -->
<?php include "base/cdn_scripts.php"; ?>
<!-- Page CDN JS  -->
<!-- JQUERY STEP -->
<script src="<?php echo base_url() ?>assets/js/jquery.steps.js"></script>

<!-- DATE-PICKER -->
<script src="<?php echo base_url() ?>vendor/date-picker/js/datepicker.js"></script>
<script src="<?php echo base_url() ?>vendor/date-picker/js/datepicker.en.js"></script>

<!-- Main JS  -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- Page JS  -->
<script src="<?php echo base_url() ?>assets/js/yayasan_sekolah.js"></script>

</body>
</html>