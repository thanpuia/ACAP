<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'ACAP') }}</title> -->
    <title>ACAP</title>
    <link rel = "icon" href =  "/images/acap_mini.png"

        type = "image/x-icon"> 

        


    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet"> 
	{{-- <link href="{{ mix('/css/rtl.css') }}" rel="stylesheet">  --}}
<!-- the above is new for multiselect -->
 
<!-- the above is new for multiselect -->



	@yield('css')


</head>

<body class="app">

 

    @include('admin.partials.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('admin.partials.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('admin.partials.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

						@include('admin.partials.messages') 
						@yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>An official Government Aizawl College Administration Portal</span>
            </footer>
        </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

    @yield('js')

 
</body>

</html>
