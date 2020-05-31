<?php
class Conta
{
    public $accNumber;
    protected $type;
    private $owner;
    private $sale;
    private $status;

    public function __construct()
    {
        $this->status = false;
        $this->sale = 0;
    }

    public function getAccNumber()
    {
        return $this->accNumber;
    }
    public function setAccNumber($accNumber)
    {
        $this->accNumber = $accNumber;
    }

    public function getTypeAcc()
    {
        return $this->type;
    }
    public function setTypeAcc($type)
    {
        $this->type = $type;
    }

    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function getSale()
    {
        return $this->sale;
    }
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function openAcc($type)
    {
        $this->setTypeAcc($type);
        if ($this->getTypeAcc() == "cp") {
            $this->sale = 150.00;
        } else if ($this->getTypeAcc() == "cc") {
            $this->sale = 50.00;
        }
        $this->setStatus(true);
    }

    public function closeAcc()
    {
        if ($this->getSale() == 0) {
            $this->setStatus(false);
        } else {
            echo "Your sale is $", $this->getSale(), ", because that we can't end your acc";
        }
    }

    public function deposit($money)
    {
        if ($this->getStatus()) {
            $this->setSale($this->getSale() + $money);
        } else {
            echo "Your account is disable";
        }
    }

    public function withdrawMoney($quantity)
    {
        if ($this->getStatus) {
            if ($this->getSale() < $quantity) {
                echo "You don't have sale to withdraw";
            } else {
                $this->setSale($this->getSale() - $quantity);
            }
        } else {
            echo "Acc isn't active";
        }
    }

    public function payment()
    {
        if ($this->getTypeAcc() == "cc") {
            $this->setSale($this->getSale() - 12);
        } else if ($this->getTypeAcc() == "cp") {
            $this->setSale($this->getSale() - 20);
        }
    }
}
