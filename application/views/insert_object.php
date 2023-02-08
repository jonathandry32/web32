<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Add new object</h5>
                  <p class="text-center small">Entrez les informations concerant l'objet.
                  </p>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="insert">
                  
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="descri">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Categories</label>
                    <div class="col-sm-9">
                      <select class="form-select" aria-label="Default select example" name="idc">
                          <option value="#"> Choisir ...</option>
                          <?php for ($i=0; $i < count($list_cat); $i+=2) { ?>
                              <option value="<?php echo $list_cat[$i]; ?>"><?php echo $list_cat[$i+1]; ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="prix">
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><input type="submit" class="btn btn-warning w-100" value="Add"></div>
                  </div>
              </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->