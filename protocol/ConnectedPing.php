<?php

/*
 * RakLib network library
 *
 *
 * This project is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 */

declare(strict_types=1);

namespace raklib\protocol;

#include <rules/RakLibPacket.h>

class ConnectedPing extends Packet{
	public static $ID = MessageIdentifiers::ID_CONNECTED_PING;

	/** @var int */
	public $sendPingTime;

	public function encode(){
		parent::encode();
		$this->putLong($this->sendPingTime);
	}

	public function decode(){
		parent::decode();
		$this->sendPingTime = $this->getLong();
	}
}