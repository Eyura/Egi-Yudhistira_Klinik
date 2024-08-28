<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/styles.css'); ?>
</head>

<body>

<div class="container-fluid px-0" id="page">
	<nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
        <a class="navbar-brand text-white mx-3" href="#">Sistem Informasi Klinik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/contact'); ?>">Contact</a>
                </li>
                <?php if (Yii::app()->user->isGuest): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/login'); ?>">Login</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/register'); ?>">Register</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

	<?php echo $content; ?>

	<div class="clear"></div>
<!-- 
	<div class="container fixed-bottom bg-white">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<p class="col-md-4 mb-0 text-muted">© 2024 Egi</p>

			<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
			<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
			</a>

			<ul class="nav col-md-4 justify-content-end">
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
			</ul>
		</footer>
	</div> -->

</div><!-- page -->

</body>
</html>
