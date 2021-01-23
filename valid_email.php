<?
/* Check if an $email is valid */
function valid_email($email) {
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {return true;} 
return false;
}
?>
