<?php defined('C5_EXECUTE') or die('Access Denied.') ?>
<?= $dashboard->getDashboardPaneHeaderWrapper(t('%s Attributes', $dataType->dtName), false, false) ?>
<div class="clearfix"></div>
<div class="ccm-attribute-list-wrapper">
<?php foreach ($attributes as $ak) { ?>
	<div class="ccm-attribute"><img src="<?= $ak->getAttributeKeyIconSRC() ?>" width="16" height="16" /><a href="<?= $this->url('/dashboard/data/administration/attributes/edit', $dataType->dtID, $ak->getAttributeKeyID()) ?>"><?= $ak->getAttributeKeyName() ?></a></div>
<?php } ?>
</div>
<form method="post" action="<?= $this->url('/dashboard/data/administration/attributes', $dataType->dtID) ?>" class="form-stacked inline-form-fix">
	<div class="clearfix">
		<?= $form->label('atID', t('Add Attribute')) ?>
		<div class="input">
			<?= $form->select('atID', $types) ?>
			<?= $form->submit('submit', t('Add')) ?>
		</div>
	</div>
</form>
<?= $dashboard->getDashboardPaneFooterWrapper() ?>
