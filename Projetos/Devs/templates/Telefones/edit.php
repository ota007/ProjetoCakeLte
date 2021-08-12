<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>

<?php $this->assign('title', __('Edit Telefone') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Telefones' => ['action'=>'index'],
      'View' => ['action'=>'view', $telefone->id_telefone],
      'Edit',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($telefone) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('ddd');
      echo $this->Form->control('numero');
      echo $this->Form->control('operadora_id', ['options' => $operadoras, 'empty' => true]);
      echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $telefone->id_telefone],
          ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id_telefone), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>
