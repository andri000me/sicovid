<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Covid
                    <?= $this->session->flashdata('flash'); ?>
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <input type="hidden" name="id_covid" value="<?= $id['id_covid']; ?>">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name='tanggal' class="form-control" id="tanggal" value="<?= $id['tanggal']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?> </small>

                        </div>

                        <input type="hidden" name="status_cek" value="1">

                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" name="id_kecamatan" readonly>
                                <?php foreach ($kec as $k) : ?>
                                    <?php if ($k['id_kecamatan'] == $id['id_kecamatan']) : ?>

                                        <option value="<?= $k['id_kecamatan']; ?>" selected readonly> <?= $k['nama_kecamatan']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k['id_kecamatan']; ?>" selected readonly> <?= $k['nama_kecamatan']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positif">Positif</label>
                            <input type="number" name='positif' class="form-control" id="positif" value="<?= $id['positif']; ?>">
                            <small class="form-text text-danger"><?= form_error('positif'); ?> </small>

                        </div>

                        <div class="form-group">
                            <label for="odp">ODP</label>
                            <input type="number" name='odp' class="form-control" id="odp" value="<?= $id['odp']; ?>">
                            <small class="form-text text-danger"><?= form_error('odp'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="pdp">PDP</label>
                            <input type="number" name='pdp' class="form-control" id="pdp" value="<?= $id['pdp']; ?>">
                            <small class="form-text text-danger"><?= form_error('pdp'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="sembuh">Sembuh</label>
                            <input type="number" name='sembuh' class="form-control" id="sembuh" value="<?= $id['sembuh']; ?>">
                            <small class="form-text text-danger"><?= form_error('sembuh'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="meninggal">Meninggal</label>
                            <input type="number" name='meninggal' class="form-control" id="meninggal" value="<?= $id['meninggal']; ?>">
                            <small class="form-text text-danger"><?= form_error('meninggal'); ?> </small>

                        </div>

                        <a href="<?= base_url('kecamatan'); ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-danger float-right">Update Data </button>



                    </form>


                </div>
            </div>




        </div>

    </div>
</div>