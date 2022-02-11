<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loan Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $application_no
 * @property \Cake\I18n\FrozenDate $processed_date
 * @property int $scheme_id
 * @property int $Amount
 * @property int|null $status
 * @property string $interest
 * @property float $tobepaid
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Scheme $scheme
 * @property \App\Model\Entity\LoanItem[] $loan_items
 */
class Loan extends Entity
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
        'customer_id' => true,
        'application_no' => true,
        'processed_date' => true,
        'scheme_id' => true,
        'Amount' => true,
        'status' => true,
        'interest' => true,
        'tobepaid' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'scheme' => true,
        'loan_items' => true,
    ];
}
