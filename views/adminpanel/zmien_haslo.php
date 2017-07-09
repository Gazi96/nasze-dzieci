<form action="<?php echo URL; ?>cms-nasze-dzieci-panel/zmien_haslo/action" method="post">
    <table>
        <tr>
            <td>Stare hasło:</td>
            <td><input type="password" name="oldPassword"></td>
        </tr>
        <tr>
            <td>Nowe hasło:</td>
            <td><input type="password" name="newPassword"></td>
        </tr>
        <tr>
            <td>Powtórz hasło:</td>
            <td><input type="password" name="rePassword"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Zmień"></td>
        </tr>
    </table>
</form>

