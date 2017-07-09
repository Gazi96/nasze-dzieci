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

    echo "<div><a href='".$news['href']."'>";
    echo '<h1>'.$news['name'].'</h1>';
            
    foreach ($describes as $des){
        echo '<p>'.$des['paragraph'].'</p>';
    }
    echo '</a>';
            
    echo '</div>';

    ?>
</div>