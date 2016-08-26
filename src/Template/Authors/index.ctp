
<div class="authors index large-9 medium-8 columns content">
    <h3><?= __('Authors') ?></h3>
	<div class="medium-3 right">
		<?= $this->Html->link("<i class=\"fa fa-plus\"></i>&nbsp;".__('New Authors'), ['action' => 'add'],['escape' => false,'class' => 'button']) ?>
		
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <!--
				<th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created_by') ?></th>
                <th><?= $this->Paginator->sort('modified_by') ?></th>
                -->
				<th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author): ?>
            <tr>
                <td><?= $this->Number->format($author->id) ?></td>
                <td><?= $author->name ?></td>
                <!--
				<td><?= h($author->created) ?></td>
                <td><?= h($author->modified) ?></td>
                <td><?= $this->Number->format($author->created_by) ?></td>
                <td><?= $this->Number->format($author->modified_by) ?></td>
                -->
				<td class="actions">
                    <?= $this->Html->link("<i class=\"fa fa-sticky-note\"></i>&nbsp;", ['action' => 'view', $author->id],['escape' => false]) ?>
                    <?= $this->Html->link("<i class=\"fa fa-pencil-square\"></i>&nbsp;", ['action' => 'edit', $author->id],['escape' => false]) ?>
                    <?= $this->Form->postLink("<i class=\"fa fa-trash\"></i>&nbsp;", ['action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id),'escape' => false]) ?>
					
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
