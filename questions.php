<!doctype html>
<html>
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- STYLE CSS LINK-->
    <link rel="stylesheet" href="css/style2.css">
    <!-- BOOTSTRAP PLUGIN FILE CSS LINK -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME PLUGIN FILE-->
    <script src="js/all.min.js"></script>
    <!-- FONT PLUGIN FILE-->
    <link rel="stylesheet" href="font/DoHyeon-Regular.ttf">
      <!-- GOOGLE FONT LINK-->
      <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
 
 </head>
 <body>
<!---- SIENCE TEST IMG --> 
<section id="photo-pub">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2 text-center w-50% mx-auto pt-4"> 
               Test Your Science Knowledge
        </h1>
      </div>
    </div>
  </div>
</section>
<!---- END SCIENCE TEST IMG ======== --> 

<!---- QUESTIONS SECTION START HERE ======== --> 
 <section class="py-5" id="questions">
<div class="container">
    <div class="row height-90 align-items-center justify-content-center">
        <div class="col-10">
            <div class="questions  my-4">
<center>
            <?php
 error_reporting(0) ;
//==============================//questions Starts//========================================//
$questions = array(
                1 => array(
                'question' => '1.For every action, there is an equal opposite reaction. which of the Newton law of motion is it?',
                'answers' => array(
                    'A' => 'First law',
                    'B' => 'Second law',
                    'C' => 'Third law',
                    'D'=>  'Law of gravitation'
                ),
                'CorrectAnswer' => 'C'
                ),
                2 => array(
                'question' => '2. Which cell organelle is called powerhouse of a cell?',
                'answers' => array(
                    'A' => 'Ribosome',
                    'B' => 'Endoplasmic reticulum',
                    'C' => 'Cytoplasm',
                    'D'=>  'Mitochondria'
                ),
                'CorrectAnswer' => 'D'
                ),
                3 => array
                (
                'question' => '3.The bending of light through a class prism is called?',
                'answers' => array(
                    'A' => 'Reflection',
                    'B' => 'Refraction',
                    'C' => 'Diffraction',
                    'D'=>  'Absorption'
                ),
                'CorrectAnswer' => 'B'
                ),
                4 => array(
                'question' => '4.A lion is mostly related to which of the animals?',
                'answers' => array(
                    'A' => 'Dog',
                    'B' => 'Raccoon',
                    'C' => 'Wolf',
                    'D'=>  'Leopard'
                ),
                'CorrectAnswer' => 'D'
                ),
                5 => array(
                'question' => '5.Which one of the following is NOT a of carbon?',
                'answers' => array(
                    'A' => 'Diamond',
                    'B' => 'Graphite',
                    'C' => 'Amorphous carbon',
                    'D'=>  'Ferrite'
                ),
                'CorrectAnswer' => 'D'
                ),
                6 => array(
                'question' => '6.Sweet potato is an example of a modified?',
                'answers' => array(
                    'A' => 'Leaf',
                    'B' => 'Root',
                    'C' => 'Stem',
                    'D'=>  'Branch'
                ),
                'CorrectAnswer' => 'B'
                ),

                7 => array(
                'question' => '7.Which is a lightest element in the periodic table?',
                'answers' => array(
                    'A' => 'Helium',
                    'B' => 'Carbon',
                    'C' => 'Nitrogen',
                    'D'=>  'Hydrogen'
                ),
                'CorrectAnswer' => 'D'
                ),
                8 => array(
                'question' => '8.What element are the most common in human body?',
                'answers' => array(
                    'A' => 'Sulfur, sodium, magnesium',
                    'B' => 'Phosphorus, nitrogen, calcium',
                    'C' => 'Copper, zince, selenium',
                    'D'=>  'Oxygen, carbon, hydrogen'
                ),
                'CorrectAnswer' => 'D'
                ),

                9 => array(
                'question' => '9.Diabetes happens because of problems in which organ of our body?',
                'answers' => array(
                    'A' => 'Liver',
                    'B' => 'Heart',
                    'C' => 'Pancrease',
                    'D'=>  'Kidney'
                ),
                'CorrectAnswer' => 'C'
                ),
                10 => array(
                'question' => '10.An acidic liquid with have a?',
                'answers' => array(
                    'A' => 'Low pH',
                    'B' => 'Medium pH',
                    'C' => 'High pH',
                    'D'=>  'Strong pH'
                ),
                'CorrectAnswer' => 'C'
                ),

                11 => array(
                'question' => '11.What tissue connects muscles to bones?',
                'answers' => array(
                    'A' => 'Skin',
                    'B' => 'Blood vessels',
                    'C' => 'Fat',
                    'D'=>  'Tendon'
                ),
                'CorrectAnswer' => 'D'
                ),
                12 => array(
                'question' => '12.Which nutrients plays an assential role in muscle-building?',
                'answers' => array(
                    'A' => 'Protein',
                    'B' => 'Carbohydrate',
                    'C' => 'Iron',
                    'D'=>  'Fat'
                ),
                'CorrectAnswer' => 'A'
                ),

                13 => array(
                'question' => '13.Plants need which gas to perform photosynthesis?',
                'answers' => array(
                    'A' => 'Hydrogen',
                    'B' => 'Carbon monoxide',
                    'C' => 'Carbon dioxide',
                    'D'=>  'Oxygen'
                ),
                'CorrectAnswer' => 'C'
                ),
                14 => array(
                'question' => '14.Which scientist proposed the Law of motion?',
                'answers' => array(
                    'A' => 'Isaac Newton',
                    'B' => 'Thomas Alva Edison',
                    'C' => 'Albert Einstein',
                    'D'=>  'Stephen Hawking'
                ),
                'CorrectAnswer' => 'A'
                ),

                15 => array(
                'question' => '15.Earth is surrounded by layers of gases collectively called?',
                'answers' => array(
                    'A' => 'Hydrosphere',
                    'B' => 'Stratosphere',
                    'C' => 'Atmosphere',
                    'D'=>  '0zone Layer'
                ),
                'CorrectAnswer' => 'C'
                ),
                16 => array(
                'question' => '16.Which system of the body controls the senses?',
                'answers' => array(
                    'A' => 'Circulatory system',
                    'B' => 'Digestive system',
                    'C' => 'Nervous system',
                    'D'=>  'Skeletal system'
                ),
                'CorrectAnswer' => 'C'
                ),

                17 => array(
                'question' => '17.Which animal is the largest in the world?',
                'answers' => array(
                    'A' => 'Shark',
                    'B' => 'Elephent',
                    'C' => 'Blue whale',
                    'D'=>  'Giraffe'
                ),
                'CorrectAnswer' => 'C'
                ),
                18 => array(
                        'question' => '18.Similar body cells group together to form?',
                        'answers' => array(                        
                        'A' => 'Organ',
                        'B' => 'Tissue',
                        'C' => 'Blood vessels',
                        'D'=>  'Joints'
                ),
                'CorrectAnswer' => 'B'
                ),
                19 => array(
                    'question' => '19.Which energy emerges from motion?',
                    'answers' => array(
                        'A' => 'Potention energy',
                        'B' => 'Electrical energy',
                        'C' => 'Kinetic energy',
                        'D'=>  'Gravitational energy'
                ),
                'CorrectAnswer' => 'C'
                ),
                20 => array(
                    'question' => '20.Which is the strongest in dogs?',
                    'answers' => array(
                        'A' => 'Touch',
                        'B' => 'Hearing',
                        'C' => 'Smelling',
                        'D'=>  'Taste'
                ),
                    'CorrectAnswer' => 'C'
                )
);
//==========================//questions ends//========================================
                if (isset($_POST['answers'])){
                    $answers = $_POST['answers']; // Get submitted answers.

                    // Now this is fun, automated question checking! ;)
                    $counter=0;
                    foreach ($questions as $questionNo => $Value){
                        // Echo the question
                        echo $Value['question'].'<br />';

                        if ($answers[$questionNo] != $Value['CorrectAnswer']){
                            echo 'You answered: <span style="color: red;">'.$Value['answers'][$answers[$questionNo]].'</span><br>'; // Replace style with a class
                            echo 'Correct answer: <span style="color: green;">'.$Value['answers'][$Value['CorrectAnswer']].'</span>';
                        } else {
                            echo 'Correct answer: <span style="color: green;">'.$Value['answers'][$answers[$questionNo]].'</span><br>'; // Replace style with a class
                            echo 'You are correct: <span style="color: green;">'.$Value['answers'][$answers[$questionNo]].'</span>';
                            $counter++;
                        }

                        echo '<br /><hr>'; 
                                                if ($counter==0) 
                                                { 
                                            
                                                $results = "Your score: $counter/20"; 
                                                }
                                                else 
                                                { 
                                                $results = "Your score: $counter/20"; 
                                                }
                            }                           echo $results;
} else {  
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($questions as $questionNo => $Value){ ?>

        <h3><?php echo $Value['question']; ?></h3>
        <?php 
            foreach ($Value['answers'] as $Letter => $answer){ 
            $Label = 'question-'.$questionNo.'-answers-'.$Letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $answer; ?> </label>
        </div>
        <?php } ?>

    <?php } ?>
    <button type="button" class="btn btn-primary btn-lg btn-block">Submit Quiz</button>
    </form>
<?php 
}
?>

            </div>
        </div>
    </div>
</div>

 </section>


 <footer>
 <div class="container-fluid info p-3">
    <div class="row">
        <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
             <!--SOCIALS ICONS FOR NAVBAR INFO-->
            <div class="info-icons p-2">
                <a href="#" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="mr-2 primary-color"><i class="fab fa-yelp fa-2x"></i></a>
            </div>
                        <!--TEXT H2 FOR NAVBAR INFO-->
               <h4 class=" p-2 mx-auto">copyright 2020</h4>
        </div>
    </div>
</div><!--END FIRST NAVBAR CLASS INFO ======================= -->
<a href="#photo-pub" class="btn scrolltop p-1" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
 </footer>
 </body>
</html>