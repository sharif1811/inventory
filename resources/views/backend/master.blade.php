<!DOCTYPE html>
<html lang="en">
<head>
<!----style start----->
        @include('backend.includes.style')
<!----style end----->
</head>
<body id="page-top">
<!-- Page Wrapper -->
        <div id="wrapper">
<!-- Sidebar -->
        @include('backend.includes.sidebar')
<!-- End of Sidebar -->
<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
<!-- Topbar -->
        @include('backend.includes.topbar')
<!-- End of Topbar -->

<!-- Begin Page Content -->
        @yield('content')
<!-- /.container-fluid -->
        </div>
<!-- Footer -->
        @include('backend.includes.footer')
<!-- End of Footer -->
        </div>
        </div>
<!--script--->
        @include('backend.includes.script')
<!--script--->
</body>
</html>