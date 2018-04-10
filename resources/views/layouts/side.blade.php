<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
@include('partials.customcss')
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div id="wrapper">
@include('partials.topbar')
@include('partials.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>
</div>
@include('partials.javascripts')
<script>
    var target = window.location.hash;
    $('a[href=' + target + ']').click();
</script>
<script type="text/javascript">

    Dropzone.options.imageUpload = {

        maxFilesize  : 1,
//        maxFiles: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"

    };

</script>

</body>
</html>
