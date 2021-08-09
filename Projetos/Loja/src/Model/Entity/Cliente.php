<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $produto_id
 * @property int $categoria_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate|null $modified
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Categoria $categoria
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
        'nome' => true,
        'produto_id' => true,
        'categoria_id' => true,
        'created' => true,
        'modified' => true,
        'produto' => true,
        'categoria' => true,
    ];
}
