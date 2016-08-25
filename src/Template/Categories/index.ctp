<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Categories') ?></h3>
    <div class="medium-3 right">
		<?= $this->Html->link("<i class=\"fa fa-plus\"></i>&nbsp;".__('New Category'), ['action' => 'add'],['escape' => false,'class' => 'button']) ?>
		
	</div>
	<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->code, ['controller' => 'Categories', $category->parent_category->parent_id]) : '' ?></td>
                <td><?= $this->Html->link($category->code, ['controller' => 'Categories', $category->id]) ?></td>
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link("<i class=\"fa fa-sticky-note\"></i>&nbsp;", ['action' => 'view', $category->id],['escape' => false]) ?>
                    <?= $this->Html->link("<i class=\"fa fa-pencil-square\"></i>&nbsp;", ['action' => 'edit', $category->id],['escape' => false]) ?>
                    <?= $this->Form->postLink("<i class=\"fa fa-trash\"></i>&nbsp;", ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id),'escape' => false]) ?>
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