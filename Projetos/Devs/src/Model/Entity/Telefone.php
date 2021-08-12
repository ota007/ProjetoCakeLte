<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefone Entity
 *
 * @property int $id_telefone
 * @property int|null $ddd
 * @property int|null $numero
 * @property int|null $operadora_id
 * @property int|null $usuario_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Operadora $operadora
 * @property \App\Model\Entity\Usuario $usuario
 */
class Telefone extends Entity
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
        'ddd' => true,
        'numero' => true,
        'operadora_id' => true,
        'usuario_id' => true,
        'created' => true,
        'modified' => true,
        'operadora' => true,
        'usuario' => true,
    ];
}
