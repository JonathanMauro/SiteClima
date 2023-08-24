<template>
    <div>
        <div id="aviso-erro"></div>
        <div id="page-loader" class="refresh-loader">
            <div class="table">
                <div class="table-cell">
                    <svg id="" class="refresh-icon rotating" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <polygon id="path-1" points="0 18 18 18 18 0 0 0"></polygon>
                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Home_1920-1441" transform="translate(-1635.000000, -1630.000000)">
                                <g id="Group-5" transform="translate(1635.000000, 1630.000000)">
                                    <path d="M18,0 C17.9993311,2.23558441 17.9987015,4.47116883 17.9975605,6.70675324 C17.9975605,6.71886732 17.9904386,6.7309814 17.9829627,6.75478787 L10.9591784,6.75478787 C11.8434666,5.90856573 12.6952541,5.09354884 13.5695089,4.25694896 C13.4032277,4.11303676 13.2509148,3.96636439 13.0834926,3.83847651 C10.1202968,1.57479203 5.53623364,2.3014068 3.65756375,5.9173446 C3.56938674,6.08709506 3.51890433,6.27892688 3.41215546,6.43541319 C3.04024603,6.98073846 2.29162681,7.15581758 1.70574747,6.85124048 C1.11361194,6.54344318 0.842431258,5.85294063 1.09358423,5.24298138 C1.49099063,4.27784192 2.06998421,3.42299424 2.80837317,2.67402976 C4.19721016,1.26538463 5.87898682,0.394895998 7.86365798,0.0901655556 C8.06822391,0.0587302854 8.2731833,0.0299785138 8.47798531,0 L9.89448337,0 C9.93733243,0.0113090301 9.97959129,0.0288667786 10.023188,0.0330453694 C12.0415403,0.224647175 13.7838722,1.00569863 15.2597845,2.35726191 C15.3102276,2.40345642 15.3659038,2.4441306 15.4191799,2.48744993 C15.4530972,2.45961822 15.4742659,2.4446673 15.4925624,2.42687953 C16.2904442,1.65330354 17.0882081,0.879689203 17.8849095,0.10500147 C17.915561,0.0752529701 17.935628,0.0352305041 17.9606528,0 L18,0 Z" id="Fill-1" fill="#000000"></path>
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <g id="Clip-4"></g>
                                    <path d="M0,18 L0,11.2696972 L7.04545313,11.2696972 C6.16825175,12.1067999 5.31378738,12.9222587 4.44832757,13.7482522 C4.86313096,14.1633558 5.31987415,14.4873251 5.82637175,14.7445622 C8.27969252,15.9904478 11.176719,15.5763785 13.146986,13.6908287 C13.7075184,13.1543275 14.1487502,12.5314039 14.4601571,11.8247394 C14.7778863,11.1036327 15.5868767,10.7993153 16.2829673,11.1386461 C16.9705364,11.473763 17.1887961,12.2688803 16.8277526,12.9575785 C16.4116533,13.7512785 15.9487448,14.5094288 15.3276982,15.1674807 C13.783819,16.8033783 11.8830197,17.7470917 9.60982795,17.9667488 C9.5735037,17.9702348 9.53871095,17.9885843 9.50321135,18 L8.12877995,18 C8.09331962,17.9887375 8.05844834,17.970388 8.02224189,17.9672468 C6.50695091,17.8355828 5.11476972,17.3609871 3.86556866,16.5141159 C3.41711133,16.2100666 3.0027399,15.8582092 2.5635109,15.5209853 C2.54517205,15.537496 2.51108616,15.5658438 2.47955277,15.5966433 C1.69329948,16.3631064 0.907203258,17.1296461 0.12185316,17.8969519 C0.0904768551,17.9275599 0.0666010184,17.9654846 0.0392694684,18 L0,18 Z" id="Fill-3" fill="#000000" mask="url(#mask-2)"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div id="pesquisar" class="row">
            <div class="global-page-container">
                <div class="pesquisar_inner">
                    <input type="text" placeholder="Digite a cidade e o estado" id="local">
                    <div id="search-button"></div>
                    
                </div>

            </div>
        </div>
        <div id="weatherinfo">
            
            <div class="results align-middle">
                <div class="global-page-container">
                    
                    <div class="row">
                        <div id="texto_local" class="city_name col-sm-12">
                            
                        </div>
                        <div id="texto_clima" class="weather_result col-sm-12">
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <div id="icone_clima" class="weather_icon" style="background-image: url('');"></div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="temperature">
                                <div class="row">
                                    <div id="texto_temperatura" class="temp_value col-sm-12"></div>
                                    <div id="texto_max_min" class="max_min_temp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                        <div class="weather_charts col-12">
                    </div>

                            <div class="row">
                                <div id="hourly_chart" class="hourly_chart col-sm-12">
                                    Soltar gráfico hora a hora
                                </div>
                            </div>
                        </div>
                    
                    <div id="info_5dias" class="daily_info row">
                        
                      
                        
                    </div>
                    
                </div>

            </div>
            
            
        </div>
   
