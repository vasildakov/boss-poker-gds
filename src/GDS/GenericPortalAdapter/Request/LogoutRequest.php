<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Request;

/**
 * LogoutRequest
 * Terminates a player session.
 */

class LogoutRequest {


	/**
	 * @var string The unique identifier of the calling system. The UID must match a system that is set-up in the management system.
	*/
	public $systemUID;
	

	/**
	 * @var string The ID that identifies the client that the player tries to login from.
	*/
	public $sessionID;

}