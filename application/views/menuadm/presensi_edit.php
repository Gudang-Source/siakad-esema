<?php $this->load->view('main/header'); ?>
<!-- Start Left menu area -->
<?php $this->load->view('main/navbar'); ?>
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Presensi Details</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                                <?php echo form_open_multipart("C_presensi/update"); ?>
                                                <?php echo validation_errors(); ?>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="kode_old" value="<?php echo $presensi['kode'] ?>">
                                                            <input name="kode" type="text" class="form-control" placeholder="Kode" value="<?php echo $presensi['kode'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_mp" type="text" class="form-control" placeholder="Kode MataPelajaran" value="<?php echo $presensi['kode_mp'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="pertemuan" type="number" class="form-control" placeholder="Pertemuan" value="<?php echo $presensi['pertemuan'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tanggal" type="date" class="form-control" placeholder="Tanggal" value="<?php echo $presensi['tanggal'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="alpha" type="number" class="form-control" placeholder="Alpha" value="<?php echo $presensi['alpha'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="ijin" type="number" class="form-control" placeholder="Ijin" value="<?php echo $presensi['ijin'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="sakit" type="number" class="form-control" placeholder="Sakit" value="<?php echo $presensi['sakit'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_semester" type="text" class="form-control" placeholder="Kode Semester" value="<?php echo $presensi['kode_semester'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_ta" type="text" class="form-control" placeholder="Kode Tahun Ajaran" value="<?php echo $presensi['kode_ta'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nisn" type="number" class="form-control" placeholder="Nisn" value="<?php echo $presensi['nisn'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $this->load->view('main/footer'); ?>