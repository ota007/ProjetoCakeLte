<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>

<?php $this->assign('title', __('Add Endereco') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Enderecos' => ['action'=>'index'],
      'Add',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($endereco) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('logradouro');
      echo $this->Form->control('cep');
      echo $this->Form->control('bairro');
      echo $this->Form->control('numero');
      echo $this->Form->control('complemento');
      echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>
