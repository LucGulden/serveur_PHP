<?php $__env->startSection('content'); ?>
  <section class="mbr-section form1 cid-rfRVRaDa1Q" id="form1-c">
    <div class="titrepage">
                <h1>Boite à idées</h1>
                <h2>Proposez nous des idées d'évènements</h2>
    </div>
	
	<form method="post" action="traitement.php">
   		<p>
		   <label for="titreidee">Titre de votre idée :</label>
       	   <input type="text" name="titreidee" id="titreidee" />
       
       <br />
       		<label for="descriptionidee">Description de votre idée:</label>
       		<textarea name="descriptionidee" id="descriptionidee"></textarea>
		   </p>
		   <p> <button type="submit">Soumettre l'idée!</button> </p>
		</form>

</section>

<section>
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">J'aime</button></span>
        </div>
    </div>

    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">J'aime</button></span>
        </div>
    </div>

    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">J'aime</button></span>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>