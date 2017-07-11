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
        echo "<div id='aktualnosci'>";
        echo "<h2>Aktualności</h2>";
        foreach ($news as $row){
            echo "<div class='aktualnosci'><a href='".$row['href']."'>";
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