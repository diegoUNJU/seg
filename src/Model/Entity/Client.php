<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property int $bar_code
 * @property int $number_client
 * @property string $first_name
 * @property string $last_name
 * @property int $dni
 * @property string $adress
 * @property string $mobil
 * @property string $email
 * @property int $immovable_id
 * @property int $payment_id
 *
 * @property \App\Model\Entity\Immovable[] $immovables
 * @property \App\Model\Entity\Payment[] $payments
 */
class Client extends Entity
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
        'Payment', 'Immovable'
    );
}
