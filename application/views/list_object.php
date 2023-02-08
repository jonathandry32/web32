<main>
	<section class="section">
		<div class="container">
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
                                    <th> </th>
                                    <th> </th>
                                </tr>
                                <?php for ($i=0; $i < count($list_objet); $i+=7) { ?>
                                <tr>
                                    <td> <?php echo $list_objet[$i]; ?> </td>
                                    <td> <?php echo $list_objet[$i+1]; ?> </td>
                                    <td> <?php echo $list_objet[$i+2]; ?> </td>
                                    <td> <?php echo $list_objet[$i+5]; ?> </td>
                                    <td> <?php echo $list_objet[$i+3]; ?> </td>
                                    <td> <?php echo $list_objet[$i+4]; ?> </td>
                                    <td>
                                        <form action="edit_page" method="post">
                                            <input type="hidden" value="<?php echo $list_objet[$i]; ?>" name="idedit">
                                            <button class="btn btn-primary" type="submit"  style="background-color:lightgreen">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="delete" method="post">
                                            <input type="hidden" value="<?php echo $list_objet[$i]; ?>" name="iddel">
                                            <button class="btn btn-primary" type="submit"  style="background-color:red">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                                  </br>
                            <form id="login" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="#">
                                  <div class="row mb-3">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                    <input type="file" name="avatar">
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="idobjet" placeholder="Id object">
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit" style="background-color:red">Upload</button>
                            </form>
						</div>
					</div> 
				</div>
			</div>


		</div>
	</section>
</main>
