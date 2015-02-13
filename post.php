<?php

include('MailChimp.php');

$MailChimp = new MailChimp('9b48e26b34c662e4d5a74d182e1c8f0f-us10');
$result = $MailChimp->call('lists/subscribe', array(
    'id'                => 'a5098398e4',
    'email'             => $_POST['EMAIL'],
    'name'              => $_POST['NAME'],
    'double_optin'      => true,
    'update_existing'   => true,
    'replace_interests' => false
));

if( $result === false ) {
    // response wasn't even json
    echo ("api error");
}
else if( isset($result->status) && $result->status == 'error' ) {
    // Error info: $result->status, $result->code, $result->name, $result->error
}

?>