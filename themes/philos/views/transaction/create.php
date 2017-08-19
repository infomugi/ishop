<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Add',
	);

$this->pageTitle='Checkout';
?>

<!-- Main Container -->
<section class="main-container col1-layout">
	<div class="main container">
		<div class="col-main">
			<div class="cart">

				<div class="page-content page-order"><div class="page-title">
					<h2><?PHP echo $this->pageTitle; ?></h2>
				</div>


				<div class="order-detail-content">

					<HR>

						<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>

				