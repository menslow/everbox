<section class="single clearfix">
	<article>
	<h1><?php echo __('Edit Comment'); ?></h1>
	<?php echo $this->Form->create('Comment', array('action' => 'edit'));
	echo $this->Form->input('thread_id');
	echo $this->Form->input('user_id');
	echo $this->Form->input('content');
	echo $this->Form->end(__('Save Comment'));
	?>
	</article>
</section>
