<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @if (\Request::is('user'))
            @include('partials.sidebar-user')
        @elseif (\Request::is('admin'))
            @include('partials.sidebar-admin')
        @elseif (\Request::is('catering'))
            @include('partials.sidebar-admin')
        @endif

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')

                <!-- Begin Page Content -->

                {{-- Content --}}
                @yield('content')

                 <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
