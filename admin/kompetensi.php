<?php
  require ("../config/koneksi.php")
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../aset/favicon1.ico">

    <title>SIANI - Admin</title>
    </head>
  <body>

           <!-- Logo SIANI kiri atas cuuy -->
      <nav class="navbar navbar-dark bg-primary fixed-top shadow-sm">
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            <img src="../aset/logo2.png" height="40" position="relative" class="d-inline-block align-top logo-position" title="siani" alt="">
            <div class="line">
            </div>
          </a>
          <h1 class="wellcome-position  text-white">
            Selamat datang "..." di SIANI MAN 4 Banyuwangi
          </h1>
        </div>

          <!-- Default dropleft button -->
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../aset/bars.png" width="25px" alt="options" title="options">
              </button>
            <div class="dropdown-menu">

                <!-- Dropdown menu links -->
                <a class="dropdown-item" href="../logout.php">log-out</a>
                <a class="dropdown-item" href="../gantipassword.php">ganti password</a>
              </div>
            </div>
        </div>
      </nav>

      <!-- content -->
    <div id="wrapper">
      <!-- sidebar -->
      <nav class="bg-blue sidebar position-fixed">
        <div class="sidebar-sticky">
          <img src="../aset/admin.png" class="rounded-circle foto-profil shadow" height="100px" alt="">
          <span class="nama jenis-font text-white text-right dropright"> Admin</span>
          <ul class="nav nav-top flex-column">
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="index.php">
                <img src="../aset/users.png" height="25px" alt="">
                 Users
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color  jenis-font " href="siswa.php">
                <img src="../aset/student.png" height="25px" alt="">
                 Data Siswa
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="guru.php">
                <img src="../aset/guru.png" height="25px" alt="">
                 Data Guru
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="mapel.php">
                <img src="../aset/mapel.png" height="25px" alt="">
                 Mata Pelajaran
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font link-active" href="#">
                <img src="../aset/kompetensi.png" height="25px" alt="">
                 Niai Kompetensi
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="raport.php">
                <img src="../aset/raport.png" height="25px" alt="">
                 Raport
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="grafik.php">
                <img src="../aset/grafik.png" height="25px" alt="">
                 Grafik
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="nilai.php">
                <img src="../aset/nilai.png" height="25px" alt="">
                 Input Nilai
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- container -->
      <div id="content-wrapper">
        <div class="container-fluid">
          <div class="card mb-3">
            <!-- ngisi kode di sini -->
            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 224px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 44px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 98px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Salary</th></tr>
                  </thead>
                  <tfoot>
                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                  </tfoot>
                  <tbody>

























































                  <tr role="row" class="odd">
                      <td class="sorting_1">Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Angelica Ramos</td>
                      <td>Chief Executive Officer (CEO)</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2009/10/09</td>
                      <td>$1,200,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>28</td>
                      <td>2011/06/07</td>
                      <td>$206,850</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Bruno Nash</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>38</td>
                      <td>2011/05/03</td>
                      <td>$163,500</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>New York</td>
                      <td>21</td>
                      <td>2011/12/12</td>
                      <td>$106,450</td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">Cara Stevens</td>
                      <td>Sales Assistant</td>
                      <td>New York</td>
                      <td>46</td>
                      <td>2011/12/06</td>
                      <td>$145,600</td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          </div>
        </div>
      </div>
        <!-- <footer class="sticky-footer bottom" id="layer">
          <div class="container my-auto">
            <div class="Copyright text-center bottom">
                <span> @Copyright Siani 2018</span>
            </div>
          </div>
        </footer> -->
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
