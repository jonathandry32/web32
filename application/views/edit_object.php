<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Edit the object</h5>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="update">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $obj_def[0];?>">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="<?php echo $obj_def[2];?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="descri" value="<?php echo $obj_def[5];?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="prix" value="<?php echo $obj_def[4];?>">
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><input type="submit" class="btn btn-warning w-100" value="Edit"></div>
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