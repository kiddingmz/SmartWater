<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/celestial/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Oct 2020 23:33:25 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    @include('base.include-css')
</head>
<body>
<div class="container-scroller">
    @include('base.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-delete-outline"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles primary"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default border"></div>
                </div>
            </div>
        </div>
        <!-- partial -->
        @include('base.sidebar')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            @include('base.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('base.include-js')

{{-- Tratamento de mensagens de sucesso--}}
@include('base.show-feedbacks')

</body>
</html>
