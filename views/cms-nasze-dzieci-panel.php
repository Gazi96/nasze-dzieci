<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->title; ?> - Stowarzyszenie Nasze Dzieci</title>
        <link rel="stylesheet" href='<?php echo URL; ?>private/css/login.css'/>
    </head>
    <body>
        <div>
            <p>Login</p>
            <?php 
                if(isset($this->error)) {
                    echo "<div>$this->error </div>";
                }
            ?>
            <form action="<?php echo URL; ?>cms-nasze-dzieci-panel/action" method="post">
                <table>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Login!"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
