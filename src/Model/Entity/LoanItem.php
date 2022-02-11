<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LoanItem Entity
 *
 * @property int $id
 * @property int $loan_id
 * @property int $type_id
 * @property float $Gross
 * @property float $Net
 * @property int $quality_id
 * @property int $container_id
 * @property string $image
 * @property string $location
 * @property float $value
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Loan $loan
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Quality $quality
 * @property \App\Model\Entity\Container $container
 */
class LoanItem extends Entity
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
        'loan_id' => true,
        'type_id' => true,
        'Gross' => true,
        'Net' => true,
        'quality_id' => true,
        'container_id' => true,
        'image' => true,
        'location' => true,
        'value' => true,
        'created' => true,
        'modified' => true,
        'loan' => true,
        'type' => true,
        'quality' => true,
        'container' => true,
    ];
}
