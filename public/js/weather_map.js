$(document).ready(function(){
    "use strict";

var APPID = "7f8e3aa0aad113510e0c1eaafd1c17b8"
var url = "http://api.openweathermap.org/data/2.5/forecast/daily";

//make a function for making an Ajax request to the OpenWeatherMap API to return a weather object
function getWeather() {
    $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
        APPID: APPID,
        q: "San Antonio, TX",
        //lat: 29.423017
        //long:-98.48527
        cnt:3,
        units: "imperial"
    }).fail(function(data, status) {
        alert("Failed to load: " + status);
    }).done(function(data) {
        var htmlString = "";
        data.list.forEach (function(weather){
        htmlString += "<div class='max'>" + weather.temp.max + " / " + weather.temp.min + "</div>";
        
        console.log(data.list);
        });
            $("#weather").html(htmlString)
    });
}

getWeather();

});


// practice writing console.logs of various parts of the OpenWeatherMap object...
    // console.log the humidity of the 2nd day
    // console.log the humidity of all the days (maybe use .forEach?)
    // console.log the temprature of the 3rd day in celsius
    // console.log the temprature of the 3rd day in fahrenheit
    // console.log all types of information you will ultimately display for a single day in the 3-day forcast div
    // console.log all type of information you will ultimately display for all days in the 3-day forcast divs