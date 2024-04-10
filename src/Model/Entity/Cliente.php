<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $cpf_cnpj
 * @property string $nome
 * @property string $endereco
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $telefone
 * @property string $email
 * @property string|null $contato
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Cliente extends Entity
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
        'cpf_cnpj' => true,
        'nome' => true,
        'endereco' => true,
        'numero' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'cep' => true,
        'telefone' => true,
        'email' => true,
        'contato' => true,
        'vendas' => true,
    ];
}
