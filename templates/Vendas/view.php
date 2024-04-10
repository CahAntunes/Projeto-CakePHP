<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas view content">
            <h3><?= h($venda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $venda->has('produto') ? $this->Html->link($venda->produto->id, ['controller' => 'Produtos', 'action' => 'view', $venda->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsavel Vend') ?></th>
                    <td><?= h($venda->responsavel_vend) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frete') ?></th>
                    <td><?= $this->Number->format($venda->frete) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtde Venda') ?></th>
                    <td><?= $this->Number->format($venda->qtde_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Venda') ?></th>
                    <td><?= $this->Number->format($venda->total_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($venda->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($venda->hora) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
