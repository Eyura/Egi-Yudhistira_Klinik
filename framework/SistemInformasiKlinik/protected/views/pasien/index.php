<?php
$this->breadcrumbs = array(
    'Pasien',
);
?>

<h1>Daftar Pasien</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'table table-striped table-bordered', // Menambahkan kelas Bootstrap untuk tabel
    'columns' => array(
        array(
            'name' => 'id',
            'header' => 'ID',
        ),
        array(
            'name' => 'nama',
            'header' => 'Nama Pasien',
        ),
        array(
            'name' => 'alamat',
            'header' => 'Alamat',
        ),
        array(
            'name' => 'tanggal_lahir',
            'header' => 'Tanggal Lahir',
        ),
        array(
            'name' => 'nomor_telepon',
            'header' => 'Nomor Telepon',
        ),
        array(
            'class' => 'CButtonColumn', // Menambahkan kolom aksi (view, update, delete)
            'template' => '{view} {update} {delete}',
        ),
    ),
));
?>

