<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php if (!empty($site_name)) {
            echo $site_name;
        } ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url(); ?>/manager"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Tribute</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-primary collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Perjanjian Penggunaan</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dd>
                    Dengan menggunakan ZYA CBT, maka anda setuju untuk :
                    <ol>
                        <li>Tidak mengubah Nama Aplikasi Ujian Online <b>ZYA CBT</b> menjadi nama aplikasi lain</li>
                        <li>Tidak mengubah footer yang menunjukkan alamat website Aplikasi Ujian Online ZYA CBT</li>
                        <li>Tidak menjual Aplikasi Ujian Online ZYA CBT. Tetapi anda diperbolehkan untuk mengambil keuntungan dari jasa proses instalasi, konsultasi dan lain sebagainya yang berkaitan dengan Aplikasi Ujian Online ZYA CBT</li>
                        <li>Tidak menhapus tribute dan Perjanjian Penggunaan</li>
                    </ol>
                    Semoga Aplikasi Ujian Online ZYA CBT dapat bermanfaat untuk kita semua.
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="callout callout-info">
        <h4>Informasi</h4>
        <p>Ini adalah area administratif ZYA CBT, yang memiliki platform dan bahasa user-friendly untuk membuat, mengelola dan melaksanakan ujian online.</p>
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt>Data Modul</dt>
                <dd>
                    Kelompok Data Modul digunakan untuk menambah modul, topik, dan soal. Serta digunakan untuk mengatur file dengan memanfaatkan File Manager.
                    <ol>
                        <li>Modul</li>
                        <li>Topik</li>
                        <li>Soal</li>
                        <li>Import Soal Word</li>
                        <li>Import Soal Spreadsheet</li>
                        <li>Daftar Soal</li>
                        <li>File Manager</li>
                    </ol>
                </dd>
                <dt>Data Peserta</dt>
                <dd>
                    Kelompok Data Peserta digunakan untuk mengatur Peserta, dan Group.
                    <ol>
                        <li>Daftar Group</li>
                        <li>Daftar Peserta</li>
                        <li>Import Data Peserta</li>
                        <li>Cetak Kartu</li>
                    </ol>
                <dt>Data Tes</dt>
                <dd>
                    Kelompok Data Tes digunakan untuk mengatur Tes, mengevaluasi jawaban essay, dan melihat Hasil tes.
                    <ol>
                        <li>Tambah Tes</li>
                        <li>Daftar Tes</li>
                        <li>Evaluasi Tes</li>
                        <li>Hasil tes</li>
                        <li>Token</li>
                    </ol>
                </dd>
                <dt>Laporan</dt>
                <dd>
                    Laporan digunakan untuk menampilkan analisis butir soal, dan rekap hasil tes.
                    <ol>
                        <li>Analisis Butir Soal</li>
                        <li>Rekap Hasil Tes</li>
                    </ol>
                </dd>
                <dt>Tool</dt>
                <dd>
                    Kelompok Tool digunakan untuk membackup database, file pedukung soal, dan Export Import Data Soal
                    <ol>
                        <li>Backup Data</li>
                        <li>Export Import Soal</li>
                    </ol>
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->