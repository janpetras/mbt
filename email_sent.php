<?php
// Check if form was previously submitted
if(isset($_POST['submit'])) {
    // Do your form processing here and set the response
    $response = 'Mesajul a fost trimis. Multumim pentru mesaj. Va vom contacta de indata.';
}

if (isset($response)) { // If a response was set, print it out
    echo $response;
}
?>