<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>

<?php
$this->assign('title', __('Endereco') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Enderecos' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($endereco->id_endereco) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Logradouro') ?></th>
            <td><?= h($endereco->logradouro) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $endereco->has('usuario') ? $this->Html->link($endereco->usuario->id_usuario, ['controller' => 'Usuarios', 'action' => 'view', $endereco->usuario->id_usuario]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id Endereco') ?></th>
            <td><?= $this->Number->format($endereco->id_endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= $this->Number->format($endereco->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= $this->Number->format($endereco->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($endereco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($endereco->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $endereco->id_endereco],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $endereco->id_endereco), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $endereco->id_endereco], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


