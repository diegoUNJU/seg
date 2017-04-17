<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Immovable Entity
 *
 * @property int $id
 * @property string $type
 * @property string $description
 * @property int $policy_id
 * @property int $client_id
 *
 * @property \App\Model\Entity\Client[] $clients
 */
class Immovable extends Entity
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
        'Client',
    );
}
