


<?php
if(!empty($_POST))
{
// affichage des saisies pour être sur de les obtenir avant de les exploiter.
echo "firstname : $_POST[firstname] <br>";
echo "mdp : $_POST[password] <br>";
echo "message : $_POST[message] <br>";
// entête email
$headers = 'MIME-Version: 1.0' . "\n";

$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";

$headers .= 'Reply-To: ' . $_POST['firstname'] . "\n";

$headers .= 'From: "' . ucfirst(substr($_POST['firstname'], 0, strpos($_POST['firstname'], '@'))) . '"<'.$_POST['firstname'].'>' . "\n";

$headers .= 'Delivered-to: monadresse@gmail.com' . "\n";

echo $headers;

mail("monadresse@gmail.com", $_POST['firstname'], $_POST['message'], $headers);
}
