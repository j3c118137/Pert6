<section>

    <div class="container">
        <h2>Agama</h2>
        <?php if(!empty($session)) { ?>
        <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger';?> alert-dismissible fade show" role="alert">
            <?php echo $session['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>

        <p>
            <a href="Agama/add" class="btn btn-primary btn-sm">
               <i class="fa fa-plus"></i> Tambah
            </a>
        </p>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Aksi</th>
                    <th>Kode</th>
                    <th>Nama Agama</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($dataAgama as $row) :?>
                <tr>
                    <td>
                        <a href="<?php echo site_url("Agama/edit/".$row->kode_agama); ?>" class="btn btn-warning btn-sm">
                           <i class="fa fa-edit"></i> Ubah
                        </a>
                        <a href="<?php echo site_url("Agama/delete/".$row->kode_agama); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin data akan dihapus?');">
                           <i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                    <td><?php echo $row->kode_agama; ?></td>
                    <td><?php echo $row->nama_agama; ?></td>
                </tr>

            <?php 
            
            endforeach;
            
            if (empty($dataAgama)) {
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