<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href='http://fonts.googleapis.com/css?family=Raleway:200,300' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="../images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
<link rel="manifest" href="../js/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<title>A Creations</title>
    <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
    <script src="../js/liquidFillGauge.js" language="JavaScript"></script>
        <script src="../js/jquery.countdown.js" language="JavaScript"></script>
</head>

<body id="project">

<header>
<div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="about.php">About me</a>
                                
                                    </li>
                                    <li>
                                        <a href="portfolio.php">Portfolio</a>
                                        </li>
                            <li>
                                 <li><a href="drawings.php">Drawings</a></li>   
                                  <li><a href="contact.php">Contact</a></li>    
                                
                            </li>
                                    
                                
                        </ul>
                        </div>
<nav>
<div class="wrapper">

<div class="logo"><a href="../index.php" ><img src="../images/logo.png" alt="ACreations"></a></div>

</div>
</nav>
</header>



    <div class="project-title-lewitt">
            <h1>Zelfgeschreven framework</h1>
    </div>
    <div class="wrapperproject">
    <div class="single-post-arrows single-prev-post"><span><a style="left: -565.2px;" href="app.php" class="single-prev-post-a"></a></span><a style="left: -565.2px; opacity: 0.2;" href="app.php" rel="next">Get your app together</a></div>
    <div class="single-post-arrows single-next-post"><span><a style="right: -546.2px;" href="seo.php" class="single-next-post-a"></a></span><a style="right: -246.2px; opacity: 0.2;" href="seo.php" rel="prev">SEO</a></div>

        <div class="titelreflectie">
            <span>
            <h3>REFLECTIE</h3>
            </span>
        </div>

        <p>Ik heb veel geleerd met deze workshop. Ik weet nu hoe ik een library moet maken. Nadat ik een aantal voorbeelden had gezien en zelf hebt geprobeerd snapte ik goed hoe een library werkt. De structuur van een library methode is niet zo moeilijk om te begrijpen. Ook heb je niet veel code nodig om je framework uit te voeren. Dit gaat met de library een stuk sneller. Ik snap nu ook waarom je een framework opslaat in Github. Hierdoor kunnen andere mensen jouw framework gebruiken en ze kan helpen. Met duidelijke documentatie bij het project maakt het voor diegene ook een stuk makkelijker om aanpassingen aan de framework te doen. Zo hoeven ze niet teveel tijd te besteden om de code te snappen. Deze kennis kan ik goed gebruiken voor later als ik met nog meer frameworks aan de slag ga. </p>
        <p>Nadat ik feedback had gekregen ben ik aan de slag gegaan om het framework aanpasbaar te maken. Dit was een heel karwei voor mij. Als eerst wilde ik globale variabeles aan maken waardoor je dus overal de value van de variabele kon aanpassen. Op internet las ik dat dit niet goed was als je dit deed bij een framework. Het zat namelijk zo dat als een gebruiker dezelfde namen heeft voor een andere variabele, de globale variabele de value hiervan zal veranderen. Dit is daarom niet verstandig. Met dit heb ik dus geleerd dat je eigenlijk nooit globale variabeles moet gebruiken als je de code wilt gaan delen. Van de leraar kreeg ik te horen dat je het via parameters de values moet doorgeven.  Ik had me nog nooit echt goed verdiept in parameters. Hiervoor moest ik me gaan verdiepen. Op verschillende websites en tutorials ben ik gaan kijken en leren hoe je parameters gebruikt en hoe je dit buitenaf doet van een functie. Ik kwam eruit dat het beste was om een array te gebruiken met daarin variabeles waarbij je in de parameters de values verandert. Ik ben toen gaan programmeren en ik ben blij dat het me is gelukt. Hier heb ik veel tijd aan besteed. Ook met behulp van de code van de leraar is het me gelukt. Ik snap nu ook dat een framework aanpasbaar moet zijn voor de gebruikers. Ik dacht dat je in de framework de code kon aanpassen, maar dat is niet de bedoeling. Het is juist de bedoeling dat ze van buitenaf dingen kunnen aanpassen. Dit heb ik nu ook geleerd.</p><br>

                 <div class="titeluitleg">
            <span>
            <h3>UITLEG</h3>
            </span>
            </div>
            
        <div class="projecttext">
        <p>Met deze workshop gingen we een eigen framework maken. Ik moest een van de 6 Javascript library manieren uitkiezen. Ik heb voor deze manier gekozen:</p>

        <code>var o = {<br>
        method: function(){};<br>
        }
        </code>

        <p>Deze methode heb ik daarna onderzocht. Hoe moet ik dit schrijven en hoe gebruik ik dit? Ik had nog nooit met een framework gewerkt en ook niet een library geschreven. Het was voor mij dan ook op het begin moeilijk om dit te gaan schrijven. Door middel van de websites die werden aangeboden (http://eloquentjavascript.net/06_object.html ) voor meer informatie en zelf te hebben gezocht op google kwam ik al gauw te weten hoe je deze methode nou moet schrijven. Doordat je vast zit aan een methode, raak je al gauw gewend om deze manier aan te houden. Ik begon eerst met wat makkelijke code om te testen of het werkte:</p>

        <code><span>//object aanmaken</span><br>
        var duck = {<br>
        speak : function(line) <br>
        {<br>
        console.log("The duck says '" + line + "'");<br>
        }<br>
        };<br>
        duck.speak("I'm swimming.");<br>
        <span>// The duck says 'I'm swimming.'</span>
        </code>


        <p>Om nog een stapje verder te gaan wilde ik graag een validatiesysteem ontwerpen voor het kopen van ticketsdie gebruik maakt van een eigen framework en library. Bij de website voor ons concept is dit ook belangrijk. Dit gebruik je voor het kopen van tickets. Daarbij moet je gegevens invullen om een ticket te kopen. Dit kwam uit de twee userstories die we hadden opgesteld. Met deze twee user stories kan ik het ticketsysteem maken: </p>

        <p>“Als gebruiker wil ik makkelijk tickets kunnen kopen zodat ik niet afhaak bij het betalen.”
        Als gebruiker wil ik een overzicht te zien krijgen van de verschillende tickets zodat ik een geschikte ticket kan kopen.”</p>

        <p>Met de vorige librarys die ik al had gemaakt, lukte het nu beter. De methode wist ik nu ook al uit mijn hoofd dus kon ik het makkelijker uitschrijven. Deze framework heb ik op <a href="https://github.com/annemijn/frameworkTicketsysteem">Github</a> gezet zodat je makkelijker de code kan bekijken. Verder heb ik een readme bijgevoegd waarin uitgelegd staat wat voor framework is en welke code je kan veranderen om aanpassingen te doen. Klik <a href="http://i315962.iris.fhict.nl/ticketsysteem/framework.html">hier</a> om de framework te zien.</p>

        <p>Als eerste heb ik mijn library aangeroepen in index.html:</p>

        <pre><span class="pl-s1">    &lt;<span class="pl-ent">script</span> <span class="pl-e">src</span>=<span class="pl-s"><span class="pl-pds">"</span>js/library.js<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">script</span>&gt;</span></pre>
        
        <p>Daarna heb ik in mijn index.html met Javascript een functie gemaakt die de library met daarin de functie aanroept:</p>
        
        <code>function valideer()<br>
        {<br>
        <span>//roep de library en daarin de functie aan</span><br>
        library.validate();<br>
        };<br>
       </code>

        <p>Ik heb een form aangemaakt. Daarbij heb ik de form een onsubmit gegeven waardoor hij alles zal teruggeven wat de functie valideer() heeft. Daarnaast heb ik het een return false gegeven. Hierdoor zal de form niet refreshen nadat je op de submit button hebt geklikt: </p>

        <code>&lt;form onsubmit="valideer(); return false" name="myform" id="inlog" action="" method="post"&gt;<br>
        </code>
        
        <p>In de form heb ik een aantal input types aangemaakt. Dit zijn de gebruikersnaam en wachtwoord. Daarna heb ik een select form aangemaakt waarin alle opties voor het ticket in staan. Dit is een drop down menu. Als laatste heb ik een submit input type aangemaakt. Dit is een button die alle gegevens verzend:</p>

        <code> Gebruikersnaam: &lt;br&gt; <br>
        &lt;input type="text"  id="username"name="gebruikersnaam" placeholder="Gebruikersnaam" autofocus /&gt;&lt;br&gt;<br>
        Wachtwoord: &lt;br&gt; <br>
        &lt;input type="password" id="password" name="wachtwoord" placeholder="wachtwoord" /&gt;&lt;br&gt;<br>
        Kies ticket: &lt;br&gt; <br>        
                          &lt;select id="tickets"&gt;<br> 
                  &lt;option value="selectcard"> -- selecteer een optie-- &lt;/option&gt;<br> 
                    &lt;option value="early">Early Bird&lt;/option&gt;<br> 
                    &lt;option value="regular">Regular&lt;/option&gt;<br> 
                    &lt;option value="vip">VIP&lt;/option&gt;<br> 
                  &lt;/select&gt;<br> 

        &lt;input type="submit" value="Kopen" name="submit" id="submit"&gt; <br>
        &lt;/form&gt;"</code>

        <p>Daaronder heb ik een div aangeroepen die de meldingen zullen weergeven als er iets bij het inloggen verkeerd gaat:</p>

        <code>
         &lt;div id="melding">&lt;/div&gt;</code>

         <p>In library.js maak ik de library aan met daarin de functie:</p>

         <code>var library = {<br>
        validate: function(Element){  
        </code>

        <p>Daarna maak ik een aantal variabeles aan waarin de berichten worden gezet. De variabele melding zoekt de div uit de html pagina die melding heet:</p>

        <code>
        var message = '';<br>
        var bericht = '';<br>
        var melding = document.getElementById('melding');   <span>//zoek div die melding heet  </span>
        </code>

        <p>Daarna ga ik kijken wat de value is van de variabele username. Als die leeg is, zal je een bericht krijgen dat je iets moet invullen. Als die niet leeg is, maar de gebruikersnaam iets mist, meld die wat er in de gebruikersnaam moet zitten. Dit zal in de variabele message worden opgeslagen:</p>

        <code>
    var username = document.myform.username.value; <span>//kijk wat de value is van de gebruikersnaam</span><br>
    if (username == '') <span>//als het leeg is</span><br>
    {<br>
        message = 'je moet wel je gebruikersnaam invullen&lt;br&gt;';<br>
        document.myform.username.style.borderColor = 'red'; <span>//maak een rood randje</span> <br>
        bericht += message;<br>
    }<br>
        else<br>
        {<br>
            var pattUsername = /^[a-z0-9_-]{3,15}$/; <span>//3-15 karakters met alleen letters, cijfer of symbool“_-”.</span><br>
            if(!pattUsername.test(username))<br>
            {<br>
                message += '- De gebruikersnaam moet tussen de 3-15 karakters zijn met alleen de symbolen _-&lt;br&gt;';<br>
                document.myform.username.style.borderColor = 'red'; <span>//maak een rood randje</span> <br>
                bericht += message;<br>
            }<br>
        }
        </code>

        <p>Hetzelfde wordt gecontroleerd met de variabele password.</p>

        <p>Voor het controleren van de drop down menu ziet het er iets anders uit. Daarbij heb ik eerst de id van de select form opgevraagd. Daarna kijkt die wat de optie values zijn van het select element. Hij slaat de value op van de optie die geselecteerd is. Daarna kijkt die of de optie value van het select element selectcard is. Dit is de standaard optie value als er geen ticket is aangeklikt. Als je geen ticket heb aangeklikt, zal je een bericht krijgen dat je een ticket moet selecteren. Dit zal in de variabele message worden opgeslagen:</p>

        <code>
        var ddl = document.getElementById("tickets"); <span>//zoek element met id tickets</span><br>
        var selectedValue = ddl.options[ddl.selectedIndex].value; <span>//kijk wat de opties zijn van het select element en sla de value op van het geselecteerde optie.</span><br>
        if (selectedValue == "selectcard")<span>//als de value van de optie selectcard is</span><br>
        {<br>
        message = 'Selecteer een ticket&lt;br&gt;';<br>
        document.myform.tickets.style.borderColor = 'red'; <span>//maak een rood randje</span><br>
        bericht += message;<br>
        }<br>
        </code>

        <p>Daarna zal die kijken of de variabele message leeg is. Als dat niet het geval is zal die in de div melding de opgeslagen berichten in de variabele message laten zien:</p>

        <code>
        if(message !== '') <span>//als element niet leeg is</span><br>
        {<br>
        Element = bericht;<br>
        melding.innerHTML = Element; <span>//zet in de div melding alles wat de Element heeft opgeslagen</span><br>
        return false;<br>
        }
        </code>

        <p>Hierbij nog een foto wat er bij de ticketsysteem gebeurt:</p>

        <div id="gallery-3" class="gallery galleryid-2178 gallery-columns-3 gallery-size-thumbnail"><div class="clearboth"></div><dl class=" gallery-fullwidth">
            <dt class="gallery-icon landscape">

        <img src="../images/ticket.png"class="attachment-thumbnail" height="548" width="958">
            </dt></dl>
        </div>

        <p>Ik heb hierbij ook gebruik gemaakt van de debug tool van Chrome. Deze gebruik ik al een tijdje sinds dat ik deze opleiding doe. Hiermee kan je heel gemakkelijk fouten binnen de code vinden in de console. Dit is heel fijn als je vast zit, bijvoorbeeld wat ik hier met deze framework ook vaak heb gehad.  Zo had ik bijvoorbeeld de verkeerde div opgezocht. Hierbij geeft die dan ook aan dat die niet bestaat of niet gevonden kan worden. Met de drop down menu was het een stuk lastiger om de value ervan te lezen. Met de debug tool kon ik goed zien wat er fout was op welke rij van de code. Hierdoor kon ik de fout zien en het oplossen.</p>

        <p>Ik heb daarna feedback gevraagd aan de DEV docent.  Hij vond dat het ticketsysteeom op zich goed in elkaar zat. Het is alleen niet aanpasbaar. Als je bijvoorbeeld via Mojo kaartjes wil bestellen, moet je de code van je library aanpassen, wat weer problemen oplevert op het moment dat jij je code gaat updaten. Zorg dus dat er een mogelijkheid komt om bij het aanroepen met parameters dit soort zaken aan te laten passen door de gebruiker.</p>

        <p>Ik had me nog nooit echt verdiept in parameters. Daarom ben ik eerst onderzoek gaan doen en heb ik tutorials gevolgd. Ik kwam eruit dat het beste was om een array te gebruiken met daarin variabeles waarbij je in de parameters de values verandert. Na eindeloos geprogrammeerd te hebben is het met uiteindelijk gelukt. </p>

        <p>Ik heb een parameter in de functie gezet:</p>
        
        <code>var Validate = function (NewSettings) {</code>

        <p>Daarna heb ik een array aangemaakt met alle settings die aangepast kunnen worden vanuit buitenaf:</p>

        <code>
                var defaultSettings = <span>//maak een array aan waarin alle variabelen zitten die kunnen worden aangepast</span><br>
         {<br>
                website : 'http://www.ticketmaster.nl/', <span>//maak variabele aan met link naar de website</span> <br>
                pattUsername : /^[a-z0-9_-]{3,15}$/, <span>//voor de gebruikersnaam moet het 3-15 karakters zijn met alleen letters, cijfer of symbool“_-”.</span><br>
                pattPassword : /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/ <span>//voor het wachtwoord moet het een nummer, hoofdletter en meer dan zes karakters zijn</span><br>
         };
        </code>

        <p>Daarna heb ik een if statement gemaakt om te checken of de parameters van buitenaf zijn ingevuld, als dit is gedaan word de defaultsettings aangepast:</p>

        <code>
         if (NewSettings !== undefined) <span>//als parameter is ingevuld</span><br>
         {<br>
            defaultSettings = NewSettings; <span>//zet de nieuwe settings van de parameter als de defaultsettings</span><br>
         }
        </code>    

        <p>Daarna heb ik van buitenaf de functie aangeroept met daarin de parameters die de settings zullen veranderen:</p>

        <code>
        function valideer()<br>
        {<br>
            <span>//roep de library en daarin de functie aan</span><br>
         Validate({website:'https://www.mojo.nl/', pattUsername : /^[a-z0-9_-]{3,15}$/, pattPassword : /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/}); <span>//verander de url van de variabele website, pattern van de gebruikersnaam en van het wachtwoord </span><br>
        };
        </code>

        <p>De ticketsysteem is nu aanpasbaar. Je kan de website url aanpassen, pattern van de gebuikersnaam en van het wachtwoord.</p>

        </div>
    </div>

        <footer>
                <div class="contacticon">
        <div class="emailicondiv">
        <a href="mailto:annemijn.portier@hotmail.com"><img id="emailicon" src="../images/emailicon.png"/></a>
        </div>
        <div class="linkedinicondiv">
        <a href="https://www.linkedin.com/in/annemijn-portier-8b7914115?trk=nav_responsive_tab_profile"><img id="linkedinicon" src="../images/linkedinicon.png"/></a>
      
        </div>
        </div>
        <p>Copyright 2016 ACreations, All Rights Reserved.</p>
        </footer>
                        <script src="../js/modernizr.custom.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../js/jquery.dlmenu.js"></script>
        <script>
            $(function() {
                $( '#dl-menu' ).dlmenu();
            });
        </script>
<script src="../js/jquery.carouFredSel-6.0.2-packed.js" type="text/javascript"></script>
<script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="../js/waypoints.min.js" type="text/javascript"></script>
<script src="../js/custom.js" type="text/javascript"></script>

</body>
</html>