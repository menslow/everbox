<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Twilio'); ?></h1>
	<?php echo $this->Form->create('Twilio', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->end(__('Save Twilio'));
	?>
	</article>
</section>
