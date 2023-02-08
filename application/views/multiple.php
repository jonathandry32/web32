
  <main id="main" class="main">    
		<div class="container">
		    <section class="section">
					<div class="modal-header">
						<h5 class="modal-title"> Choix Multiples </h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form method="post" action=<?php echo base_url('objet/echange_m'); ?>>
						<div class="row mb-3">
		                    <div class="col-sm-9">
                    			<label for="inputText" class="col-sm-3 col-form-label">Son objet</label>
		                      <input type="text" class="form-control" name="son" placeholder="Ecrire l'indice de l'objet voulu">
                    			<label for="inputText" class="col-sm-3 col-form-label">Mon objet</label>
		                      <input type="text" class="form-control" name="mon" placeholder="Ecrire le/les indice(s) des objets a donner">
		                    </div>
                  		</div>
                  		<div class="row mt-1">
		                    <div class="col-sm-4"></div>
		                    <div class="col-sm-4"><input type="submit" class="btn btn-warning w-100" value="ECHANGER"></div>
                  		</div>
					</form>
    		</section>

    		<div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
				<div class="col-lg-8" style="margin-top: 100px;">
					<div class="card mb-3">
						<div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Id</th>
                                    <th>Categorie</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Proprietaire</th>
                                    <th>Prix</th>
                                </tr>
                                <?php for ($i=0; $i < count($list_objet); $i+=6) { ?>
                                <tr>
                                    <td> <?php echo $list_objet[$i]; ?> </td>
                                    <td> <?php echo $list_objet[$i+1]; ?> </td>
                                    <td> <?php echo $list_objet[$i+2]; ?> </td>
                                    <td> <?php echo $list_objet[$i+5]; ?> </td>
                                    <td> <?php echo $list_objet[$i+3]; ?> </td>
                                    <td> <?php echo $list_objet[$i+4]; ?> </td>
                                   
                                </tr>
                            <?php } ?>
                            </table>
                                  </br>
						</div>
					</div> 
				</div>

		</div>
  </main><!-- End #main -->