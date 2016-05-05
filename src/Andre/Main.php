<?php
namespace Andre;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\utils\TextFormat as color;

   class Main extends PluginBase implements Listener{
   public function onEnable(){
$this->getServer()->getLogger()->info("Position has been loaded");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
}
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch ($command){
            case 'xyz':
			$x = $sender->getX();
			$y = $sender->gety();
                        $z = $sender->getZ();
				$sender->sendMessage("You are standing at: $x , $y , $z");
		}
}
public function Disable(){
$this->getServer()->getLogger()->info("Position unloaded");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
}
}
