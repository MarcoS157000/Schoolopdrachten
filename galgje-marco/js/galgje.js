var buttons;
var aantalGokkenTotaal = 0;
var aantalGokkenGoed = 0;
var aantalTotaleLettersGoed = 0;
var maxAantalLevens = 12;
var gekozenLetter;
var geradenLetters = [];

var woord='chocolade' ;

alfabet=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

function init(){

    document.getElementById("maxAantalLevens").innerHTML = maxAantalLevens;

    for (var i = 0; i < woord.length; i++) {
        var woordHolder = document.getElementById("woord");
        letterHolder = document.createElement('li');
        letterHolder.setAttribute('class', 'letter');
        letterHolder.innerHTML = "_";

        geradenLetters[i] = letterHolder;

        woordHolder.appendChild(letterHolder);
    }
}
init();


document.getElementById('galgje').onkeypress = returnPressedLetter;

function returnPressedLetter(key) {
    
    if ( (key.charCode <= 122 && key.charCode >= 97) || (key.charCode <= 90 && key.charCode >= 65) ) {

        var pressedLetter = String.fromCharCode(key.keyCode || key.charCode).toLowerCase();

        checkLetter(pressedLetter);
    }
}

var knoppen = document.getElementById("alfabet_knoppen");

knoppen.addEventListener("click", returnChosenLetter);

function returnChosenLetter(letter) {
    
    if (letter.target !== letter.currentTarget) {
        checkLetter(letter.target.id);
    } 
}


function checkLetter(gekozenLetter) {
    var gekozenLetterKnop = document.getElementById(gekozenLetter);

    if(gekozenLetterKnop.classList.contains("active") === false) {
        gekozenLetterKnop.classList.add("active");

        aantalGokkenTotaal++;
        document.getElementById("aantalGokkenTotaal").innerHTML = aantalGokkenTotaal;

        for (var i = 0; i < woord.length; i++) {
           
            if (woord[i].toLowerCase() === gekozenLetter) {
               
                geradenLetters[i].innerHTML = woord[i];

                aantalTotaleLettersGoed += 1;
            }
        }

        checkGekozenLetter(gekozenLetter);

    } else {
        return false;
    }
}



function checkGekozenLetter(letter){
    
    var j = (woord.toLowerCase().indexOf(letter));
    if (j === -1) {

        maxAantalLevens--;
        document.getElementById("maxAantalLevens").innerHTML = maxAantalLevens;

        veranderPlaatje(maxAantalLevens);

        checkVerlies(maxAantalLevens);
    } else {
       
        aantalGokkenGoed++;
        document.getElementById("aantalGokkenGoed").innerHTML = aantalGokkenGoed;

        checkWinst(aantalTotaleLettersGoed);
    }
}

function checkWinst(lettersGoed) {
    if(woord.length === lettersGoed){
        if( alert('Gefeliciteerd. Het woord was ' + woord + '. Succes verder.') ){
        } else {
            window.location.reload();
        }
    }
}

function checkVerlies(levens) {
    if(levens < 1){
        if( alert('Je hebt verloren. Alles is voorbij. Jammer hoor.') ){
        } else {
            window.location.reload();
        }
    }
}

function veranderPlaatje(levens) {
    document.getElementById("img_levens").src = "img/levens/galgje"+levens+".jpg";
}
    
    console.log(woord);
