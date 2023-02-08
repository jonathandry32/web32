<!-- Vendor CSS Files -->
        <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="../../../assets/css/style.css" rel="stylesheet">

  <main id="main" class="main">    
		<div class="container">
		    <section class="section">
			 <?php for ($i=0; $i < count($list_objet); $i+=7) { 
			 	if ($i%24==0) { ?>
		      		<div class="row justify-content-center"style="background-color:whitesmoke;border-color:whitesmoke ">
			  	<?php } ?>
			  	<div class="col-lg-4"> 
					<img src="../../../assets/img/<?php echo $list_objet[$i+6]; ?>" width="122px" heigth="59px">
					<span class="d-none d-lg-block"> <?php echo $list_objet[$i+1]." ".$list_objet[$i+2]; ?></span>
					<span class="d-none d-lg-block">De <?php echo $list_objet[$i+3]; ?></span>
					<span class="d-none d-lg-block"><?php echo $list_objet[$i+4]." Ariary"; ?></span>
					<?php if ($pri>$list_objet[$i+4]) {
							$diff = (($list_objet[$i+4]/$pri)-1)*100;
						}
						else{
							$diff = (($pri/$list_objet[$i+4])-1)*100;
						}
					?>
					<span class="d-none d-lg-block">Difference:<?php echo $diff; ?> %</span>
					<span class="d-none d-lg-block">Indice: <?php echo $list_objet[$i]; ?></span>
				</div>
            <?php if (($i+1)%24==0) { ?>
            		</div>
            <?php }	} ?>
		</div><div class="row mb-5">
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
					<form method="post" action=<?php echo base_url("objet/echange") ; ?>>
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
						<img src="../../../assets/img/<?php echo $list_my_objet[$i+6]; ?>" width="122px" heigth="59px">
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
<script src="../../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/vendor/chart.js/chart.min.js"></script>
<script src="../../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../../assets/vendor/quill/quill.min.js"></script>
<script src="../../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../../assets/js/main.js"></script>