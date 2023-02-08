<main>
	<section class="section">
		<div class="container">
			<div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
				<div class="col-lg-8" style="margin-top: 100px;">
					<div class="card mb-3">
						<div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Categorie</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Prix</th>
                                    <th> Echange </th>
                                    <th> </th>
                                </tr>
                                <?php for ($i=0; $i < count($list_objet); $i+=7) { ?>
                                <tr>
                                    <td> <?php echo $list_objet[$i+1]; ?> </td>
                                    <td> <?php echo $list_objet[$i+2]; ?> </td>
                                    <td> <?php echo $list_objet[$i+5]; ?> </td>
                                    <td> <?php echo $list_objet[$i+4]; ?> </td>
                                    <td>
                                        <form action="estimation/10/<?php echo $list_objet[$i+4]; ?>" method="post">
                                            <input type="hidden" value="<?php echo $list_objet[$i]; ?>" name="10">
                                            <button class="btn btn-primary" type="submit"  style="background-color:pink">10%</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="estimation/20/<?php echo $list_objet[$i+4]; ?>" method="post">
                                            <input type="hidden" value="<?php echo $list_objet[$i]; ?>" name="20">
                                            <button class="btn btn-primary" type="submit"  style="background-color:pink">20%</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
						</div>
					</div> 
				</div>
			</div>


		</div>
	</section>
</main>
