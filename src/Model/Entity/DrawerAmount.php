<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DrawerAmount Entity
 *
 * @property int $id
 * @property int $drawer_id
 * @property int|null $one
 * @property int|null $two
 * @property int|null $five
 * @property int|null $ten
 * @property int|null $twenty
 * @property int|null $fifty
 * @property int|null $hundred
 * @property int|null $twohundred
 * @property int|null $fivehundred
 * @property int|null $twothousand
 * @property int $total_amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Drawer $drawer
 */
class DrawerAmount extends Entity
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
        'drawer_id' => true,
        'one' => true,
        'two' => true,
        'five' => true,
        'ten' => true,
        'twenty' => true,
        'fifty' => true,
        'hundred' => true,
        'twohundred' => true,
        'fivehundred' => true,
        'twothousand' => true,
        'total_amount' => true,
        'created' => true,
        'modified' => true,
        'drawer' => true,
    ];
}
