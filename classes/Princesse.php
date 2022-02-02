<?php


class Princesse extends Personnage {
    private $saved;

    public function __construct() {
        parent::__construct();
        $this->x = 450;
        $this->y = 450;
        $this->saved = 0;
    }

    /**
     * @return int
     */
    public function getSaved(): int
    {
        return $this->saved;
    }

    /**
     * @param int $saved
     */
    public function setSaved(int $saved): void
    {
        $this->saved = $saved;
    }

}