<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Thread'); ?></h1>
	<?php echo $this->Form->create('Thread', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->end(__('Save Thread'));
	?>
	</article>
</section>
