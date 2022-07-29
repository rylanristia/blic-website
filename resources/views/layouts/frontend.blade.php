<!--
Note:

ini layouts untuk halaman frontend
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
    @include('includes.styles')
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #323232 !important">Log out
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
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <!-- start the content from here  -->
            <main>
                @yield('content')
            </main>
            <!-- end the content here -->
        </div>
    </main>
    @include('includes.footer')
    @include('includes.admin.scripts')
</body>

</html>
