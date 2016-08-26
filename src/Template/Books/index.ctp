
<div class="books index large-9 medium-8 columns content">
    <h3><?= __('Books') ?></h3>
	<div class="medium-3 right">
		<?= $this->Html->link("<i class=\"fa fa-plus\"></i>&nbsp;".__('New Book'), ['action' => 'add'],['escape' => false,'class' => 'button']) ?>
		
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('isbn') ?></th>
                <th><?= $this->Paginator->sort('location') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $this->Number->format($book->id) ?></td>
                <td><?= h($book->code) ?></td>
                <td><?= h($book->isbn) ?></td>
                <td><?= h($book->location) ?></td>
                <td><?= $this->Number->format($book->quantity) ?></td>
                <td><?= h($book->created) ?></td>
                <td><?= h($book->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link("<i class=\"fa fa-sticky-note\"></i>&nbsp;", ['action' => 'view', $book->id],['escape' => false]) ?>
                    <?= $this->Html->link("<i class=\"fa fa-pencil-square\"></i>&nbsp;", ['action' => 'edit', $book->id],['escape' => false]) ?>
                    <?= $this->Form->postLink("<i class=\"fa fa-trash\"></i>&nbsp;", ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id),'escape' => false]) ?>
					
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
