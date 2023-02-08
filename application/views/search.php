
  <main id="main" class="main">    
		<div class="container">
		    <section class="section">
			 <?php for ($i=0; $i < count($list_objet); $i+=7) { 
			 	if ($i%21==0) { ?>
		      		<div class="row justify-content-center"style="background-color:whitesmoke;border-color:whitesmoke ">
			  	<?php } ?>
			  	<div class="col-lg-4"> 
					<img src="../assets/img/<?php echo $list_objet[$i+6]; ?>" width="122px" heigth="59px">
					<span class="d-none d-lg-block"> <?php echo $list_objet[$i+1]." ".$list_objet[$i+2]; ?></span>
					<span class="d-none d-lg-block">De <?php echo $list_objet[$i+3]; ?></span>
					<span class="d-none d-lg-block"><?php echo $list_objet[$i+4]." Ariary"; ?></span>
					<span class="d-none d-lg-block">Descri <?php echo $list_objet[$i+5]; ?></span>
					<span class="d-none d-lg-block">Indice: <?php echo $list_objet[$i]; ?></span>
				</div>
            <?php if (($i+1)%21==0) { ?>
            		</div>
            <?php }	} ?>
		</div>
		<div class="row mb-5">
			<div class="col-sm-9">
				<div class="col-sm-9 input-group">
					<input type="text" class="form-control" placeholder="ECHANGER" aria-label="Trade" aria-describedby="basic-addon2" disabled>
					<button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#employes"> VOIR </button> 
				</div>
			</div>
		</div>

		<div class="modal fade" id="employes" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title"> Choix des produits </h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form method="post" action="../objet/echange">
						<div class="row mb-3">
		                    <div class="col-sm-9">
                    			<label for="inputText" class="col-sm-3 col-form-label">Son objet</label>
		                      <input type="text" class="form-control" name="son" placeholder="Ecrire l'indice de l'objet voulu">
                    			<label for="inputText" class="col-sm-3 col-form-label">Mon objet</label>
		                      <input type="text" class="form-control" name="mon" placeholder="Ecrire l'indice de l'objet a donner">
		                    </div>
                  		</div>
                  		<div class="row mt-1">
		                    <div class="col-sm-4"></div>
		                    <div class="col-sm-4"><input type="submit" class="btn btn-warning w-100" value="ECHANGER"></div>
                  		</div>
					</form>
                  	</br>
						<h5 class="modal-title"> Mes objets: </h5>
					<?php for ($i=0; $i < count($list_my_objet); $i+=7) { 
				 	if ($i%21==0) { ?>
			      		<div class="row justify-content-center"style="background-color:whitesmoke;border-color:whitesmoke ">
				  	<?php } ?>
				  	<div class="col-lg-4">
						<img src="../assets/img/<?php echo $list_my_objet[$i+6]; ?>" width="122px" heigth="59px">
						<span class="d-none d-lg-block"> <?php echo $list_my_objet[$i+1]." ".$list_my_objet[$i+2]; ?></span>
						<span class="d-none d-lg-block">De <?php echo $list_my_objet[$i+3]; ?></span>
						<span class="d-none d-lg-block"><?php echo $list_my_objet[$i+4]." Ariary"; ?></span>
						<span class="d-none d-lg-block">Descri <?php echo $list_my_objet[$i+5]; ?></span>
						<span class="d-none d-lg-block">Indice: <?php echo $list_my_objet[$i]; ?></span>
					</div>
		            <?php if (($i+1)%21==0) { ?>
		            	</div>
		            <?php }	} ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Annuler </button>
					</div>
				</div>
			</div>
		</div>



    </section>
  </main><!-- End #main -->