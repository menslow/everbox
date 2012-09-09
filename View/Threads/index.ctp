<section class="single clearfix">
	<h2><?php __('Threads'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('File ID'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
		</tr>
		<?php foreach ($threads as $thread): ?>
		<tr>
			<td><?php echo $thread['Thread']['id']; ?></td>
			<td><?php echo $thread['Thread']['file_id']; ?></td>
			<td><?php echo $this->Html->link($thread['Thread']['name'], array('controller' => 'threads', 'action' => 'view', $thread['Thread']['id'])); ?></td>
			<td><?php echo $thread['Thread']['created']; ?></td>
			<td><?php echo $thread['Thread']['modified']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Thread'), array('controller' => 'threads', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>