<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>

<?php
$this->assign('title', __('Usuario') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Usuarios' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($usuario->id_usuario) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($usuario->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($usuario->id_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($usuario->data_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $usuario->id_usuario],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $usuario->id_usuario), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $usuario->id_usuario], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-enderecos view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Enderecos') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Enderecos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Enderecos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id Endereco') ?></th>
          <th><?= __('Logradouro') ?></th>
          <th><?= __('Cep') ?></th>
          <th><?= __('Bairro') ?></th>
          <th><?= __('Numero') ?></th>
          <th><?= __('Complemento') ?></th>
          <th><?= __('Usuario Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($usuario->enderecos)) { ?>
        <tr>
            <td colspan="10" class="text-muted">
              Enderecos record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($usuario->enderecos as $enderecos) : ?>
        <tr>
            <td><?= h($enderecos->id_endereco) ?></td>
            <td><?= h($enderecos->logradouro) ?></td>
            <td><?= h($enderecos->cep) ?></td>
            <td><?= h($enderecos->bairro) ?></td>
            <td><?= h($enderecos->numero) ?></td>
            <td><?= h($enderecos->complemento) ?></td>
            <td><?= h($enderecos->usuario_id) ?></td>
            <td><?= h($enderecos->created) ?></td>
            <td><?= h($enderecos->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id_endereco], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id_endereco], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id_endereco], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id_endereco)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
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
      <?php if (empty($usuario->telefones)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Telefones record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($usuario->telefones as $telefones) : ?>
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

