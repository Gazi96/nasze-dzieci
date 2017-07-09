<div>
    <?php
    echo $this->title;
    $news = $this->news;
    $describes = $this->describes;
    $images = $this->images;
    /*var_dump($news);
    echo '<br>';
    var_dump($images);
    echo '<br>';
    var_dump($describes);*/

    echo "<div><a href='".URL.$news['href']."'>";
    echo '<h1>'.$news['name'].'</h1>';
            
    foreach ($describes as $des){
        echo '<p>'.$des['paragraph'].'</p>';
    }
    echo '</a>';
            
    echo '</div>';

    ?>
</div>

<div>
    <h1>Archiwum</h1>
    <ul>
    <?php
    $miesiac = array( '', 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec',
        'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień' );
    
    $tree = $this->tree;
    foreach($tree as $row){
        echo "<li><a href='".URL.$row['year'].'/'.$row['month']."'>";
        echo $miesiac[intval($row['month'])].' '.$row['year'].' ('.$row['Count(*)'].')';
        echo '</a></li>';
    }
    ?>
    </ul>
</div>