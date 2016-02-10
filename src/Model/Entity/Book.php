<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity.
 *
 * @property int $id
 * @property string $code
 * @property string $isbn
 * @property string $location
 * @property string $title
 * @property int $quantity
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $created_by
 * @property int $modified_by
 * @property \App\Model\Entity\Author[] $authors
 * @property \App\Model\Entity\Category[] $categories
 * @property \App\Model\Entity\Publisher[] $publishers
 */
class Book extends Entity
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
        'id' => false,
    ];
}
