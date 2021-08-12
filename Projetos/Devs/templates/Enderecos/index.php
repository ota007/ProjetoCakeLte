<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $enderecos
 */
?>

<?php $this->assign('title', __('Enderecos') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Enderecos',
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
      <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('id_endereco') ?></th>
              <th><?= $this->Paginator->sort('logradouro') ?></th>
              <th><?= $this->Paginator->sort('cep') ?></th>
              <th><?= $this->Paginator->sort('bairro') ?></th>
              <th><?= $this->Paginator->sort('numero') ?></th>
              <th><?= $this->Paginator->sort('complemento') ?></th>
              <th><?= $this->Paginator->sort('usuario_id') ?></th>
              <th><?= $this->Paginator->sort('created') ?></th>
              <th><?= $this->Paginator->sort('modified') ?></th>
              <th class="actions"><?= __('Actions') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($enderecos as $endereco): ?>
          <tr>
            <td><?= $this->Number->format($endereco->id_endereco) ?></td>
            <td><?= h($endereco->logradouro) ?></td>
            <td><?= $this->Number->format($endereco->cep) ?></td>
            <td><?= h($endereco->bairro) ?></td>
            <td><?= $this->Number->format($endereco->numero) ?></td>
            <td><?= h($endereco->complemento) ?></td>
            <td><?= $endereco->has('usuario') ? $this->Html->link($endereco->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $endereco->usuario->id_usuario]) : '' ?></td>
            <td><?= h($endereco->created) ?></td>
            <td><?= h($endereco->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->id_endereco], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->id_endereco], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->id_endereco], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_endereco)]) ?>
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
