<!DOCTYPE html>
<html>
<title>formulairegroupe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('informat.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>Balises</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">D&eacute;finition</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">Contact</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">Acces Code School</p>
    <p class="w3-large">31, rue Elsa Triolet
      21000 Dijon
      03 84 76 90 83k</p>
    <p> Ines, Ousmane, Monica<a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Balise Doctype</h1>
    </div>
    <div class="w3-container">
      <h5>Le Doctype s’ins&egrave;re en tout d&eacute;but de page. Il sert à d&eacute;finir le type du document afin qu’il soit correctement interpr&eacute;t&eacute; par le navigateur. 
        Vous pouvez placez sa balise &agrave; la premi&egrave;re ligne de votre code HTML si vous le souhaitez. Le Doctype doit toujours se situer avant la balise &lt;HTML&gt;.
        <br><br>
        Cette d&eacute;claration n’est pas une balise HTML5 comme les autres, c’est une instruction pour le navigateur &agrave; propos de la version de HTML de votre document.</h5>
      
    </div>
    <div class="w3-container w3-black">
      <h1>Balise Div</h1>
    </div>
    <div class="w3-container">
      <h5>   Définition
        Permet de diviser un document en sections d'un certain style: APPENDIX, ABSTRACT, etc
        
        Syntaxe    <DIV ATTRIBUT= > ...texte encadré... </DIV>
        
        Remarques :
        Ne peut être utilisé avec un élément <P>.
        
        L'attribut align est "deprecated", l'alignement est maintenant contrôlé par le biais des feuilles de styles
        <DIV> fait partie de la douzaine de balises qui servent à structurer le document ( par opposition à la structuration du texte ).
        
        La balise <DIV> (pour division) peut être utilisée pour diviser un document en plusieurs sections qui seront, par exemple, alignées chacune d'une façon différente. Dans les premiers navigateurs,cette balise ne possédait d'ailleurs qu'un seul attribut :Align
        avec comme valeurs possibles : center, right, left ou justify </h5>
      
    </div>
    <div class="w3-container w3-black">
      <h1>Balise Select</h1>
    </div>
    <div class="w3-container">
      <h5>Définition
        L'élément HTML select représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir. l'élément SELECT est un élément fermé.
        
        <p>Remarques :
        L'élément OPTION est nécessairement englobé par l'élément SELECT. Dans une déclaration de liste, il est répété autant de fois qu'il y a de choix dans la liste.
        L'attribution d'un nom symbolique à une sélection est indispensable. <br>
        En effet, chaque choix opéré par l'utilisateur se traduit par un couple nom/valeur envoyé au serveur: nom est l'argument associé à "name" et valeur est la valeur attribuée à l'option choisie.
        La présence de multiple dans une déclaration de liste implique automatiquement un affichage de la liste sur plusieurs lignes.
        La fenêtre ouverte par le navigateur affiche le nombre de choix spécifié comme argument de size. Si ce nombre est plus petit que le nombre de choix de la liste, le navigateur doit être en mesure d'afficher un ascenseur sur le côté.
        La liste se déroule vers le bas par défaut, chaque fois que la place disponible le permet; dans le cas contraire, le navigateur déroule automatiquement la liste vers le haut.
      Lorsqu'une liste est activée (clic de la souris), les touches de direction Haut et Bas du clavier doivent être également activées pour permettre le défilement de la liste.  </h5>
      
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Vos informations</p>
    
      <form name="formfauxmail" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

          <label for="expediteuremail">Nom de famille: </label><br>
          <input type="text" name="nomfamille" class="w3-input w3-padding-16 w3-border expediteuremail"><br>
  
          <label for="sujetmessage">Prenom:</label><br>
          <input type="text" name="prenom" class="w3-input w3-padding-16 w3-border expediteuremail"><br>
  
          <label for="mailfaux">Courriel:</label><br>
              <input type="email" name="mailfaux" class="w3-input w3-padding-16 w3-border adressmail"><br>
  
          <label for="telephone">telephone:</label><br>
          <input type="text" name="Telephone" class="w3-input w3-padding-16 w3-border telephone"><br>
  
          <label for="situation">situation:</label><br>
          <p>
          etudiant<input type="radio" name="situation[]" value="etudiant" class="w3-input w3-padding-16 w3-border situation">
          salarie<input type="radio" name="situation[]" value="salarie" class="w3-input w3-padding-16 w3-border situation">
          sans emploi<input type="radio" name="situation[]" value="sans&nbsp;emploi" class="w3-input w3-padding-16 w3-border situation">
          </p><br>
  
          <label for="Langue">Langue:</label><br>
          <p>
          fr<input type="checkbox" name="Langue[]" value="française" class="w3-input w3-padding-16 w3-border Langue">
          en<input type="checkbox" name="Langue[]" value="anglaise"class="w3-input w3-padding-16 w3-border Langue">
          es<input type="checkbox" name="Langue[]" value="espagnole" class="w3-input w3-padding-16 w3-border Langue">
          </p><br>
  
              <label for="pays">Dans quel pays habitez-vous ?</label><br />
              <select name="pays[]" id="pays" >
              <option selected value="">Selectionnez</option>
              <optgroup label="Europe">
              <option value="france">France</option>
              <option value="italie">Italie</option>
              </optgroup>
              <optgroup label="Amerique">
              <option value="Bresil">Bresil</option>
              <option value="USA">USA</option>
              <option value="USA">Perou</option>
              </optgroup>
              <optgroup label="Asie">
              <option value="chine">Chine</option>
              <option value="japon">Japon</option>
              </optgroup>
              <optgroup label="Afrique">
              <option value="Senegal">Senegal</option>
      
              <option value="Guinee">Guinee</option>
              </optgroup>
          </select>
      </p><br>
          <label for="Ville">Ville:</label><br>
          <input type="text" name="Ville" class="Ville"><br>
  
          <label for="textemail">Commentaires: </label><br>
          <textarea name="textemail" rows="8" cols="45">Bonjour Robert</textarea><br>
  
              <input type="submit">
          </form>
    </div>
  </div>
</div>

<?php
/***************************Partie securite*********************************** */
/***********nom************** */
$choixg = isset($_POST['nomfamille']) ? $_POST['nomfamille'] : NULL;
   
if(empty($choixg)){
    echo"Remplis l'information Nom de famille<br>";
}else {
    echo $choixg."<br>";
}

if (!preg_match("/^[a-zA-Z ]*$/",$choixg)) {
    echo "un chiffre dans le nom ?<br>";
}

/***********prenom****************** */
$choixf = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;

if(empty($choixf)){
    echo"Remplis l'information Prenom<br>";
}else {
    echo $choixf."<br>";
}

if (!preg_match("/^[a-zA-Z ]*$/",$choixf)) {
    echo "Un chiffre dans le prénom ?<br>";
}

  
/************telephone***************** */
$choixd = isset($_POST['Telephone']) ? $_POST['Telephone'] : NULL;

if(empty($choixd)){
    echo"Remplis l'information Telephone<br>";
}else {
    echo $choixd."<br>";}

if (!preg_match("/[0-9]/i",$choixd)) {
    echo "Quoi d'autre que des chiffres dans un numero de telephone ?<br>";
}

/**************mail*************** */
$choixi = isset($_POST['mailfaux']) ? $_POST['mailfaux'] : NULL;

if (empty($_POST["mailfaux"])) {
    $CourrielErr = "Email is required";
    echo $CourrielErr;
} else if (!filter_var($choixi, FILTER_VALIDATE_EMAIL)) {
    $CourrielErr = "Invalid email format"; 
    echo $CourrielErr;
} 

/************situation***************** */
$choixc = isset($_POST['situation']) ? $_POST['situation'] : NULL;
if (empty($_POST["situation"])) {
    $situationrr = "situation is required<br>";
    echo $situationrr;
} 
if (is_array($choixc) || is_object($choixc)){
    foreach($choixc as $valeur){
trim($valeur);
        
    echo"La situation $valeur a été choisie<br>";
        }
    }


/**************langue*************** */
$choixb = isset($_POST['Langue']) ? $_POST['Langue'] : NULL;


if (empty($_POST["Langue"])) {
    $Languerr = "Langue is required<br>";
    echo $Languerr;
} 

if (is_array($choixb) || is_object($choixb)){
foreach($choixb as $valeur){
trim($valeur);
    
echo"La langue $valeur a été choisie<br>";
    }
}
/**************pays*************** */
$choixA = isset($_POST['pays']) ? $_POST['pays'] : NULL;

if (is_array($choixA) || is_object($choixA)){
foreach($choixA as $valeur){
        trim($valeur);
    if (empty($valeur)){
        
        $paysrr = "pays is required<br>";
        echo '<p class="fontsize30 titre colorwhite">'.$paysrr.'</p><br>';
        }
    else{
        echo"Le choix $valeur a été fait<br>";
        } 
        
    }
}  
/**************ville**************** */
$choixe = isset($_POST['Ville']) ? $_POST['Ville'] : NULL;
if(empty($choixe)){
    echo"Remplis l'information Ville<br>";
}else {
    echo $choixe."<br>";
}

if (!preg_match("/^[a-zA-Z ]*$/",$choixe)) {
    echo '<p class="colorwhite">Un chiffre dans la Ville ?</p><br>';
}


/***************Commentaires*************** */
$choixh = isset($_POST['textemail']) ? $_POST['textemail'] : NULL;
$testcommentaires = test_input($choixh);
echo "commentaire vide";


function test_input($data) {
    $data = trim($data );
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php  
    $serveur ="localhost";
    $login = "root";
    $pass = "";

  

try{
    $connexion = new PDO("mysql:host=$serveur;dbname=formulairegroupe",$login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "connexion reussi<br>";
        
    $requete = $connexion->prepare("
    INSERT INTO utilisateur(Nom,Prenom,Courriel,Telephone,Commentaires) 
    VALUES (:Nom,:Prenom,:Courriel,:Telephone,:Commentaires)
    ");

    $requete->bindParam(':Nom',$Nom);
    $requete->bindParam(':Prenom',$Prenom);
    $requete->bindParam(':Courriel',$Courriel);
    $requete->bindParam(':Telephone',$Telephone);
    $requete->bindParam(':Commentaires',$Commentaires);


    $Nom = $_POST['nomfamille']; echo "nom: ".$Nom; echo '<br>';

    $Prenom = test_input($_POST['prenom']);
    
    $Courriel = test_input($_POST['mailfaux']); 
    
    $Telephone = test_input($_POST['Telephone']); 
    
    $Commentaires = test_input($_POST['textemail']);
    


$requete->execute(/*
array(
    'Nom'=>$Nom = $_POST['nomfamille'],
    'Prenom'=>$Prenom = $_POST['Prenom'],
    'Courriel'=>$Courriel = $_POST['Courriel'],
    'Telephone'=>$Telephone = $_POST['Telephone'],
    'Commentaires'=>$Commentaires = $_POST['Commentaires']
)*/
);
    }
    catch(PDOException $e) {
    echo"echec : ".$e -> getMessage();
    }
    ?>

</body>
</html>
