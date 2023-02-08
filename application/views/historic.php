<main>
	<section class="section">
		<div class="container">
			<div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
				<div class="col-lg-8" style="margin-top: 100px;">
					<div class="card mb-3">
						<div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Acheteur</th>
                                    <th>Objet acheter</th>
                                    <th>Vendeur</th>
                                    <th>Objet vendu</th>
                                    <th>Date</th>
                                </tr>
                                <?php for ($i=0; $i < count($list_historic); $i+=9) { ?>
                                <tr>
                                    <td> <?php echo $list_historic[$i+5]; ?> </td>
                                    <td> <?php echo $list_historic[$i+6]; ?> </td>
                                    <td> <?php echo $list_historic[$i+7]; ?> </td>
                                    <td> <?php echo $list_historic[$i+8]; ?> </td>
                                    <td> <?php echo $list_historic[$i+4]; ?> </td>
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
