<?php
interface Control{
    public function powerOn();
    public function poweOff();
    public function openMenu();
    public function closeMenu();
    public function plusVol();
    public function lessVol();
    public function mute();
    public function unmute();
    public function play();
    public function pause();
}