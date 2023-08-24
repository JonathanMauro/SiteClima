<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Weather App') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.highcharts.com/highcharts.js" defer></script>
    <!--script src="{{asset('../scripts.js')}}" defer></script-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <div id="app">
       
        <main class="py-4">
            @yield('content')
            
        </main>
    </div>
</body>
</html>



<!--API:   DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl  -->

<!-- curl -X GET "http://dataservice.accuweather.com/currentconditions/v1/172164?apikey=DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl" -->


<!-- curl -X GET "http://dataservice.accuweather.com/locations/v1/cities/geoposition/search?apikey=DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl&q=-21.76254680832493%2C%20-43.34293201532699&language=pt-br"
 -->

 <!-- http://www.geoplugin.net/json.gp -->

 <!--curl -X GET "http://dataservice.accuweather.com/forecasts/v1/daily/5day/172164?apikey=DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl&language=pt-br"-->


 <!--curl -X GET "http://dataservice.accuweather.com/forecasts/v1/hourly/12hour/172164?apikey=DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl&language=pt-br&metric=true"-->

 <!--https://locationiq.com/-->