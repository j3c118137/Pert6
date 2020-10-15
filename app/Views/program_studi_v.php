<section>

    <div class="container">
        <h2>Program Studi</h2>
        <?php if(!empty($session)) { ?>
        <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger';?> alert-dismissible fade show" role="alert">
            <?php echo $session['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>

        <p>
            <a href="Program_Studi/add" class="btn btn-primary btn-sm">
               <i class="fa fa-plus"></i> Tambah
            </a>
        </p>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Aksi</th>
                    <th>Kode</th>
                    <th>Program Studi</th>
                    <th>Ketua</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($dataProdi as $row) :?>
                <tr>
                    <td>
                        <a href="<?php echo site_url("Program_Studi/edit/".$row->kode_prodi); ?>" class="btn btn-warning btn-sm">
                           <i class="fa fa-edit"></i> Ubah
                        </a>
                        <a href="<?php echo site_url("Program_Studi/delete/".$row->kode_prodi); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin data akan dihapus?');">
                           <i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                    <td><?php echo $row->kode_prodi; ?></td>
                    <td><?php echo $row->nama_prodi; ?></td>
                    <td><?php echo $row->ketua_prodi; ?></td>
                </tr>

            <?php 
            
            endforeach;
            
            if (empty($dataProdi)) {
            ?>

                <tr>
                    <td class="text-center" colspan="4">Tidak Ada Data</td>
                </tr>

            <?php

            }
            
            ?>
            </tbody>
        </table>
    </div>

</section>