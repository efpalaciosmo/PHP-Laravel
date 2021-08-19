<?php

class Coche
{
    protected $ruedas;
    private $color;
    private $motor;

    function __construct($ruedas, $color, $motor)
    {
        $this->ruedas = $ruedas;
        $this->color = $color;
        $this->motor = $motor;
    }

    function arrancar()
    {
        echo "Runing... ";
    }

    function girar()
    {
        echo "Turning... ";
    }

    function frenar()
    {
        echo "Breaking... ";
    }

    /**
     * @return mixed
     */
    public function getRuedas()
    {
        return $this->ruedas;
    }

    /**
     * @param mixed $ruedas
     */
    public function setRuedas($ruedas)
    {
        $this->ruedas = $ruedas;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        echo $this->color;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
}

class Moto extends Coche{

    private $model;

    function __construct($ruedas, $color, $motor, $model)
    {
        parent::__construct($ruedas, $color, $motor);
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

}

?>