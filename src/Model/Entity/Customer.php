<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string $fosname
 * @property string|null $gender
 * @property \Cake\I18n\FrozenDate|null $dob
 * @property string $aadhar
 * @property string|null $mobileone
 * @property string $mobiletwo
 * @property string $doorno
 * @property string $street
 * @property string $city
 * @property string $pincode
 * @property string $landmark
 * @property string $introducer
 * @property string $intromobile
 * @property string $profile
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\CustomerDocument[] $customer_documents
 * @property \App\Model\Entity\Loan[] $loans
 */
class Customer extends Entity
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
        'name' => true,
        'fosname' => true,
        'gender' => true,
        'dob' => true,
        'aadhar' => true,
        'mobileone' => true,
        'mobiletwo' => true,
        'doorno' => true,
        'street' => true,
        'city' => true,
        'pincode' => true,
        'landmark' => true,
        'introducer' => true,
        'intromobile' => true,
        'profile' => true,
        'created' => true,
        'modified' => true,
        'customer_documents' => true,
        'loans' => true,
    ];
}
