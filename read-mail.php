<?php
$hostname = "{imap.gmail.com:993/ssl}INBOX";
$username = "daniyalreavtech@gmail.com";
$password = "jswairgfcbxpomhw";
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
$type = 'SEEN';
$emails = imap_search($inbox,$type);
$total_message = imap_num_msg($inbox);
echo "Welcome <span style='color:green'>".$username."!</span><br>Fetching your <span style='color:red'>".$type."</span> messages! (".$total_message.")<br><br>";
   
function is_base64_encoded($data)
{
   
    if (base64_decode($data, true) !== false){
        return true;
    } else {
        return false;
    }
}


if($emails) {
     $output = '';
    rsort($emails);
    $email_array = array();
    foreach($emails as $email_number) {
        $message = (imap_fetchbody($inbox,$email_number,1)); 
        // if(is_base64_encoded($message)){
        //     array_push($email_array,json_decode(base64_decode($message)));
        // }else{
        //     array_push($email_array,json_decode($message));
        // }
        
         if(is_base64_encoded($message)){
            array_push($email_array,(base64_decode($message)));
        }else{
            array_push($email_array,($message));
        }
    }

    // foreach($email_array as $data){
    //     foreach($data as $x){
    //         // echo gettype($x);
    //         if(gettype($x) == "array"){
                
    //         }else if(gettype($x) == "object"){

    //         }else if(gettype($x) == "boolean"){

    //         }else if(gettype($x) == "string"){
    //             echo $x;
    //         }else{
    //             //Null value encounter here..

    //         }
            
    //     }  
        
    // }
    echo "<pre>";
    print_r($email_array);
    echo "</pre>";

}
imap_close($inbox);
?>