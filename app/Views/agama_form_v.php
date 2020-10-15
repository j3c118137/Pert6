<section class="my-4">
    <div class="container">
    <form method="post" action="<?php echo site_url('Agama/save'); ?>">
        <!-- input type hidden -->
        <input type="hidden" id="id" name="id" value="<?php if(!empty($dataAgama)) echo $dataAgama->kode_agama;?>">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama Agama</label>
            <input type="text" class="form-control" id="nama" name='nama' required value="<?php if(!empty($dataAgama)) echo $dataAgama->nama_agama;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>

</section>