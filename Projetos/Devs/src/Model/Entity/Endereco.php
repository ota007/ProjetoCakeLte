<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id_endereco
 * @property string|null $logradouro
 * @property int|null $cep
 * @property string|null $bairro
 * @property int|null $numero
 * @property string|null $complemento
 * @property int|null $usuario_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Endereco extends Entity
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
        'logradouro' => true,
        'cep' => true,
        'bairro' => true,
        'numero' => true,
        'complemento' => true,
        'usuario_id' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
    ];
}
