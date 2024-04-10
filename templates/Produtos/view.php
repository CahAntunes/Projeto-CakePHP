<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */

$this->Html->css(['produtos'], ['block' => 'css']);

?>
<div class="row visao">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($produto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtd') ?></th>
                    <td><?= $this->Number->format($produto->qtd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($produto->valor) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vendas') ?></h4>
                <?php if (!empty($produto->vendas)) : ?>
                <div class="table-responsive a">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Hora') ?></th>
                            <th><?= __('Responsavel Vend') ?></th>
                            <th><?= __('Frete') ?></th>
                            <th><?= __('Qtde Venda') ?></th>
                            <th><?= __('Total Venda') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->vendas as $vendas) : ?>
                        <tr>
                            <td><?= h($vendas->id) ?></td>
                            <td><?= h($vendas->produto_id) ?></td>
                            <td><?= h($vendas->cliente_id) ?></td>
                            <td><?= h($vendas->data) ?></td>
                            <td><?= h($vendas->hora) ?></td>
                            <td><?= h($vendas->responsavel_vend) ?></td>
                            <td><?= h($vendas->frete) ?></td>
                            <td><?= h($vendas->qtde_venda) ?></td>
                            <td><?= h($vendas->total_venda) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
