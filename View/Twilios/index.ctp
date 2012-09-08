<section class="single clearfix">
	<h2><?php __('Twilios'); ?></h2>
	<table class="container_12">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Created'); ?></th>
		</tr>
		<?php foreach ($twilios as $twilio): ?>
		<tr>
			<td><?php echo $twilio['Twilio']['id']; ?></td>
			<td><?php echo $this->Html->link($twilio['Twilio']['name'], array('controller' => 'twilios', 'action' => 'view', $twilio['Twilio']['id'])); ?></td>
			<td><?php echo $twilio['Twilio']['created']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<nav class="grid_8">
		<ul>
			<li><?php echo $this->Html->link(__('Add Twilio'), array('controller' => 'twilios', 'action' => 'add')); ?></li>
		</ul>
	</nav>

</section>