<?php 



/**
 * Emails controller
 */
class Emails extends MainController
{
    
    public function __construct()
    {
        
    }





    public function send_website_email()
    {
    	$errorMSG = "";

        // NAME
        if (empty(post_data("name"))) {
            $errorMSG = "Name is required ";
        } else {
            $name = post_data("name");
        }


        // Number
        if (empty(post_data("number"))) {
            $errorMSG = "Contact number is required ";
        } else {
            $number = post_data("number");
        }

        // EMAIL
        if (empty(post_data("email"))) {
            $errorMSG .= "Email is required ";
        } else {
            $email = post_data("email");
        }

        // MSG Guest
        if (empty(post_data("msg_subject"))) {
            $errorMSG .= "Subject is required ";
        } else {
            $msg_subject = post_data("msg_subject");
        }


        if (empty(post_data("description"))) {
            $errorMSG .= "Description is required ";
        } else {
            $description = post_data("description");
        }


        // MESSAGE
        if (empty(post_data("typ"))) {
            $errorMSG .= "Type is required ";
        } else {
            $typ = post_data("typ");
        }


        $EmailTo = "pmnjuno@gmail.com";
        $Subject = $msg_subject;

        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "Contact Number: ";
        $Body .= $number;
        $Body .= "\n";
        $Body .= "Reason: ";
        $Body .= "Request for Website Quotation";
        $Body .= "\n";
        $Body .= "Description: ";
        $Body .= $description;
        $Body .= "\n";
        $Body .= "Website Type: ";
        $Body .= $typ;
        $Body .= "\n";

        // send email
        $success = mail($EmailTo, $Subject, $Body, "From:".$email);

        // redirect to success page
        if ($success && $errorMSG == ""){
           echo "success";
        }else{
            if($errorMSG == ""){
                echo "Something went wrong :(";
            } else {
                echo $errorMSG;
            }
        }
    }





    public function send_soft_email()
    {
        $errorMSG = "";

        // NAME
        if (empty(post_data("name"))) {
            $errorMSG = "Name is required ";
        } else {
            $name = post_data("name");
        }


        // Number
        if (empty(post_data("number"))) {
            $errorMSG = "Contact number is required ";
        } else {
            $number = post_data("number");
        }

        // EMAIL
        if (empty(post_data("email"))) {
            $errorMSG .= "Email is required ";
        } else {
            $email = post_data("email");
        }

        // MSG Guest
        if (empty(post_data("msg_subject"))) {
            $errorMSG .= "Subject is required ";
        } else {
            $msg_subject = post_data("msg_subject");
        }


        if (empty(post_data("description"))) {
            $errorMSG .= "Description is required ";
        } else {
            $description = post_data("description");
        }


        // MESSAGE
        if (empty(post_data("typ"))) {
            $errorMSG .= "Type is required ";
        } else {
            $typ = post_data("typ");
        }


        $EmailTo = "pmnjuno@gmail.com";
        $Subject = $msg_subject;

        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "Contact Number: ";
        $Body .= $number;
        $Body .= "\n";
        $Body .= "Reason: ";
        $Body .= "Request for Website Quotation";
        $Body .= "\n";
        $Body .= "Description: ";
        $Body .= $description;
        $Body .= "\n";
        $Body .= "Website Type: ";
        $Body .= $typ;
        $Body .= "\n";

        // send email
        $success = mail($EmailTo, $Subject, $Body, "From:".$email);

        // redirect to success page
        if ($success && $errorMSG == ""){
           echo "success";
        }else{
            if($errorMSG == ""){
                echo "Something went wrong :(";
            } else {
                echo $errorMSG;
            }
        }
    }





    public function send_message_email()
    {
        $errorMSG = "";

        // NAME
        if (empty(post_data("name"))) {
            $errorMSG = "Name is required ";
        } else {
            $name = post_data("name");
        }

        // EMAIL
        if (empty(post_data("email"))) {
            $errorMSG .= "Email is required ";
        } else {
            $email = post_data("email");
        }

        // MSG Guest
        if (empty(post_data("msg_subject"))) {
            $errorMSG .= "Subject is required ";
        } else {
            $msg_subject = post_data("msg_subject");
        }


        if (empty(post_data("message"))) {
            $errorMSG .= "message is required ";
        } else {
            $message = post_data("message");
        }


       


        $EmailTo = "pmnjuno@gmail.com";
        $Subject = $msg_subject;

        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
       
        $Body .= "Message: ";
        $Body .= $message;
        $Body .= "\n";
        
        $Body .= "\n";

        // send email
        $success = mail($EmailTo, $Subject, $Body, "From:".$email);

        // redirect to success page
        if ($success && $errorMSG == ""){
           echo "success";
        }else{
            if($errorMSG == ""){
                echo "Something went wrong :(";
            } else {
                echo $errorMSG;
            }
        }
    }









    public function email_constr()
    {
        
    }

    




}