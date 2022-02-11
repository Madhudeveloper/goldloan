<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Drawer Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\DrawerAmount[] $drawer_amounts
 */
class Drawer extends Entity
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
        'date' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'drawer_amounts' => true,
    ];
}
