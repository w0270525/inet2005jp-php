<?php

if (isset($_POST['target']) && isset($_POST['guess']))
{
    $numberTarget = $_POST['target'];
    $numberGuessed = $_POST['guess'];

    if ($numberGuessed < $numberTarget)
    {
        $message = "Guess Higher";
    } elseif ($numberGuessed > $numberTarget)
    {
        $message = "Guess Lower";
    } elseif ($numberGuessed == $numberTarget)
    {
        $message = "You got it!";
    }
}
else
{
    $message = "Welcome to my guessing game!";
    $numberTarget = rand(1,100);
}
?>
<html>
<head>
    <title>A PHP number guessing script</title>
</head>
<body>
<h1>
    <?php print $message ?>
</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>"  >
    <p>Number:
        <input name="guess" type="text" >
    </p>
    <p>
        <input type="hidden" name="target" value="<?php echo $numberTarget ?>">
    </p>
    <p>
        <input name="" type="submit">
    </p>
</form>
</body>
</html>
