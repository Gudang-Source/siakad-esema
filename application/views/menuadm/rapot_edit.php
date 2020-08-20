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
                        <li class="active"><a href="#description">Rapot Details</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                                <?php echo form_open_multipart("C_rapot/update"); ?>
                                                <?php echo validation_errors(); ?>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="nisn_old" value="<?php echo $rapot['nisn'] ?>">
                                                            <input name="nisn" type="text" class="form-control" placeholder="NISN" value="<?php echo $rapot['nisn'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_mp" type="text" class="form-control" placeholder="Kode MataPelajaran" value="<?php echo $rapot['kode_mp'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_semester" type="text" class="form-control" placeholder="Kode Semester" value="<?php echo $rapot['kode_semester'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="kode_ta" type="text" class="form-control" placeholder="Kode Tahun Ajaran" value="<?php echo $rapot['kode_ta'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nilai" type="number" class="form-control" placeholder="Nilai" value="<?php echo $rapot['nilai'] ?>">
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