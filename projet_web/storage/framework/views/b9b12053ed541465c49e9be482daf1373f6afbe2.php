<?php $__env->startSection('content'); ?>
  <section>
    <div class="titrepage">
                <h1>Boite à idées</h1>
                <h2>Proposez nous des idées d'évènements</h2>
    </div>
	
	<form method="post">
   		<p>
		   <label for="titreidee">Titre de votre idée :</label>
       	   <input type="text" name="titreidee" id="titreidee" />
       
       <br />
       		<label for="descriptionidee">Description de votre idée:</label>
       		<textarea name="descriptionidee" id="descriptionidee"></textarea>
		   </p>
		   <p> <button type="submit" onclick="submitform()">Soumettre l'idée!</button> </p>
		</form>

</section>

<section id="testget">
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
		<button type="submit">J'aime!</button>
        </div>
    </div>

    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <button type="submit">J'aime!</button>
        </div>
    </div>

    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <button type="submit">J'aime!</button>
        </div>
    </div>

</section>

<script>

var getJSON = function(url) {
	return new Promise(function (data,err){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', url, true);
		xhr.responseType = 'json';
		console.log(xhr);
		xhr.onload = function() {
			var status = xhr.status;
			if (status === 200) {
				data(xhr.response);
			} 
			else {
				err(status, xhr.response);
			}
		}
		xhr.send();
	});
};

var ideablock = "";
const getIdea= function(data){
    ideablock = ideablock + "<div class='container-fluid border border-warning rounded mb-0'> <h3>" + data[0].titre_idee + "</h3> <p>" + data[0].description_idee + "</p> <div class='jaime'> <span class='input-group-btn'><button href='' type='submit' class='btn btn-form btn-black display-4'>J'aime</button></span> </div> </div>";
    document.getElementById("testget").innerHTML = ideablock ; 
    console.log(data);
};
for (var i = 0; i < 15; i++) {
    getJSON('http://localhost:3000/idee/'+ i).then(getIdea);
}
</script>

<script>
   
function submitform(){
  
  alert("test");

    var titre = $("#titreidee").val();
    var descrip = $("#descriptionidee").val();

    var datapost = {

        "titre_idee":$("#titreidee").val(),
        "description_idee":$("#descriptionidee").val()
    };

    console.log(JSON.stringify(datapost));

    console.log(datapost);
    $.ajax({
        type: "POST",
        url: "http://localhost:3000/",
        data: {titre_idee: titre, description_idee: descrip}, //JSON.stringify(datapost),
        success: function(){
           // window.location.reload()
        },
        dataType: "json",
        contentType : "application/json"
    });
 }
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>