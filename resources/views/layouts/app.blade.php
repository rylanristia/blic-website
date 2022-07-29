<!--
Note:

ini layouts untuk halaman admin, manage semua content untuk user
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('./template/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('./template/assets/img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    @include('includes.admin.styles')
</head>

<body class="g-sidenav-show dark-version bg-gray-600">
    {{-- logoutmodal --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel" style="color: #323232 !important">Log out
                        confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color:#323232">
                    If you click logout, you're need to login again to manage the library information
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf

                        <a class="" href=" {{ route('logout') }}">
                            <button class="btn btn-primary " type="submit">
                                Logout
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('includes.admin.sidenav')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('includes.admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <!-- start the content from here  -->
            @yield('content')
            <!-- end the content here -->
            @include('includes.admin.footer')
        </div>
    </main>
    @include('includes.admin.scripts')
</body>

</html>
