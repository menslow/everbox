<section class="single clearfix">
	<h2><?php __('Comments'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Thread ID'); ?></th>
			<th><?php echo __('User ID'); ?></th>
			<th><?php echo __('Content'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
		</tr>
		<?php foreach ($comments as $comment): ?>
		<tr>
			<td><?php echo $comment['Comment']['id']; ?></td>
			<td><?php echo $comment['Comment']['thread_id']; ?></td>
			<td><?php echo $comment['Comment']['user_id']; ?></td>
			<td><?php echo $comment['Comment']['content']; ?></td>
			<td><?php echo $comment['Comment']['created']; ?></td>
			<td><?php echo $comment['Comment']['modified']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Comment'), array('controller' => 'Comments', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>