<section class="my-4">
    <div class="container">
    <form method="post" action="<?php echo site_url('Hobi/save'); ?>">
        <!-- input type hidden -->
        <input type="hidden" id="id" name="id" value="<?php if(!empty($dataHobi)) echo $dataHobi->kode_hobi;?>">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama Hobi</label>
            <input type="text" class="form-control" id="nama" name='nama' required value="<?php if(!empty($dataHobi)) echo $dataHobi->nama_hobi;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>

</section>