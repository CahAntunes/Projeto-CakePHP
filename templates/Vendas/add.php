<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 * @var \Cake\Collection\CollectionInterface|string[] $produtos
 * @var \Cake\Collection\CollectionInterface|string[] $clientes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas form content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
                <legend><?= __('Add Venda') ?></legend>
                <?php
                    echo $this->Form->control('produto_id', ['options' => $produtos]);
                    echo $this->Form->control('cliente_id', ['options' => $clientes]);
                    echo $this->Form->control('data');
                    echo $this->Form->control('hora');
                    echo $this->Form->control('responsavel_vend');
                    echo $this->Form->control('frete');
                    echo $this->Form->control('qtde_venda');
                    echo $this->Form->control('total_venda');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
