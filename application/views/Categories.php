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
                                    <th>Nom</th>
                                    <th> </th>
                                </tr>
                                <?php for ($i=0; $i < count($list_cat); $i+=2) { ?>
                                <tr>
                                    <td> <?php echo $list_cat[$i]; ?> </td>
                                    <td> <?php echo $list_cat[$i+1]; ?> </td>
                                    <td>
                                        <form action="delete" method="post">
                                            <input type="hidden" value="<?php echo $list_cat[$i]; ?>" name="id">
                                            <button class="btn btn-primary" type="submit"  style="background-color:red">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                        </br>
                        <form action="insert" method="post"> 
                            <div class="col-12">
                              <label for="yourPassword" class="form-label">Categories</label>
                              <input type="text" name="name" class="form-control" id="yourPassword" placeholder="Nom du nouveau categorie" required>
                              <div class="invalid-feedback">Please enter your categorie's name!</div>
                            </div>
                        </br>
                            <div class="row">
                                <div class="col-4"> </div>
                                <div class="col-4">
                                  <button class="btn btn-primary w-100" type="submit">Add</button>
                                </div>
                                <div class="col-4"> </div>
                            </div>
                        </form>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</section>
</main>
