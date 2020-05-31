<?php
require_once "Control.php";
class RemoteControl implements Control
{
    private $vol;
    private $on;
    private $playing;

    public function __construct()
    {
        $this->vol = 50;
        $this->on = false;
        $this->playing = false;
    }
    public function getVol()
    {
        return $this->vol;
    }
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    public function getOn()
    {
        return $this->on;
    }
    public function setOn($on)
    {
        $this->on = $on;

        return $this;
    }

    public function getPlaying()
    {
        return $this->playing;
    }
    public function setPlaying($playing)
    {
        $this->playing = $playing;

        return $this;
    }

    public function powerOn()
    {
        $this->setOn(true);
    }
    public function poweOff()
    {
        $this->setOn(false);
    }
    public function openMenu()
    {
        echo "<br/> Is on? " . ($this->getOn() ? "Yes" : "No");
        echo "<br/> Is playing? " . ($this->getPlaying() ? "Yes" : "No");
        for ($i = 0; $i <= $this->getVol(); $i += 10) {
            echo "|";
        }
    }
    public function closeMenu()
    {
        echo "Closing menu...";
    }
    public function plusVol()
    {
        if ($this->getOn()) {
            $this->setVol($this->getVol() + 5);
        }
    }
    public function lessVol()
    {
        if ($this->getOn()) {
            $this->setVol($this->getVol() - 5);
        }
    }
    public function mute()
    {
        if ($this->getOn() && $this->getVol > 0) {
            $this->setVol(0);
        }
    }
    public function unmute()
    {
        if ($this->getOn() and $this->getVol == 0) {
            $this->setVol(50);
        }
    }
    public function play()
    {
    }
    public function pause()
    {
    }
}