</template>

<script >

$(function(){
        const accuweatherApiKey = "DaWvZttsGbeeKrHk7rIWRCWPwHGrfCfl";
    
        const weatherObject = {
            cidade: "",
            estado: "",
            pais: "",
            temperatura:"",
            texto_clima: "",
            icone_clima: ""
        };
    
    
    
        function preencherClimaAgora(cidade, estado, pais, temperatura, texto_clima, icone_clima){
            const texto_local = cidade + ", " + estado + ". " + pais;
            $("#texto_local").text(texto_local);
            $("#texto_clima").text(texto_clima);
            $("#texto_temperatura").html(String(temperatura) + "&deg;");
            $("#icone_clima").css("background-image", "url('"+ weatherObject.icone_clima +"')")
        }
        
        function gerarGrafico(horas, temperaturas){
            Highcharts.chart('hourly_chart', {
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Temperatura Hora a Hora'
                },
                
                xAxis: {
                    categories: horas
                },
                yAxis: {
                    title: {
                        text: 'Temperatura (°C)'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: false
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    showInLegend: false,
                    data: temperaturas
                },]
            });

        }

       

        function pegarPrevisaoHoraaHora(localCode){

            $.ajax({
                url : "http://dataservice.accuweather.com/forecasts/v1/hourly/12hour/" + localCode + "?apikey=" + accuweatherApiKey + "&language=pt-br&metric=true",
                type: "GET",
                dataType: "json",
                success: function(data){
                    

                    const horarios = [];
                    const temperaturas = [];

                    for(let a = 0; a < data.length; a++){
                        let hora = new Date (data[a].DateTime).getHours();
                        horarios.push( String(hora) + "h")

                        temperaturas.push (data[a].Temperature.Value);

                        gerarGrafico(horarios, temperaturas);
                        $('.refresh-loader').fadeOut();
                    }

                    
                }, 
                error: function(){
                    gerarErro("Erro ao obter a previsao hora a hora")
                }
            });
            
        }

        function preencherPrevisao5Dias(previsoes){
            $("#info_5dias").html("");
            const diasSemana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];

            for(let a = 0; a < previsoes.length; a++){
                const dataHoje = new Date(previsoes[a].Date);

                const dia_semana = diasSemana[dataHoje.getDay()] ;

                const iconNumber = previsoes[a].Day.Icon <= 9 ? "0" + String(previsoes[a].Day.Icon) : String(previsoes[a].Day.Icon);
    
               iconeClima = "https://developer.accuweather.com/sites/default/files/"+ iconNumber +"-s.png";
               maxima = String(previsoes[a].Temperature.Maximum.Value);
               minima = String(previsoes[a].Temperature.Minimum.Value);

               elementoHTMLDia = "<div class='day col'>"
               elementoHTMLDia +=  '<div class="day_inner">'     
               elementoHTMLDia +=      '<div class="dayname">'              
               elementoHTMLDia +=          dia_semana;               
               elementoHTMLDia +=      '</div>'                    
               elementoHTMLDia +=   '<div style="background-image: url(\' ' + iconeClima + ' \')" class="daily_weather_icon"></div>'                  
               elementoHTMLDia +=    '<div class="max_min_temp">'                   
               elementoHTMLDia +=       minima + '&deg; / ' + maxima + '&deg;'              
               elementoHTMLDia +=    '</div>'                 
               elementoHTMLDia +=   '</div>'                      
               elementoHTMLDia +=  '</div>'               
                              
               $('#info_5dias').append(elementoHTMLDia);
               elementoHTMLDia = "";
            }

        }

        function pegarPrevisao5Dias(localCode) {

            $.ajax({
                url : "http://dataservice.accuweather.com/forecasts/v1/daily/5day/" + localCode +"?apikey=" + accuweatherApiKey + "&language=pt-br&metric=true",
                type: "GET",
                dataType: "json",
                success: function(data){
                    

                    $('#texto_max_min').html(String(data.DailyForecasts[0].Temperature.Minimum.Value) + " &deg; /" + String(data.DailyForecasts[0].Temperature.Maximum.Value)+ " &deg;");

                    preencherPrevisao5Dias(data.DailyForecasts);
                    
                }, 
                error: function(){
                    gerarErro("Erro ao obter a previsão de 5 dias!")
                }
            });
            
        }
    
        function pegarTempoAtual(localCode){
    
            $.ajax({
                url : "http://dataservice.accuweather.com/currentconditions/v1/"+ localCode +"?apikey=" + accuweatherApiKey + "&language=pt-br",
                type: "GET",
                dataType: "json",
                success: function(data){
                    
    
                    weatherObject.temperatura = data[0].Temperature.Metric.Value;
                    weatherObject.texto_clima = data[0].WeatherText;
                    const iconNumber = data[0].WeatherIcon <= 9 ? "0" + String(data[0].WeatherIcon) : String(data[0].WeatherIcon);
    
                    weatherObject.icone_clima = "https://developer.accuweather.com/sites/default/files/"+ iconNumber +"-s.png";
    
                    preencherClimaAgora(weatherObject.cidade, weatherObject.estado, weatherObject.pais,weatherObject.temperatura, weatherObject.texto_clima, weatherObject.icone_clima)
                }, 
                error: function(){
                    gerarErro("Erro ao obter clima atual");
                }
            });
        }
    
        function pegarLocalUsuario(latitude, longitude) {
            $.ajax({
                url : "http://dataservice.accuweather.com/locations/v1/cities/geoposition/search?apikey="+ accuweatherApiKey +"&q="+ latitude +"%2C"+ longitude +"&language=pt-br",
                type: "GET",
                dataType: "json",
                success: function(data){
                    
    
                    try{
                        weatherObject.cidade = data.ParentCity.LocalizedName;
                    }catch{
                        weatherObject.cidade = data.LocalizedName;
                    }
    
                   
                    weatherObject.estado = data.AdministrativeArea.LocalizedName;
    
                    weatherObject.pais = data.Country.LocalizedName;
                    
                    const localCode = data.Key;
                    pegarTempoAtual(localCode);
                    pegarPrevisao5Dias(localCode);
                    pegarPrevisaoHoraaHora(localCode);
                }, 
                error: function(){
                    gerarErro("Erro no código do local!");
                }
            });
        }
        

        function pegarCoordenadasDaPesquisa(input) {
            input = encodeURI(input);

            $.ajax({
                url : "https://us1.locationiq.com/v1/search?key=pk.fd8fb68cb3bfbd5cf72525ceafe6b610&q="+ input +"&format=json",
                type: "GET",
                dataType: "json",
                success: function(data){
                    try {

                        let long = data[0].lon;
                        let lat = data[0].lat;
                  
                        pegarLocalUsuario(lat, long)
                    } catch{
                        gerarErro("Erro na pesquisa de local")
                    }
                
                }, 
                error: function(){
                    gerarErro("Erro na pesquisa de local")
                }
            });
        }
        
        function pegarCoordenadasDoIp() {
    
            const lat_padrao = -21.761116139754378;
            const long_padrao = -43.3505577584844; 
    
    
            $.ajax({
                url : "http://www.geoplugin.net/json.gp",
                type: "GET",
                dataType: "json",
                success: function(data){
    
                    if( data.geoplugin_latitude && data.geoplugin_longitude){
    
                        pegarLocalUsuario(data.geoplugin_latitude, data.geoplugin_longitude);
                    } else {
                        pegarLocalUsuario(lat_padrao, long_padrao)
                    }
    
                 
                }, 
                error: function(){
                    console.log("ERROR");
    
                }
            });
        }
    

        function gerarErro(mensagem){
            if(!mensagem){
                mensagem = "Erro na Solicitação";

            }
            $('.refresh-loader').hide();
            $('#aviso-erro').text(mensagem);
            $('#aviso-erro').slideDown();
            window.setTimeout(function(){
                $('#aviso-erro').slideUp();
            }, 4000)
        }

        
    pegarCoordenadasDoIp();
    $("#search-button").click(function() {
        $('.refresh-loader').show();
        const local = $("input#local").val();
        if(local){
            pegarCoordenadasDaPesquisa(local);
        } else {
            alert('Local Inválido!')
        }
    })

    $("input#local").on("keypress",function(e) {
        if(e.which == 13){
            $('.refresh-loader').show();

            const local = $("input#local").val();
            if(local){
                pegarCoordenadasDaPesquisa(local);
            } else {
                alert('Local Inválido!')
            }
        }
    })



    });

    

</script>
