<!--

=========================================================
- Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

- Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
- Copyright 2021 Themesberg (https://www.themesberg.com)
- License (https://themesberg.com/licensing)

- Designed and coded by https://themesberg.com

=========================================================

- The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets.admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets.admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets.admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets.admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets.admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Start CSS -->
    <!-- Volt CSS -->
   @include('layouts.admin.css')
     <!-- END CSS -->

</head>

<body>
     {{-- Start Sidebar --}}
    @include('layouts.admin.sidebar')
     {{-- END Sidebar --}}

    <main class="content">

         {{-- Start Header --}}
        @include('layouts.admin.header')
         {{-- END Header --}}

        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Data Pelanggan</h1>
                    <p class="mb-0">List data seluruh pelanggan</p>
                </div>
                <div>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-success text-white">
                        <i class="far fa-question-circle me-1"></i> Tambah Pelanggan
                    </a>
                </div>
            </div>
        </div>
         {{-- START Main Content --}}
        @yield('content')
        {{-- END Main Content --}}

        {{-- START Footer --}}
        @include('layouts.admin.footer')
        {{-- END Footer --}}
    </main>

    {{-- START JS --}}
    @include('layouts.admin.js')
    {{-- END JS --}}

</body>

</html>
