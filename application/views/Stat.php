<main>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <div class="col-lg-6" style="margin-top: 100px;">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-3">
                                <h5 class="card-title text-center pb-0 fs-4">Membre inscrit: <?php echo $total; ?> </h5>
                                <?php for ($i=0; $i < count($list_membre); $i+=3) { ?>
                                    <p class="text-center small">
                                       <?php echo $list_membre[$i]." ".$list_membre[$i+1]." ".$list_membre[$i+2]; ?>
                                    </p>
                                <?php } ?>
                                <h5 class="card-title text-center pb-0 fs-4">Echange effectuer: <?php echo $historic; ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>