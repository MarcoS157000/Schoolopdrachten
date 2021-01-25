function convertToJason(response){
    return response.json();

}
function processData(data){
    console.log(data); 
    
    document.getElementById("SchipNaam").innerHTML = document.getElementById("SchipOi").value;
    document.getElementById("Seizoen").innerHTML = document.getElementById("Seizoenen").value;
    document.getElementById("resultaat").innerHTML = data.resultaat;    
}
function senddata(){
    var schip = document.getElementById('SchipOi').value;
    var gewicht = document.getElementById('Gewichtbox').value;
    var lading = document.getElementById('ladingid').value;
    var seizoen = document.getElementById('Seizoenen').value;
    var water = document.getElementById('Watersoort').value;
    var Ladingopmoment = document.getElementById('LadingOpditmomentMomentID').value;
    

var urltosend = 'schepen.php?schip=' + schip + '&gewicht=' +gewicht + '&lading='+ lading +'&LadingOpditmomentMomentID='+ Ladingopmoment + '&seizoenen='+ seizoen + '&zoutZoet='+ water;
console.log(urltosend)

fetch(urltosend)
    .then(convertToJason)
    .then(processData)
}