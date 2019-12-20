<?php

 $title = 'Informations';
 ob_start();

?>
<a href="index.php"> menu</a><br><br>
<div class="container">
<div class="md-6">
    <img src="images/Des-etoiles-et-des-ailes-2018-voltige.jpg"></div>
    <div class="md-6">
    <img src="images/images (3).jpg"></div>
</div>

    <div class="col-md-6" >
    <article id="article1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Corporis quaerat eos earum facilis minima ex ducimus quidem blanditiis accusantium odio a rerum laudantium ab, quos nostrum. 
        Repellendus aspernatur enim distinctio.
    </article></div>
    <div class="col-md-6" >
    <article id="article2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Corporis quaerat eos earum facilis minima ex ducimus quidem blanditiis accusantium odio a rerum laudantium ab, quos nostrum. 
        Repellendus aspernatur enim distinctio.
    </article>
    </div>

</div>




<?php

 $content = ob_get_clean();

 require 'views/template.php';