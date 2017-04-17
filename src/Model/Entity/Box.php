<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Box Entity
 *
 * @property int $id
 * @property int $user_id
 * @property float $total
 * @property \Cake\I18n\Time $date
 * @property int $payment_id
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Payment $payment
 */
class Box extends Entity
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
        '*' => true,
        'id' => false
    ];
        public $hasMany = array(
        'Payment',
    );
        public $hasOne = array(
        'User',
    );
}
