<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QualityAmount Entity
 *
 * @property int $id
 * @property int $quality_id
 * @property \Cake\I18n\FrozenDate $date
 * @property int $todvalue
 * @property int $percentage
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Quality $quality
 */
class QualityAmount extends Entity
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
        'quality_id' => true,
        'date' => true,
        'todvalue' => true,
        'percentage' => true,
        'created' => true,
        'modified' => true,
        'quality' => true,
    ];
}
