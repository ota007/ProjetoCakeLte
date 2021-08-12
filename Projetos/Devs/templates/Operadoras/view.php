<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operadora $operadora
 */
?>

<?php
$this->assign('title', __('Operadora') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Operadoras' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($operadora->id_operadora) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($operadora->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($operadora->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Operadora') ?></th>
            <td><?= $this->Number->format($operadora->id_operadora) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($operadora->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($operadora->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $operadora->id_operadora],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $operadora->id_operadora), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $operadora->id_operadora], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-telefones view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Telefones') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Telefones' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Telefones' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id Telefone') ?></th>
          <th><?= __('Ddd') ?></th>
          <th><?= __('Numero') ?></th>
          <th><?= __('Operadora Id') ?></th>
          <th><?= __('Usuario Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($operadora->telefones)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Telefones record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($operadora->telefones as $telefones) : ?>
        <tr>
            <td><?= h($telefones->id_telefone) ?></td>
            <td><?= h($telefones->ddd) ?></td>
            <td><?= h($telefones->numero) ?></td>
            <td><?= h($telefones->operadora_id) ?></td>
            <td><?= h($telefones->usuario_id) ?></td>
            <td><?= h($telefones->created) ?></td>
            <td><?= h($telefones->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id_telefone], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id_telefone], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id_telefone], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $telefones->id_telefone)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

