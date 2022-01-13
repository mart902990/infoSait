 $(document).ready(function () {
     $('.butCity').on('click', myAjax3);
         
    }); 
            function myAjax3() {
                $.ajax({
                    url: "http://api.openweathermap.org/data/2.5/weather",
                    type: "GET",
                    data: { "q": $('#city1').val(),
                            "appid" : "27a1d09d4954cd2b045e899fe11c76fb"
                    }, 
                    success: function(data){
                        let out = '';
                        out += ' Погода : ' + data.weather[0].main+ '<br>';
                        out += 'температура' + data.main.temp + '<br>';
                        out += 'влажность' + data.main.humidity + '<br>';
                              $('#message2').html(out);                    
                        console.log(data.main, data.weather);

                            }
                });

            }
