<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container">
	<div class="text-center mt-5 pt-5">
		<h1>Selamat Datang di Website Sistem Informasi Klinik</h1>
	</div>
	<p class="text-center my-3">Sistem Informasi Klinik Egi Yudhistira</p>
	<div class="text-center px-3">
		<a class="mx-3 btn btn-lg btn-primary" href="<?php echo Yii::app()->createUrl('site/login'); ?>">Masuk</a>
		<a class="mx-3 btn btn-lg btn-success" href="<?php echo Yii::app()->createUrl('site/register'); ?>">Daftar</a>
	</div>
</div>