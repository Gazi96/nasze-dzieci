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
    
    if($news !== false){
        foreach ($news as $row){
            echo "<div><a href='".URL.$row['href']."'>";
            echo '<h1>'.$row['name'].'</h1>';
            
            foreach ($describes[$row['id']] as $des){
                echo '<p>'.$des['paragraph'].'</p>';
            }
            echo '</a>';
            
            echo '</div>';
        }
    }
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