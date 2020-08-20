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
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Add Jurusan</span>
                                </li>
                            </ul>
                        </div> -->
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
                        <li class="active"><a href="#description">Add Data</a></li>
                        <!-- <li><a href="#reviews"> Acount Information</a></li>
                            <li><a href="#INFORMATION">Social Information</a></li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <?php echo form_open_multipart("C_siswa/add"); ?>
                                                <?php echo validation_errors(); ?>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="nisn" type="text" class="form-control" placeholder="NISN">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                                                            </div>

                                                            <!-- <div class="form-group">
                                                                <input name="jk" class="form-control" placeholder="Jenis Kelamin" disabled>
                                                            </div> -->

                    
                       <!--  <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Laki-Laki</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Perempuan</label>
                        </div> -->

                    
                                                            <div class="form-group">
                                                                <input name="jk" type="text" class="form-control" placeholder="JK">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                                                            </div>

                                                            <!-- <div class="custom-file">
                                                                <input name="foto" type="file" class="custom-file-input" id="validatedCustomFile" required placeholder="Foto">
                                                            </div> -->

                                                            <div class="form-group">
                                                                <input name="foto" type="text" class="form-control" placeholder="Foto">
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="kode_kelas" type="text" class="form-control" placeholder="Kode Kelas">
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
                        <!-- <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                           <div class="col-lg-12">
                                              <div class="devit-card-custom">
                                                 <div class="form-group">
                                                    <input type="url" class="form-control" placeholder="Facebook URL">
                                                </div>
                                                <div class="form-group">
                                                    <input type="url" class="form-control" placeholder="Twitter URL">
                                                </div>
                                                <div class="form-group">
                                                    <input type="url" class="form-control" placeholder="Google Plus">
                                                </div>
                                                <div class="form-group">
                                                    <input type="url" class="form-control" placeholder="Linkedin URL">
                                                </div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php $this->load->view('main/footer'); ?>