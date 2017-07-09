<?php
    if(isset($this->done)){
        echo '<div>';
        echo '<p>Dodano nową wiadomość o id='.$this->id.'</p>';
        echo '</div>';
    }
?>
<form action="<?php echo URL; ?>cms-nasze-dzieci-panel/dodaj_aktualnosci/action" method="post">
        <table>
            <tr>
                <td>Nazwa</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Opis</td>
                <td><input type="text" name="describe"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login!"></td>
            </tr>
        </table>
    </form>