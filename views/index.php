<div>
    <div id="main-img"></div>
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
            echo "<div class='aktualnosci'><div class='zdjecie'></div>";
            echo "<a href='".$row['href']."'>";
            echo '<h3>'.$row['name'].'</h3>';
            
            foreach ($describes[$row['id']] as $des){
                if(strlen($des['paragraph']) > 250){
                    $des['paragraph'] = substr($des['paragraph'], 0, 250);
                    $des['paragraph'] = substr($des['paragraph'], 0, strrpos($des['paragraph'], ' ')) . " ...";
                }
                echo '<p>'.$des['paragraph'].'</p>';
            }
            echo '</a>';
            
            echo '</div>';
        }
    }
    ?>

    <div class="clear"></div>
    
    <div id="contact">
        <div class="top-contact">
            <div class="info">O fundacji</div>
            <div class="info">News</div>
            <div class="info">Dla darczyńców</div>
            <div class="info">Kontakt</div>
        </div>
        
        <div class="bottom-contact">
            <div class="info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatum obcaecati veniam, blanditiis necessitatibus sed placeat minus reiciendis commodi sint molestiae officia facere illo veritatis maxime corrupti quo distinctio dolor.</p></div>
            <div class="info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatum obcaecati veniam, blanditiis necessitatibus sed placeat minus reiciendis commodi sint molestiae officia facere illo veritatis maxime corrupti quo distinctio dolor.</p></div>
            <div class="info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatum obcaecati veniam, blanditiis necessitatibus sed placeat minus reiciendis commodi sint molestiae officia facere illo veritatis maxime corrupti quo distinctio dolor.</p></div>
            <div class="info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatum obcaecati veniam, blanditiis necessitatibus sed placeat minus reiciendis commodi sint molestiae officia facere illo veritatis maxime corrupti quo distinctio dolor.</p></div>
        </div>  
         <div class="clear"></div>
    </div>
</div>