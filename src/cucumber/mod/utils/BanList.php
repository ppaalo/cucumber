<?php

namespace cucumber\mod\utils;

use cucumber\mod\Ban;
use cucumber\utils\CPlayer;

class BanList extends PlayerPunishmentList
{

    protected static function initMessages(): void
    {
        self::$messages = [
            'already-punished' => '%name% is already banned!',
            'not-punished' => '%uid% has not been banned!'
        ];
    }

    public function ban(Ban $ban, $reban = false): void
    {
        $this->punish($ban, $reban);
    }

    public function unban(string $uid): void
    {
        $this->pardon($uid);
    }

    public function isBanned(CPlayer $player): bool
    {
        return $this->isPunished($player);
    }

}