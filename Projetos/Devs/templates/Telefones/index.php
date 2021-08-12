<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone[]|\Cake\Collection\CollectionInterface $telefones
 */
?>

<?php $this->assign('title', __('Telefones') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Telefones',
    ]
  ])
);
?>

<div class="card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><!-- --></h2>
    <div class="card-toolbox">
      <?= $this->Paginator->limitControl([], null, [
            'label'=>false,
            'class' => 'form-control-sm',
          ]); ?>
      <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('id_telefone') ?></th>
              <th><?= $this->Paginator->sort('ddd') ?></th>
              <th><?= $this->Paginator->sort('numero') ?></th>
              <th><?= $this->Paginator->sort('operadora_id') ?></th>
              <th><?= $this->Paginator->sort('usuario_id') ?></th>
              <th><?= $this->Paginator->sort('created') ?></th>
              <th><?= $this->Paginator->sort('modified') ?></th>
              <th class="actions"><?= __('Actions') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($telefones as $telefone): ?>
          <tr>
            <td><?= $this->Number->format($telefone->id_telefone) ?></td>
            <td><?= $this->Number->format($telefone->ddd) ?></td>
            <td><?= $this->Number->format($telefone->numero) ?></td>
            <td><?= $telefone->has('operadora') ? $this->Html->link($telefone->operadora->id_operadora, ['controller' => 'Operadoras', 'action' => 'view', $telefone->operadora->id_operadora]) : '' ?></td>
            <td><?= $telefone->has('usuario') ? $this->Html->link($telefone->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $telefone->usuario->id_usuario]) : '' ?></td>
            <td><?= h($telefone->created) ?></td>
            <td><?= h($telefone->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['action' => 'view', $telefone->id_telefone], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefone->id_telefone], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefone->id_telefone], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone)]) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->

  <div class="card-footer d-md-flex paginator">
    <div class="mr-auto" style="font-size:.8rem">
      <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
    </div>

    <ul class="pagination pagination-sm">
      <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape'=>false]) ?>
    </ul>

  </div>
  <!-- /.card-footer -->
</div>
