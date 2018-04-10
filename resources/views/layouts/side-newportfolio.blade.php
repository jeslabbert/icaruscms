<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;

            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;

            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {

            padding: 0 10px;
            color: white;
            background-color: #4f4f4f;
            border: none;
            opacity: 0.25;
            display: inline-block;
            border-radius: .25em;
        }

        .step.active {
            opacity: 1;
            background-color: #f39c12;
            border-radius: .25em;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            opacity: 1;
            background-color: #4CAF50;
            border-radius: .25em;
        }
    </style>
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
</body>
</html>
