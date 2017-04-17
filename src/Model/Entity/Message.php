<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $numer_client
 * @property string $message
 * @property \Cake\I18n\Time $date
 * @property bool $status
 * @property int $mailbox_send_id
 *
 * @property \App\Model\Entity\MailboxSend[] $mailbox_sends
 */
class Message extends Entity
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
        'MailboxSend',
    );
}
