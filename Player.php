<?php

namespace BloodBowl\Service;

use \BloodBowl\Service\ServiceAbstract;

class Player extends ServiceAbstract
{
    protected $entitiyRepository;

    public function __construct($entitiyRepository)
    {
        $this->entitiyRepository = $entitiyRepository;
    }

    /**
     * Get the entity repository.
     */
    protected function getEntityRepository()
    {
        return $this->entitiyRepository;
    }

    public function getPlayerById($id)
    {
        $repo = $this->getEntityRepository();

        if (!$model = $repo->findOneBy(array('id' => $id))) {
            return false;
        }

        $player = new \stdClass;

        $player->number = $player->getNumber();
    }
}
