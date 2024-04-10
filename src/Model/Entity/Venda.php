<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $cliente_id
 * @property \Cake\I18n\FrozenDate $data
 * @property \Cake\I18n\Time $hora
 * @property string $responsavel_vend
 * @property float $frete
 * @property int $qtde_venda
 * @property float $total_venda
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Cliente $cliente
 */
class Venda extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'produto_id' => true,
        'cliente_id' => true,
        'data' => true,
        'hora' => true,
        'responsavel_vend' => true,
        'frete' => true,
        'qtde_venda' => true,
        'total_venda' => true,
        'produto' => true,
        'cliente' => true,
    ];
}
