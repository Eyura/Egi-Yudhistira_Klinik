<?php
$this->breadcrumbs = array(
    'Wilayah',
);
?>

<h1>Daftar Wilayah</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'table table-striped table-bordered', // Kelas Bootstrap untuk tabel
    'columns' => array(
        array(
            'name' => 'id',
            'header' => 'ID',
        ),
        array(
            'name' => 'nama_wilayah',
            'header' => 'Nama Wilayah',
        ),
        array(
            'class' => 'CButtonColumn', // Kolom aksi (view, update, delete)
            'template' => '{view} {update} {delete}',
        ),
    ),
));
?>
