<div>
 <!--   <?php
    echo $this->title;
    $news = $this->news;
    $describes = $this->describes;
    $images = $this->images;
    var_dump($news);
    echo '<br>';
    var_dump($images);
    echo '<br>';
    var_dump($describes);
    
    if($news !== false){
        foreach ($news as $row){
            echo "<div><a href='".URL.$row['href']."'>";
            echo '<h1>'.$row['name'].'</h1>';
            
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
    ?>-->
</div>

<div>
   <!-- <h1>Archiwum</h1>
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
    </ul>-->
</div> 
   
<div id="nextnews">
   
    <div class="nextnews">
        <h2>Nazwa aktualności</h2>
        <figure class="figurenews">

            <img src="public/img/dzieci.jpg" alt="">
            <figcaption>14 | 07 | 2017</figcaption>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis aliquam asperiores laudantium quas dolore iure, illum nostrum, a perferendis, praesentium odio rem dolorem ea similique excepturi tenetur illo, sit ...</p>
        </figure> 
        <a href="">więcej</a>
    </div>

    <div class="nextnews">
       
        <h2>Nazwa aktualności</h2>
        <figure class="figurenews">

            <img src="public/img/dzieci.jpg" alt="">
            <figcaption> 14 | 07 | 2017 </figcaption>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis aliquam asperiores laudantium quas dolore iure, illum nostrum, a perferendis, praesentium odio rem dolorem ea similique excepturi tenetur illo, sit ...</p>
        </figure> 
        <a href="">więcej</a>
    </div>



    <div class="nextnews">
       
        <h2>Nazwa aktualności</h2>
        <figure class="figurenews">

            <img src="public/img/dzieci.jpg" alt="">
            <figcaption> 14 | 07 | 2017</figcaption>
            
        </figure> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis aliquam asperiores laudantium quas dolore iure, illum nostrum, a perferendis, praesentium odio rem dolorem ea similique excepturi tenetur illo, sit ...</p>
        <a href="">więcej</a>
    </div>

</div>

<div id="resp"></div>

<aside id="asidenews">
   
    <h3>Archiwum</h3>
    <ul id="ulnews">
       <li><a href="">styczeń</a></li>
       <li><a href="">luty</a></li>
       <li><a href="">marzec</a></li>
       <li><a href="">kwiecień</a></li>
       <li><a href="">maj</a></li>
       <li><a href="">czerwiec</a></li>
       <li><a href="">lipiec</a></li>
       <li><a href="">sierpień</a></li>
       <li><a href="">wrzesień</a></li>
       <li><a href="">październik</a></li>
       <li><a href="">listopad</a></li>
       <li><a href="">grudzień</a></li>     
    </ul>
    
</aside>

<div class="clear"></div>










