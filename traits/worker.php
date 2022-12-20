<?php

trait Worker
{
   public $shop;
   public $vendite;

   public function getShop()
   {
      return "this->shop - this->vendite";
   }
}
