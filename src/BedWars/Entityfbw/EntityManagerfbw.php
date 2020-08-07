<?php
declare(strict_types=1);

namespace BedWars\Entityfbw;
use BedWars\{Entityfbw\typesfbw\HumanEntityfbw, Entityfbw\typesfbw\TopsEntityfbw,
Entityfbw\typesfbw\TopsEntityfbwkill};
use pocketmine\{Server, Player, utils\TextFormat, level\Level, entity\Skin, entity\Entity, math\Vector3};

class EntityManagerfbw {
	
	public function seGamebw(Player $player) {
		$nbt = Entity::createBaseNBT(new Vector3((float)$player->getX(), (float)$player->getY(), (float)$player->getZ()));
		$nbt->setTag(clone $player->namedtag->getCompoundTag('Skin'));
		$human = new HumanEntityfbw($player->getLevel(), $nbt);
		$human->setNameTag('');
		$human->setNameTagVisible(true);
		$human->setNameTagAlwaysVisible(true);
		$human->yaw = $player->getYaw();
		$human->pitch = $player->getPitch();
		$human->spawnToAll();
	}
	
	public function setTopsbw(Player $player) {
		$nbt = Entity::createBaseNBT(new Vector3((float)$player->getX(), (float)$player->getY(), (float)$player->getZ()));
		$nbt->setTag($player->namedtag->getTag('Skin'));
		$human = new TopsEntityfbw($player->getLevel(), $nbt);
		$human->setSkin(new Skin('textfloat', $human->getInvisibleSkin()));
		$human->setNameTagVisible(true);
		$human->setNameTagAlwaysVisible(true);
		$human->spawnToAll();
	}
	
	public function setTopsbwkill(Player $player) {
		$nbt = Entity::createBaseNBT(new Vector3((float)$player->getX(), (float)$player->getY(), (float)$player->getZ()));
		$nbt->setTag($player->namedtag->getTag('Skin'));
		$human = new TopsEntityfbwkill($player->getLevel(), $nbt);
		$human->setSkin(new Skin('textfloat', $human->getInvisibleSkin()));
		$human->setNameTagVisible(true);
		$human->setNameTagAlwaysVisible(true);
		$human->spawnToAll();
	}
}