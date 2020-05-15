<style>
    table,
    tr,
    td,
    th {
        text-align: center;

    }

    .img-fluid {
        max-height: 75px;
        min-height: 75px;
        max-width: 75px;
        min-width: 75px;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }
</style>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10"><?= $title ?></h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!"><?= $title ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5><?= $title ?></h5>
                <div class="card-header-right">
                    <div class="float-right">
                        <?php echo $btntambah ?>
                    </div>
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Seminar</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($seminar as $s) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $s->nama_seminar ?></td>
                                    <td><?php echo $s->tgl_pelaksana ?></td>
                                    <td>
                                        <div class="col-sm-12 ">
                                            <a href="<?php echo base_url("uploads/poster/{$s->lampiran}") ?>" data-lightbox="example-set" data-title="<?php echo $s->nama_seminar ?>">
                                                <img src="<?php echo base_url("uploads/poster/{$s->lampiran}") ?>" class="img-fluid m-b-10" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($s->id_tiket == NULL) : ?>
                                        <a href="#" class="btn btn-sm btn-gradient-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="Silahkan Masukkan Data Tiket, Pembicara, dan Sponsor"><i class="feather icon-eye"></i>Detail</a>
                                        <?php elseif ($s->id_tiket != NULL) : ?>
                                            <?php echo anchor("seminar/detail/{$s->id_seminar}", "<i class='feather icon-eye'></i>Detail", ['class' => 'btn btn-sm btn-gradient-info']) ?>
                                        <?php endif; ?>

                                        <?php echo anchor("seminar/update/{$s->id_seminar}", "<i class='feather icon-edit'></i>Edit", ['class' => 'btn btn-sm btn-gradient-warning']) ?>
                                        <?php echo anchor("seminar/delete/{$s->id_seminar}", "<i class='feather icon-trash-2'></i>Hapus", ['class' => 'btn btn-sm btn-gradient-danger remove-data']) ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Seminar</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>