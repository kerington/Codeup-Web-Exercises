$(document).ready(function(){
    "use strict";

var APPID = "6879bfa2d872b16d5247174192a7f765"
var url = "http://api.openweathermap.org/data/2.5/forecast/daily";

//make a function for making an Ajax request to the OpenWeatherMap API to return a weather object
function getWeather() {
    $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
        APPID: APPID,
        q: "San Antonio, TX",
        //lat: 29.423017
        //long:-98.48527
        cnt:7,
        units: "imperial"
    }).fail(function(data, status) {
        alert("Failed to load: " + status);
    }).done(function(data) {
        console.log(data);
    });
}

getWeather();

});
