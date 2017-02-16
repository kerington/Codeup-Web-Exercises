(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray = planetsString.split('|');

    // TODO: Convert planetsString to an array, save it to planetsArray.


    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log()
    // your results.
    //       Why might this be useful?
    var planetsString = planetsArray.join('<br>');

    console.log(planetsString);

    // Bonus: Create a second string that would display your planets in an
    // undordered list.
    //        You will need an opening AND closing <ul> tags around the
    // entire string, and <li> tags around each planet.
    //        console.log() your results.


    /*FIRST ATTEMPT UL*/
    // var planet2String = "Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, Neptune";
    // var planet2Array = planet2String.split(',');
    // var list = "<ul><li>" + planetsArray.join('</li><li>') + "</li></ul>";

    /*SECOND ATTEMPT UL*/
    var unorderedList = "<ul><li>";
    unorderedList += planetsArray.join("</li><li>");
    unorderedList += "</li></ul>";

    console.log(unorderedList);


//array; split with comma space
    
})();
