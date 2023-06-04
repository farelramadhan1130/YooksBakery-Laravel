use Illuminate\Support\Facades\DB;
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('admin/assets/')}}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Data Kategori</title>

    <meta name="description" content="" />

    <!-- Link CSS Table -->\
    <link rel="stylesheet" href="{{ asset ('asset/DataTables-5/DataTables-1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/DataTables-5/Buttons-2.3.3/css/buttons.bootstrap5.min.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset ('asset/image/image-website/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendor/css/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css') }}" />
    <link rel="stylesheet" href="{{ asset ('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset ('admin/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset ('admin/assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <!-- <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g> -->
                </svg>
              </span>
              <img src="{{ asset ('admin/assets/img/favicon/favicon.ico') }}" alt="..."><span class="app-brand-text demo menu-text fw-bolder">Admin</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">PERUSAHAAN</span>
            </li>

            <!-- Layouts -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Data Perusahaan</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="{{route('datakategori')}}" class="menu-link">
                    <div data-i18n="Container">Data Kategori</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('datasupplier')}}" class="menu-link">
                    <div data-i18n="Fluid">Data Supplier</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('dataproduk')}}" class="menu-link">
                    <div data-i18n="Fluid">Data Produk</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('datauser')}}" class="menu-link">
                    <div data-i18n="Fluid">Data User</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Data Transaksi</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Customers</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('datatransaksipenjualan')}}" class="menu-link">
                    <div data-i18n="Account">Customers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('datapesananpending')}}" class="menu-link">
                    <div data-i18n="Fluid">Data Pesanan Pending</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('datalaporan')}}" class="menu-link">
                    <div data-i18n="Account">Data Pesanan Lunas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('datalaporankeuntungan')}}" class="menu-link">
                    <div data-i18n="Account">Laporan Keuntungan</div>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="pages-account-settings-account.php" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.php" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.php" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-forgot-password-basic.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>=

            Forms & Tables
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
            <Forms
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.php" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.php" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.php" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.php" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li>
            <!Tables 
            <li class="menu-item">
              <a href="tables-basic.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
          </ul> -->
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <li class="menu-item col-md-0 px-0">
                    <a href="{{route('logout')}}" class="menu-link">
                      <i class=""></i>
                      <div data-i18n="Logout"><Button class="btn btn-primary bx bx-log-in-circle col-md-0 "> Logout</Button></div>
                    </a>
                  </li>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a>
                    Hi, {{ Auth::user()->nama_user }}
                  </a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('admin/assets/img/avatars/' . Auth::user()->nama_user . '.jpg')}}" alt class="w-px-40 h-px-40 rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('admin/assets/img/avatars/' . Auth::user()->nama_user . '.jpg')}} alt class="w-px-40 h-px-40 rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->nama_user }}</span>
                            <small class="text-muted">{{ Auth::user()->level }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Perusahaan /</span> Data Kategori</h4>

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Bootstrap Table -->
              <div class="card shadow">
                <h5 class="card-header"></h5>
                
                <!-- //Mendapatkan ID Toko user yang login
                // $id_toko = $_SESSION['User']['id_toko'];

                

                // echo"<pre>";
                // print_r($kategori);
                // echo"</pre>"; -->
                
                $kategori = DB::table('categories')->get();


                <div class="container col-md-0 px-2">
                  <a href="#" class="btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive text-nowrap p-2">
                <table id="kategori" class="table table-bordered display" style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Kategori</th>
                        <th>Nama</th>
                        <th>Foto Produk</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    $kategori = DB::table('categories')->get();
                    @foreach ($kategori as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->id_kategori }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $value->nama_kategori }}</strong></td>
                            <td>{{ $value->foto_kategori }}</td>
                            <td>
                                <div class='btn-group'>
                                    <a href="kategori_edit.php?id={{ $value->id_kategori }}" class='btn btn-warning'><i class="bx bx-edit-alt me-1"></i></a>&emsp;&emsp;
                                    <a href="kategori_hapus.php?id={{ $value->id_kategori }}" class='btn btn-danger'><i class="bx bx-trash me-1"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="" target="_blank" class="footer-link fw-bolder">Yooks Bakery</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Modal Tambah Kategori -->
    <?php
    //Mendapatkan ID Toko user yang login
    // $id_toko = $_SESSION['User']['id_toko'];

    // $supplier =array();
    // $ambil = $koneksi ->query("SELECT * FROM supplier WHERE id_toko='$id_toko' ");
    // while($tiap = $ambil -> fetch_assoc()){
    //   $supplier[] = $tiap;
    // }

    // echo"<pre>";
    // print_r($supplier);
    // echo"</pre>";
    ?>
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="mb-3">
                  <label for="nameWithTitle" class="form-label">Nama</label>
                  <input
                    type="text"
                    name="tambah-nama"
                    id="nameWithTitle"
                    class="form-control"
                    placeholder="Nama Kategori"
                  />
                </div>
                <div class="mb-3">
                  <label for="nameWithTitle" class="form-label">Foto</label>
                  <input
                    type="file"
                    name="tambah-foto"
                    id="nameWithTitle"
                    class="form-control"
                    placeholder="Foto Kategori"
                  />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary" name="tambah-simpan">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    <!-- END Modal Tambah Kategori -->

    <!-- Modal Edit Kategori -->
    $kategori = DB::table('categories')->get();

    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle1">Edit Kategori</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form method="POST">
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameWithTitle1" class="form-label">Nama</label>
                  <input
                    type="text"
                    name="edit-nama"
                    id="nameWithTitle"
                    class="form-control"
                    value="{{ $kategori['nama_kategori'] }}"
                  />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary" name="edit-simpan">Update</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    <!-- END Modal Edit Kategori -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset ('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset ('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset ('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset ('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset ('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset ('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Table JS -->
    <!-- JQuery -->
    <script src="{{ asset ('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset ('asset/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Data Table-Bootstrap-5 -->
    <script src="{{ asset ('asset/DataTables-5/DataTables-1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/DataTables-1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    
    <!-- Sweet Alert -->
    <script src="{{ asset ('asset/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>

    <!-- Button Bootstrap-5 -->
    <script src="{{ asset ('asset/DataTables-5/Buttons-2.3.3/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/Buttons-2.3.3/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/pdfmake-0.1.36/pdfmake.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/Buttons-2.3.3/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/Buttons-2.3.3/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('asset/DataTables-5/Buttons-2.3.3/js/buttons.colVis.min.js') }}"></script>

    <!-- END Table JS -->
    <script>
      $(document).ready(function() {
          var table = $('#kategori').DataTable( {
              buttons: [ 'excel', 'csv', 'pdf', 'print' ],
              dom: 
              "<'col-md-6 px-0 mb-4'B>"+
              "<'row'<'col-md-8'l><'col-md-4'f>>"+
              "<'row'<'col-md-12'tr>>"+
              "<'row'<'col-md-5'i><'col-md-7'p>>",
              lengthMenu:[
                [6,10,25,50,100,-1],
                [6,10,25,50,100,"All"]
              ]
          } );
      
          table.buttons().container()
              .appendTo( '#kategori_wrapper .col-md-6:eq(0)' );
      } );
    </script>
    <!-- END Fungsi Tabel JS -->

    <!-- Query Tambah Kategori -->
    <?php 
      if(isset($_POST['tambah-simpan'])){
          $nama = $_POST['tambah-nama'];
          $id_toko = $_SESSION['User']['id_toko'];
          $namafoto = $_FILES['tambah-foto']['name'];
          $lokasifoto = $_FILES['tambah-foto']['tmp_name'];

        if (!empty($lokasifoto)) {
          move_uploaded_file($lokasifoto, "../../asset/image/image-admin/kategori/".$namafoto);
          $ambil = $koneksi->query("INSERT INTO kategori (id_toko, nama_kategori, foto_kategori) VALUES ('$id_toko', '$nama', '$namafoto')");
          if (isset($ambil)) {
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'INPUT DATA KATEGORI BERHASIL',
                        text: 'Data Kategori Telah Bertambah'
                    }).then((result) => {
                        window.location.href = 'layouts-container.php'
                    })
                </script>";
          }
        }
      }
    ?>
    <!-- END Query Tambah Kategori -->

    
    <!-- Query Edit Kategori -->
    <?php 
        if(isset($_POST['edit-simpan'])){
            $nama = $_POST['edit-nama'];
            $id_toko = $_SESSION['User']['id_toko'];

            $ambil = $koneksi->query("UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori='$kategori' AND id_toko='$id_toko'");

            if (isset($ambil)) {
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'EDIT KATEGORI BERHASIL',
                            text: 'Data Kategori Telah Terupdate'
                        }).then((result) => {
                            window.location.href = 'layouts-container.php'
                        })
                    </script>";
            }
        }
        ?>
    <!-- END Query Edit Kategori -->

  </div>
  </body>
</html>
