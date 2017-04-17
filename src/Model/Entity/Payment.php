<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property float $import
 * @property float $total
 * @property \Cake\I18n\Time $date_pay
 * @property int $client_id
 * @property int $box_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Box[] $boxes
 */
class Payment extends Entity
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
        public $hasOne = array(
        'Box', 'Client'
    );
}
