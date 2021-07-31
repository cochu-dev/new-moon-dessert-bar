<?php
/*header("Access-Control-Allow-Origin: https://www.gstatic.com");*/
/*if(isset($_POST['submit']) && !empty($_POST['submit'])){ 

	// check do we have recaptcha param added to form and submited
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
        
        //your site secret recaptcha key
        $secret = '6LehX_4aAAAAANIoyIRIYn8QzZtwtE7ytaQ1hgmZ';
 
         
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        
        $responseData = json_decode($verifyResponse); 
        
        // check was the response successfully checked by Google
        if($responseData->success){
          	// if recaptcha check was success
            $succMsg = 'Your contact request have submitted successfully.';
            exit($succMsg); 
        }else{
        	// if not show the error
            $errMsg = 'Robot verification failed, please try again.';
            echo "<script type='text/javascript'>alert('$errMsg');</script>";
 
        }
         
    }else{
    	// if recaptcha is not checked
        $errMsg = 'Please click on the reCAPTCHA box.';
        echo "<script type='text/javascript'>alert('$errMsg');</script>";
    } 
} */

if(isset($_POST['submit'])) {
    if(!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        echo 'reCAPTHCA verification failed, please try again.';
    } else {
        $secret = 'google_secret_key';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);

        if($response->success) {
            // What happens when the CAPTCHA was entered incorrectly
            echo 'Successful login.';
        } else {
            // Your code here to handle a successful verification
            echo 'reCAPTHCA verification failed, please try again.';
        }
    }
}

?>