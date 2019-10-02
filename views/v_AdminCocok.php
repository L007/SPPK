<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=homeAdmin">← Kembali</a>
    <br>
    <div class="table-wrapper-3">

      <!--Table-->
      <table class="table table-responsive-md">
        <thead>
          <tr>
            <th class="th-lg">Nama Penyakit</th>
            <th class="th-lg">Gejala</th>
            <th class="th-lg"></th>
            <th class="th-lg">Cari</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cocoks as $cocok) { ?>
          <input class="hidden" name="idCocok" value="<?php echo $cocok->idCocok; ?>"></input>
            <tr>
              <td><?php echo $cocok->penyakit; ?></td>
              <td>G<?php echo $cocok->idGejala; ?></td>
            <td><a type="button" href="?controller=Cocok&action=hapusCocok&idCocok=<?php echo $cocok->idCocok; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!--Table-->

    </div>
    <br><br>
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#tambahCocok">Cocokkan Gejala & Penyakit</button>

    <!-- Modal tambahGejala -->
    <div id="tambahCocok" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Gejala</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST">
              <input class="hidden" name="controller" value="Cocok"></input>
              <input class="hidden" name="action" value="tambahCocok"></input>
              <div class="form-group">
                <label class="control-label col-lg-3">Pilih Penyakit :</label>
                <div class="col-lg-9">
                  <select class="form-control" name="penyakit">
                    <?php foreach ($penyakits as $penyakit) {?>
                      <option value="<?php echo $penyakit->idPenyakit; ?>"><?php echo $penyakit->penyakit; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="table-wrapper-3">

                <!--Table-->
                <table class="table table-responsive-md">
                  <thead>
                    <tr>
                      <th class="th-lg">Kode Gejala</th>
                      <th class="th-lg">Nama Gejala</th>
                      <th class="th-lg"></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($gejalas as $gejala) {?>
                      <tr>
                        <td>G<?php echo $gejala->idGejala; ?></td>
                        <td><?php echo $gejala->gejala; ?></td>
                        <td><input value="<?php echo $gejala->idGejala; ?>" type="checkbox" name="gejala[]"></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!--Table-->

              </div>
<br>
              <button type="submit" class="btn btn-success btn-block">ANALISA</button>
            </form>
          </div>
          <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
