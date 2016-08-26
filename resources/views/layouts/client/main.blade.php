<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

    <title>CarZa</title>

    <link rel="stylesheet" href="/main/lib/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="/main/lib/weather-icons/css/weather-icons.css">
    <link rel="stylesheet" href="/main/lib/jquery-toggles/toggles-full.css">
    <link rel="stylesheet" href="/main/lib/jquery.steps/jquery.steps.css">
    <link rel="stylesheet" href="/main/lib/select2/select2.css">



    <link rel="stylesheet" href="/main/css/quirk.css">

    <script src="/main/lib/modernizr/modernizr.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/main/lib/html5shiv/html5shiv.js"></script>
    <script src="/main/lib/respond/respond.src.js"></script>
    <![endif]-->
</head>

<body>

@include('client.partials.header')

<section>

    @include('client.partials.menu')

    <div class="mainpanel">

        <div class="contentpanel">

            <ol class="breadcrumb breadcrumb-quirk">
                <li><a href="index.html"><i class="fa fa-home mr5"></i> Рабочий стол</a></li>
                <li><a href="buttons.html">Pages</a></li>
                <li class="active">Blank</li>
            </ol>

            @yield('content')

        </div><!-- contentpanel -->
    </div><!-- mainpanel -->
</section>

<script src="/main/lib/jquery/jquery.js"></script>
<script src="/main/lib/jquery-ui/jquery-ui.js"></script>
<script src="/main/lib/bootstrap/js/bootstrap.js"></script>
<script src="/main/lib/jquery-toggles/toggles.js"></script>

<script src="/main/js/quirk.js"></script>

@yield('js')

</body>
</html>
