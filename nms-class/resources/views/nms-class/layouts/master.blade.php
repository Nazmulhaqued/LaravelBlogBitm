<!DOCTYPE html>
<html lang="en">

<head>

 @include('nms-class.partials.header')

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('nms-class.partials.nav')
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            @yield('content')

        </div>

        <!-- Blog Sidebar Widgets Column -->


    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    @include('nms-class.partials.footer')

</body>

</html>
