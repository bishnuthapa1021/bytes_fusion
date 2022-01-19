<!DOCTYPE html>
<html lang="en">

	@include('backend.admin.includes.head')
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            @include('backend.admin.includes.header')
			<!-- /Header -->

			<!-- Sidebar -->
           @include('backend.admin.includes.sidebar')
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
           @yield('content')
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		@include('backend.admin.includes.script')
    </body>
</html>
