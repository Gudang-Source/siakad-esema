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
                                <li><span class="bread-blod">Semester</span>
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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Siswa</h1>
                        </div>
                        <div class="add-product">
                            <a href="<?php echo base_url('C_admin/addsiswa'); ?>">Add Data</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                 <option value="">Export Basic</option>
                                 <option value="all">Export All</option>
                                 <option value="selected">Export Selected</option>
                             </select>
                         </div>
                         <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                         data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                         <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="nisn">Nisn</th>
                                <th data-field="nama" data-editable="true">Nama</th>
                                <th data-fielf="jk">JK</th>
                                <th data-fielf="alamat">Alamat</th>
                                <th data-fielf="foto">Foto</th>
                                <th data-fielf="Kode_kelas">Kode_kelas</th>
                                <th data-field="aksi">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;

                            foreach ($siswa as $value) { ?>
                            <tr>
                                <td></td>
                                <td><?php echo $value->nisn ?></td>
                                <td><?php echo $value->nama ?></td>
                                <td><?php echo $value->jk ?></td>
                                <td><?php echo $value->alamat ?></td>
                                <td><?php echo $value->foto ?></td>
                                <td><?php echo $value->kode_kelas ?></td>
                                
                                <td class="datatable-ct">
                                    <a href="<?php echo base_url('C_admin/editsiswa/'.$value->nisn) ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <a href="<?php echo base_url('C_admin/deletesiswa/'.$value->nisn) ?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                            <?php
                            $no++; 
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Static Table End -->
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019. All rights reserved. by <a href="https://instagram.com/">ADT</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('main/footer'); ?>