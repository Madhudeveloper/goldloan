<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Scheme Entity
 *
 * @property int $id
 * @property string $scheme_name
 * @property int $ratepergram
 * @property int $thirty
 * @property int $sixty
 * @property int $ninety
 * @property int $onetwenty
 * @property int $onefifty
 * @property int $oneeighty
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Loan[] $loans
 */
class Scheme extends Entity
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
        'scheme_name' => true,
        'ratepergram' => true,
        'thirty' => true,
        'sixty' => true,
        'ninety' => true,
        'onetwenty' => true,
        'onefifty' => true,
        'oneeighty' => true,
        'created' => true,
        'modified' => true,
        'loans' => true,
    ];
}
