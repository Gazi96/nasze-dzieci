<div>
    <div id="main-img"></div>
    
    <div id="news">
       <h2>Aktualności</h2>
        <figure id="figure">
            <img src="public/img/dzieci.jpg" alt="">
        </figure>
        
        
        <div id="archiwum">
            <h3>Archiwum</h3>
            <ul>
                <li><a href="#">styczeń</a></li>
                <li><a href="#">luty</a></li>
                <li><a href="#">marzec</a></li>
                <li><a href="#">kwiecień</a></li>
                <li><a href="#">maj</a></li>
                <li><a href="#">czerwiec</a></li>
                <li><a href="#">lipiec</a></li>
                <li><a href="#">sierpień</a></li>
                <li><a href="#">wrzesień</a></li>
                <li><a href="#">październik</a></li>
                <li><a href="#">listopad</a></li>
                <li><a href="#">grudzień</a></li>
            </ul>
        </div>   
    </div>
    
    <div id="goal">
        <h2>Nadchodzące wydarzenia</h2>
        <div id="event">
            <figure class="figure">
                <img src="public/img/dzieci.jpg" alt="">
                <figcaption>Zdjęcie 1</figcaption>
            </figure>
            
            
            <figure class="figure">
                <img src="public/img/dzieci.jpg" alt="">
                <figcaption>Zdjęcie2</figcaption>
            </figure>
            
            <div class="clear"></div>
            
            <figure class="figure">
                <img src="public/img/dzieci.jpg" alt="">
                <figcaption>Zdjęcie3</figcaption>
            </figure>
            
            <figure class="figure">
                <img src="public/img/dzieci.jpg" alt="">
                <figcaption>Zdjęcie4</figcaption>
            </figure>
            
            <div class="clear"></div>
            
        </div>
           
        <div id="fb">  
            <h3>FB</h3>
            <div class="fb-page" data-href="https://www.facebook.com/Stowarzyszenie-Nasze-Dzieci-128761657187814/" data-tabs="timeline" data-width="380" data-height="380" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
        </div>
           
    </div>
    
    <div id="partnerzy">
        <h2>Wspierają nas!</h2>
        <div id="border">  
            <i class="border"></i><i class="icon-group"></i><i class="border"></i>
        </div>
    </div>
    
    
    <?php
    echo $this->title;
    $news = $this->news;
    $describes = $this->describes;
    $images = $this->images;
    
    if($news !== false){
        echo "<div id='aktualnosci'>";
        echo "<h2>Aktualności</h2>";
        foreach ($news as $row){
            echo "<div class='aktualnosci'>";
            //  TUTAJ MUSZE PODAC ADRES DO ZDJECIA, ONO NIE MOZE BYC W CSS
            echo "<div class='zdjecie'></div>";
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
            <div class="info"><h4>O fundacji</h4></div>
            <div class="info"><h4>News</h4></div>
            <div class="info"><h4>Dla darczyńców</h4></div>
            <div class="info"><h4>Kontakt</h4></div>
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