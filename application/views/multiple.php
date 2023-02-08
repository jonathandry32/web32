
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
		</div>
  </main><!-- End #main -->