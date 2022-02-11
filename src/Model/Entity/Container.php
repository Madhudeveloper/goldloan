<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Container Entity
 *
 * @property int $id
 * @property string $container
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\LoanItem[] $loan_items
 */
class Container extends Entity
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
        'container' => true,
        'created' => true,
        'modified' => true,
        'loan_items' => true,
    ];
}
