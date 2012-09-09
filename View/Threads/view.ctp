<section class="single clearfix">
	<header>
		<div class="grid_9">
			<h1><?php echo $thread['Thread']['name']; ?></h1>
			<h2>Accessory design object for 2012 site revision</h2>
		</div>
		<div class="grid_3">
			<?php echo $this->Html->image('icon-1-versions.png', array('alt' => 'Versions')); ?>
			<?php echo $this->Html->image('icon-2-comments.png', array('alt' => 'Comments')); ?>
			<?php echo $this->Html->image('icon-3-upload.png', array('alt' => 'Upload')); ?>
			<?php echo $this->Html->image('icon-4-download.png', array('alt' => 'Download')); ?>
		</div>
	</header>
	<aside>
		<div class="grid_3">
			<img src="" />
			<h3>Design Spec.pdf</h3>
			<p>12/12/2012 6:30pm<br />Rev 2</p>
		</div>
	</aside>
	<article>
		<div class="grid_7">
			<?php foreach ($thread['Comment'] as $comment): ?>
			<article>
				<img src="" />
				<h4>David Dawson</h4><span><?php echo $comment['created']; ?></span>
				<p><?php echo $comment['content']; ?></p>
			</article>
			<?php endforeach; ?>
			<article>
				<img src="" />
				<?php echo $this->Form->create('Comment');?>
					<fieldset>
					<?php echo $this->Form->hidden('thread_id') ?>
					<?php echo $this->Form->hidden('user_id') ?>
					<?php echo $this->Form->input('content'); ?>
					<input name="" type="checkbox" />Kendra Keyes
					<input name="" type="checkbox" />Danielle Dixon
					<input name="" type="checkbox" />David Dawson
					</fieldset>
				<?php echo $this->Form->end(__('Post'));?>
				<?php echo $this->Form->create('Comment');?>
				<?php echo $this->Form->end(__('Send SMS'));?>
			</article>
		</div>
	</article>
	<aside>
		<div class="grid_2">
		</div>
	</aside>
</section>
<?php debug($thread, true); ?>
