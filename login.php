<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
    <form action="process.php" method="post">
        <p>
            <label>  username:</label>
            <input type="text" id="user"name="user"/>
        </p>
        <p>
            <label>  password:</label>
            <input type="password" id="password"name="pass"/>
        </p>
        <p>
            <input type="submit" id="btn"value="login"/>
        </p>
    </form>
</div>
</body>
</html>
