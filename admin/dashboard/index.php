<?php include 'cek_login.php'; ?>
<?php include 'aksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include('koneksi.php');?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VANTA | Dashboard</title>

  <!-- Head -->
  <?php include 'head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include 'preloader.php'; ?>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
                  <p>Jumlah Buku</p>
                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $totalAdmin; ?></h3>
                  <p>Jumlah Admin</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="admin.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
                  <p>Pengunjung</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
              
                  <div class="card-tools">
              
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
              
                </div>
              
                <div class="card-body pt-0">
              
                  <div id="calendar" style="width: 100%">
                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                      <ul class="list-unstyled">
                        <li class="show">
                          <div class="datepicker">
                            <div class="datepicker-days">
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Month"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">December
                                      2023</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span>
                                    </th>
                                  </tr>
                                  <tr>
                                    <th class="dow">Su</th>
                                    <th class="dow">Mo</th>
                                    <th class="dow">Tu</th>
                                    <th class="dow">We</th>
                                    <th class="dow">Th</th>
                                    <th class="dow">Fr</th>
                                    <th class="dow">Sa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td data-action="selectDay" data-day="11/26/2023" class="day old weekend">26</td>
                                    <td data-action="selectDay" data-day="11/27/2023" class="day old">27</td>
                                    <td data-action="selectDay" data-day="11/28/2023" class="day old">28</td>
                                    <td data-action="selectDay" data-day="11/29/2023" class="day old">29</td>
                                    <td data-action="selectDay" data-day="11/30/2023" class="day old">30</td>
                                    <td data-action="selectDay" data-day="12/01/2023" class="day">1</td>
                                    <td data-action="selectDay" data-day="12/02/2023" class="day weekend">2</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/03/2023" class="day weekend">3</td>
                                    <td data-action="selectDay" data-day="12/04/2023" class="day">4</td>
                                    <td data-action="selectDay" data-day="12/05/2023" class="day">5</td>
                                    <td data-action="selectDay" data-day="12/06/2023" class="day">6</td>
                                    <td data-action="selectDay" data-day="12/07/2023" class="day">7</td>
                                    <td data-action="selectDay" data-day="12/08/2023" class="day">8</td>
                                    <td data-action="selectDay" data-day="12/09/2023" class="day weekend">9</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/10/2023" class="day weekend">10</td>
                                    <td data-action="selectDay" data-day="12/11/2023" class="day">11</td>
                                    <td data-action="selectDay" data-day="12/12/2023" class="day">12</td>
                                    <td data-action="selectDay" data-day="12/13/2023" class="day">13</td>
                                    <td data-action="selectDay" data-day="12/14/2023" class="day">14</td>
                                    <td data-action="selectDay" data-day="12/15/2023" class="day">15</td>
                                    <td data-action="selectDay" data-day="12/16/2023" class="day active today weekend">16</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/17/2023" class="day weekend">17</td>
                                    <td data-action="selectDay" data-day="12/18/2023" class="day">18</td>
                                    <td data-action="selectDay" data-day="12/19/2023" class="day">19</td>
                                    <td data-action="selectDay" data-day="12/20/2023" class="day">20</td>
                                    <td data-action="selectDay" data-day="12/21/2023" class="day">21</td>
                                    <td data-action="selectDay" data-day="12/22/2023" class="day">22</td>
                                    <td data-action="selectDay" data-day="12/23/2023" class="day weekend">23</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/24/2023" class="day weekend">24</td>
                                    <td data-action="selectDay" data-day="12/25/2023" class="day">25</td>
                                    <td data-action="selectDay" data-day="12/26/2023" class="day">26</td>
                                    <td data-action="selectDay" data-day="12/27/2023" class="day">27</td>
                                    <td data-action="selectDay" data-day="12/28/2023" class="day">28</td>
                                    <td data-action="selectDay" data-day="12/29/2023" class="day">29</td>
                                    <td data-action="selectDay" data-day="12/30/2023" class="day weekend">30</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/31/2023" class="day weekend">31</td>
                                    <td data-action="selectDay" data-day="01/01/2024" class="day new">1</td>
                                    <td data-action="selectDay" data-day="01/02/2024" class="day new">2</td>
                                    <td data-action="selectDay" data-day="01/03/2024" class="day new">3</td>
                                    <td data-action="selectDay" data-day="01/04/2024" class="day new">4</td>
                                    <td data-action="selectDay" data-day="01/05/2024" class="day new">5</td>
                                    <td data-action="selectDay" data-day="01/06/2024" class="day new weekend">6</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Year"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span
                                        data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth"
                                        class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span
                                        data-action="selectMonth" class="month">May</span><span data-action="selectMonth"
                                        class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span
                                        data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth"
                                        class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span
                                        data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth"
                                        class="month active">Dec</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Decade"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029
                                    </th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span
                                        data-action="selectYear" class="year">2020</span><span data-action="selectYear"
                                        class="year">2021</span><span data-action="selectYear" class="year">2022</span><span
                                        data-action="selectYear" class="year active">2023</span><span data-action="selectYear"
                                        class="year">2024</span><span data-action="selectYear" class="year">2025</span><span
                                        data-action="selectYear" class="year">2026</span><span data-action="selectYear"
                                        class="year">2027</span><span data-action="selectYear" class="year">2028</span><span
                                        data-action="selectYear" class="year">2029</span><span data-action="selectYear"
                                        class="year old">2030</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Century"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectDecade" class="decade old"
                                        data-selection="2006">1990</span><span data-action="selectDecade" class="decade"
                                        data-selection="2006">2000</span><span data-action="selectDecade" class="decade"
                                        data-selection="2016">2010</span><span data-action="selectDecade" class="decade active"
                                        data-selection="2026">2020</span><span data-action="selectDecade" class="decade"
                                        data-selection="2036">2030</span><span data-action="selectDecade" class="decade"
                                        data-selection="2046">2040</span><span data-action="selectDecade" class="decade"
                                        data-selection="2056">2050</span><span data-action="selectDecade" class="decade"
                                        data-selection="2066">2060</span><span data-action="selectDecade" class="decade"
                                        data-selection="2076">2070</span><span data-action="selectDecade" class="decade"
                                        data-selection="2086">2080</span><span data-action="selectDecade" class="decade"
                                        data-selection="2096">2090</span><span data-action="selectDecade" class="decade old"
                                        data-selection="2106">2100</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </li>
                        <li class="picker-switch accordion-toggle"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="https://vantatranslation.site">VANTA Translation</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Scripts -->
  <?php include 'script.php'; ?>
</body>

</html>