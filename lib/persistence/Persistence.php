<?php
namespace persistence;

use \maglev\MagLev;
use \maglev\MagLevPhp;

class Persistence
{
    public function __contruct(MagLev $bus) {
        $this->phpbus = new MagLevPhp($bus);
        $this->phpbus->register('Persistence.EnglishAuction.Auction.CreateNew', function($args) {
            return "123";
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindById', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindStarting', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindEnding', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindOpen', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.CountForAuction', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.FindByHighestPriceForAuction', function($args) {
            return null;
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.New', function($args) {
            return null;
        });
    }
}
