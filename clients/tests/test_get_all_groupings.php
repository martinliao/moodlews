<?php
require_once ('../MoodleWS.php');

$moodle=new MoodleWS();
require_once ('../auth.php');
/**test code for MoodleWS: Get All groupings
* @param integer $client
* @param string $sesskey
* @param string $fieldname
* @param string $fieldvalue
* @return UNKNOWN
*/

$lr=$moodle->login(LOGIN,PASSWORD);
$res=$moodle->get_all_groupings($lr->getClient(),$lr->getSessionKey(),'','');
print($res);
$moodle->logout($lr->getClient(),$lr->getSessionKey());

?>
