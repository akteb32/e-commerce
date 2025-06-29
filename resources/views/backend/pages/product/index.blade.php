@extends('layout.backend.backmaster')

@section('backend_main')



  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Admin Template</title>
  </head>

  <body>

    <div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Tables</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
          data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
          href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
        </div>
      </div>
      </div>
      <!--end breadcrumb-->
      <h6 class="mb-0 text-uppercase">product table</h6>
      <hr />
      <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">slug</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">short_description</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">sku</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">price</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">sale_price</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">cost_price</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">stock_quantity</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">min_quantity</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">weight</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">dimensions</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">is_active</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">is_featured</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">manage_stock</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">stock_status</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">image</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">gallery</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">meta_title</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">meta_description</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">rating_average</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">rating_count</th>


            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Create_at</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Update_at</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" colspan="2">
            Action</th>
            <th></th>

          </tr>
          </thead>
          
          <tbody>

          @foreach($products as $product)

        <tr>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->id}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->name}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->slug}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->description}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->short_description}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->sku}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->price}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->sale_price}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->cost_price}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->stock_quantity}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->min_quantity}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->weight}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->dimensions}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->is_active}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->is_featured}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->manage_stock}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->stock_status}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->image}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->gallery}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->meta_title}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->meta_description}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->rating_average}}</p>
        </td>
        <td>
        <p class="text-xs font-weight-bold mb-0">{{$product->rating_count}}</p>
        </td>
        
        



        <td class="align-middle text-center text-sm">
        <p class="text-xs font-weight-bold mb-0">{{$product->created_at}}</p>
        </td>
        <td class="align-middle text-center">
        <p class="text-xs font-weight-bold mb-0">{{$product->updated_at}}</p>
        </td>
        <td class="align-middle text-center">
        <a href="/product-edit/{{$product->id}}"
          class="btn btn-sm btn-outline-success rounded-pill shadow-sm px-3">Edit</a>
        </td>
        <td class="align-middle text-center">
        <form method="POST" action="/product-delete/{{$product->id}}">
          @CSRF
          @method('DELETE')
          <button type="submit"
          class="btn btn-sm btn-outline-danger rounded-pill shadow-sm px-3">Delete</button>
        </form>
        </td>
        </tr>

      @endforeach

          </tbody>

          <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
          </tfoot>
        </table>
        </div>
      </div>
      </div>
    </div>
    </div>

    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
    </div>


    <!--end wrapper-->
    <!--start switcher-->


    <div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
      <div class="d-flex align-items-center">
      <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
      <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
      </div>
      <hr />
      <h6 class="mb-0">Theme Styles</h6>
      <hr />
      <div class="d-flex align-items-center justify-content-between">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
        <label class="form-check-label" for="lightmode">Light</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
        <label class="form-check-label" for="darkmode">Dark</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
        <label class="form-check-label" for="semidark">Semi Dark</label>
      </div>
      </div>
      <hr />
      <div class="form-check">
      <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
      <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
      </div>
      <hr />
      <h6 class="mb-0">Header Colors</h6>
      <hr />
      <div class="header-colors-indigators">
      <div class="row row-cols-auto g-3">
        <div class="col">
        <div class="indigator headercolor1" id="headercolor1"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor2" id="headercolor2"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor3" id="headercolor3"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor4" id="headercolor4"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor5" id="headercolor5"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor6" id="headercolor6"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor7" id="headercolor7"></div>
        </div>
        <div class="col">
        <div class="indigator headercolor8" id="headercolor8"></div>
        </div>
      </div>
      </div>
      <hr />
      <h6 class="mb-0">Sidebar Colors</h6>
      <hr />
      <div class="header-colors-indigators">
      <div class="row row-cols-auto g-3">
        <div class="col">
        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
        </div>
        <div class="col">
        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!--end switcher-->









    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
    </script>
    <script>
    $(document).ready(function () {
      var table = $('#example2').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print']
      });

      table.buttons().container()
      .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
  </body>

  </html>

  









@endsection