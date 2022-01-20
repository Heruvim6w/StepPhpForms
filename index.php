<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms in PHP</title>
</head>
<body>
    <form action="source.php" method="post">
        <input type="email" name="tEmail" placeholder="E-mail" required>
        <br>
        <input type="checkbox" name="cSubscribe" value="Subscribe">
        <label for="cSubscribe">Subscribe</label>
        <br>
        <button type="submit" name="nSend" value="nSend">Send</button>
    </form>
</body>
</html>