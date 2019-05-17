<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'test');

    $contact_name = $_REQUEST['contact_name'];
    $contact_email = $_REQUEST['contact_email'];
    $contact_message = $_REQUEST['contact_message'];

    if(mysqli_query($conn,"INSERT INTO test.feedback VALUES('$contact_name','$contact_email','$contact_message')"))
        echo "Successfully inserted";
    else
        echo "Insertion failed";
?>
