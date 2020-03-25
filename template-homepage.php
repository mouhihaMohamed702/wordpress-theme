<?php

/*
template name: Home Page
*/
?>
<?php get_header(); ?>

<div class="wrapper">
    <div class="section">
        <img class="est" src="images/EST.jpg" alt="">
        <h1> Good  Beginning Makes a Good Ending</h1>
        <p>L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public <br>
        d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Créée en Août <br> 
        2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la <br>
        Recherche Scientifique du Royaume du Maroc, l'ESTSB est une composante de l’Université <br>
        Chouaib Doukkali d’El Jadida. Sa vocation est de former des Techniciens Supérieurs <br>
        polyvalents, hautement qualifiés et immédiatement opérationnels après leur sortie de l'École <br>
        en tant que collaborateurs d’ingénieurs et de managers. Sont admis à l'EST, les bacheliers de <br>
        l’enseignement secondaire technique, scientifique et tertiaire.</p>
        <div class="features">
        <h1>Notre Filières</h1>
            <button>Génie Informatique GI</button>
            <button>Technique de Management TM</button>
            <button>Génie Agricole GA</button>
            <div id="filiere">
                 <div class="informatique">
                    <img src="images/genie.jpg">
                </div>
                 <div class="management">
                    <img src="images/tm.jpg">
                </div> 
                <div class="agricole">
                    <img src="images/ga.jpg">
                </div>     
            </div>

        </div>
    </div>
</div>



<?php get_footer(); ?>