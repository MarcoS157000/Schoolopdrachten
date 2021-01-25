<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleberekenaar.css"/>
    <script src="Javascript/data.js" defer> </script>
    <title>Bestevear berekenaar</title>     
  </head>
<body>

    <a href="logout.php">Logout</a><br>
        <a class="button" href="http://localhost/project/bestevear-main/">Back To Home!</a>
        <h1>The Bestevaer calculator</h1><br>
    <br>
	<br>
	Hello, <?php echo $user_data['user_name']; ?>

    <main>

<div class="Achtergrondcontainer">


 <div id="htmlforms">
  <div class="Formsitems">
<br><br>
<form action="schepen.php" method="GET">
<center>
<table class="FormTable">
    <tr>
        <td colspan="3" style="text-align:center;">
            <h1 id="TextForms">Bestevaer Lading Calculator </h1>
        </td>
    </tr>    
    <tr>
        <td></td>
        <td></td>
        <td rowspan="7">
            <div class="myresult">
                <div class="Results" id="SchipNaam">*Naam boot*</div>
                <div class="Results" id="Seizoen">*Seizoen*</div>
                <div class="Results" id="resultaat">*Resultaat*</div>
            </div>
        </td>
    </tr>    
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Schepen:</label>
        </td>
        <td>
            <select name="schip" id="SchipOi">
                <option value="NSANGELA">NSANGELA</option>
                <option value="LUCKYSTAR">LUCKYSTAR</option>
                <option value="SABRINA">SABRINA</option>
                <option value="HERMES">HERMES</option>
                <option value="TRIUMPHIV">TRIUMPHIV</option>
            </select> 
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms">Gewicht: (TON)</label>
        </td>    
        <td>
            <input type="text" id="Gewichtbox" name="gewicht">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Groote lading: (M3)</label>
        </td>    
        <td>
            <input type="text" id="ladingid" name="lading">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Lading die je al hebt:(M3)</label>
        </td>    
        <td>
            <input type="text" id="LadingOpditmomentMomentID" name="ladingOpditmoment">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Seizoen:</label>
        </td>    
        <td>
            <select name="seizoenen" id="Seizoenen">
                <option value="lente"> Lente</option>
                <option value="zomer">Zomer</option>
                <option value="herfst">Herfst</option>
                <option value="winter">Winter</option>
            </select>
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Wat voor water:</label>
        </td> 
           
        <td>
            <select name="zoutZoet" id="Watersoort"> 
                <option value="zout">Zoet</option>
                <option value="zout">Zout</option>
            </select>
        </td>    
    </tr>
    <tr>
        <td colspan="3" class="td-center">
            <br><br>
            <input name="submit" type="button" id="BerekenButton" onclick="senddata()" value="Gewicht Berekenen"> 
        </td>
    </tr>    
</table>
</form>
</div>
</div>
    
    
    <a href="https://www.myshiptracking.com/vessels/ns-angela-mmsi-214182759-imo-9071076"></a>
    <a href="https://www.myshiptracking.com/vessels/lucky-star-mmsi-214182775-imo-0"></a>
    <a href="https://www.myshiptracking.com/vessels/sabrina-mmsi-636013067-imo-0"></a>
    <a href="https://www.myshiptracking.com/vessels/hermes-mmsi-214182786-imo-0"></a>
    <a href="https://www.myshiptracking.com/vessels/triumph-iv-mmsi-214182719-imo-0"></a>
   
 </div>

 



 </main>


 <footer>
 </footer>

 
</body>
</html>