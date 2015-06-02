<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectTask Entity.
 */
class ProjectTask extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'project_id' => true,
        'title' => true,
        'body' => true,
        'user_id' => true,
        'deadline' => true,
        'done' => true,
        'project' => true,
        'user' => true,
    ];
}
