<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operadora $operadora
 */
?>

<?php $this->assign('title', __('Edit Operadora') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Operadoras' => ['action'=>'index'],
      'View' => ['action'=>'view', $operadora->id_operadora],
      'Edit',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($operadora) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('nome');
      echo $this->Form->control('descricao');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $operadora->id_operadora],
          ['confirm' => __('Are you sure you want to delete # {0}?', $operadora->id_operadora), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>
