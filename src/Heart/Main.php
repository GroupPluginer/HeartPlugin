<?php

namespace Heart;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\level\particle\HeartParticle;
use pocketmine\event\Listener;
use pocketmine\permission\Permission;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onMove(PlayerMoveEvent $event){
    if($player->hasPermission("Heart.permission")){
      $player->getLevel()->addParticle(new HeartParticle($player));
    }
  }
}
