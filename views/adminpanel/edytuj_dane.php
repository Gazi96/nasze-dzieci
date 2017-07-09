<div>
    <?php
    echo $this->title;
    
    $details = $this->details;
    ?>
    <h1>Stowarzyszenie Nasze Dzieci</h1>
    <p><?php echo $details['address1'] ?></p>
    <p><?php echo $details['address2'] ?></p><br>
    <p>tel. <?php echo $details['phone'] ?></p>
    <p>e-mail: <?php echo $details['email'] ?></p><br>
    <p>NIP: <?php echo $details['nip'] ?></p>
    <p>REGON: <?php echo $details['regon'] ?></p>
    <p>KRS: <?php echo $details['krs'] ?></p>
    
</div>