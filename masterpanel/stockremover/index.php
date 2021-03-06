<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Infinnovation Stock Exchange Simulator Master Panel | Remove Existing Stock Section</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../base.css">
    </head>
    <body>
        <img src="../../images/logo.png">
        <h1><a href="../">Infinnovation Stock Exchange Simulator Master Panel</a><br><small>Remove Existing Stock Section</small></h1>
        <p><sup>*</sup> Do not use this panel without the permission/authorisation by Infinnovation Stock Exchange Board.</p>
        <br>
        Remove operation:<br>
        <form method="POST" action="removestock.php">
            <select name="name">
                <?php
                include('../../db.php');
                
                $sql = "SELECT name FROM stocks ORDER BY name;";
                $res = mysqli_query($db, $sql);
                
                while($ar = mysqli_fetch_array($res)) {
                    $name = $ar['name'];
                    $str = "<option value=\"$name\">$name</option>\n";
                    print($str);
                }
                ?>
            </select>
            <br>
            <br>
            <button type="submit">Remove Stock</button>
        </form>
        <br><br>
        <footer>
              &copy; Infinnovation.<br/>
              Designed and Developed by <a href="https://facebook.com/swghosh" target="_blank" onclick="window.open('https://www.github.com/swghosh');">Swarup Ghosh</a>.<br>
              <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
        </footer>
        <?php
        if(isset($_GET['error'])) {
            print("<script>alert(\"Error in previous form submission! Stock not removed. Try again!\");</script>");
        }
        else if(isset($_GET['success'])) {
            print("<script>alert(\"Successfully removed the stock.\");</script>");
        }
        ?>
    </body>
</html>