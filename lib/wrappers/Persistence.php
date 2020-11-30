<?php
namespace mindpowered\persistence;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \persistence\Persistence as Persistence_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * Persistence
 */
class Persistence
{
	/**
	 * Persistence
	 */
	function __construct() {
		$bus = MagLev::getInstance('default');
		$lib = new Persistence_Library($bus);
	}

	/**
	 * 
	 * @param object $obj 
	 * @return string 
	 */
	public function EnglishAuction_Auction_CreateNew($obj)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$obj];
		$ret = null;
		$phpbus->call('Persistence.EnglishAuction.Auction.CreateNew', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Auction_FindById()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Auction.FindById', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Auction_FindStarting()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Auction.FindStarting', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Auction_FindEnding()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Auction.FindEnding', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Auction_FindOpen()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Auction.FindOpen', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Bid_CountForAuction()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Bid.CountForAuction', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Bid_FindByHighestPriceForAuction()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Bid.FindByHighestPriceForAuction', $args, function($async_ret){});
	}

	/**
	 * 
	 * @return void
	 */
	public function EnglishAuction_Bid_New()
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [];
		$phpbus->call('Persistence.EnglishAuction.Bid.New', $args, function($async_ret){});
	}

}
