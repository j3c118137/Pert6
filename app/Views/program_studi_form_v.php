<section class="my-4">
    <div class="container">
    <form method="post" action="<?php echo site_url('Program_Studi/save'); ?>">
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" required maxlength='1' value="<?php if(!empty($dataProdi)) echo $dataProdi->kode_prodi;?>">
            <input type="hidden" id="id" name="id" value="<?php if(!empty($dataProdi)) echo $dataProdi->kode_prodi;?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Program Studi</label>
            <input type="text" class="form-control" id="nama" name='nama' required value="<?php if(!empty($dataProdi)) echo $dataProdi->nama_prodi;?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ketua</label>
            <input type="text" class="form-control" id="ketua" name='ketua' required value="<?php if(!empty($dataProdi)) echo $dataProdi->ketua_prodi;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>

</section>