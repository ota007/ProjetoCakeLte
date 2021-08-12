<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>

<?php
$this->assign('title', __('Telefone') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Telefones' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($telefone->id_telefone) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Operadora') ?></th>
            <td><?= $telefone->has('operadora') ? $this->Html->link($telefone->operadora->id_operadora, ['controller' => 'Operadoras', 'action' => 'view', $telefone->operadora->id_operadora]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $telefone->has('usuario') ? $this->Html->link($telefone->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $telefone->usuario->id_usuario]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id Telefone') ?></th>
            <td><?= $this->Number->format($telefone->id_telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Ddd') ?></th>
            <td><?= $this->Number->format($telefone->ddd) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= $this->Number->format($telefone->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($telefone->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($telefone->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $telefone->id_telefone],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $telefone->id_telefone), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $telefone->id_telefone], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


