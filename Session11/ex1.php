<html>
<head>
    <title>User Information</title>
</head>
<body>
<?php
    $myname = $_POST['myname'];
    $myage = $_POST['myage'];
    if ($myname=="")
    {
        echo "Please enter your name";
    }
    else
    {
        if ($myage=="")
        {
            echo $myname;
            echo ", you did not enter your age!";
        }
        else
        {
            echo "Hi ";
            echo $myname;
            echo ". ";
            echo "Your age is ";
            echo $myage;
            echo ".";
        }
    }
?>
<a href="ex1.html"></a>
</body>
</html>
