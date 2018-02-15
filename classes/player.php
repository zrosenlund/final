<?php

class Player
{
    private $_name;
    private $_level;

    /**
     * Player constructor.
     * @param $_name
     * @param $_level
     */
    public function __construct($_name, $_level)
    {
        $this->_name = $_name;
        $this->_level = $_level;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->_level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->_level = $level;
    }


}