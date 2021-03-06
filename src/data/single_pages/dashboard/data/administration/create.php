<?php defined('C5_EXECUTE') or die('Access Denied.') ?>
<?= $dashboard->getDashboardPaneHeaderWrapper(t('Create Data Type'), false, false, false) ?>
<form method="post" action="<?= $this->action('create') ?>">
	<div class="ccm-pane-body">
		<?= $form->label('dtName', t('Name')) ?>
		<?= $form->text('dtName') ?>
		<?= $form->label('dtHandle', t('Handle')) ?>
		<?= $form->text('dtHandle') ?>
	</div>
	<div class="ccm-pane-footer">
		<div class="ccm-buttons">
			<?= $interface->submit(t('Create')) ?>
		</div>
	</div>
</form>
<?= $dashboard->getDashboardPaneFooterWrapper(false) ?>
