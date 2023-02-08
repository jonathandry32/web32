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
                                    <th>Son objet</th>
                                    <th>Mon objet</th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                                <?php for ($i=0; $i < count($list_demande); $i+=7) { ?>
                                <tr>
                                    <td> <?php echo $list_demande[$i]; ?> </td>
                                    <td> <?php echo $list_demande[$i+1]; ?> </td>
                                    <td> <?php echo $list_demande[$i+2]; ?> </td>
                                    <td>
                                        <form action="Accepter" method="post">
                                            <input type="hidden" value="<?php echo $list_demande[$i+4]; ?>" name="at">
                                            <input type="hidden" value="<?php echo $list_demande[$i+5]; ?>" name="oa">
                                            <input type="hidden" value="<?php echo $list_demande[$i+6]; ?>" name="ov">
                                            <input type="hidden" value="<?php echo $list_demande[$i+3]; ?>" name="id">
                                            <button class="btn btn-primary" type="submit"  style="background-color:lightgreen">Accepter</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="Refuser" method="post">
                                            <input type="hidden" value="<?php echo $list_demande[$i+3]; ?>" name="id">
                                            <button class="btn btn-primary" type="submit"  style="background-color:red">Refuser</button>
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
