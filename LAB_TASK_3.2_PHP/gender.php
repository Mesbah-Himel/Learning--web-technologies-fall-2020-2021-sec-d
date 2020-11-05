<?php
if(isset($_REQUEST['msg']))
{
	echo "invalid submission";
}
?>
<html>
    <head><title>Gender Info</title></head>
    <body>
        <form method="REQUEST" action="genderCheck.php">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender"value="Male">Male
                <input type="radio" name="gender"value="Female">Female
                <input type="radio" name="gender"value="Other">Other
            </fieldset>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>