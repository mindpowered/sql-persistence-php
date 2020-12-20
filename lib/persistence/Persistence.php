<?php
namespace persistence;

use \maglev\MagLev;
use \maglev\MagLevPhp;

class Persistence
{
    public function __construct(MagLev $bus) {
        $this->phpbus = new MagLevPhp($bus);
        $this->phpbus->register('Persistence.EnglishAuction.Auction.CreateNew', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Auction.CreateNew');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindById', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Auction.FindById');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindStarting', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Auction.FindStarting');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindEnding', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Auction.FindEnding');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Auction.FindOpen', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Auction.FindOpen');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.CountForAuction', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Bid.CountForAuction');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.FindByHighestPriceForAuction', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Bid.FindByHighestPriceForAuction');
        });
        $this->phpbus->register('Persistence.EnglishAuction.Bid.New', function($args) {
            $this->noimpl('Persistence.EnglishAuction.Bid.New');
        });
    }

    private function noimpl(string $method) {
        $data = ["_not_implemented_", "sql-persistence", "php", $method];
        $this->phpbus->call("MindPowered.Telemetry.Send", $data);
        $msg = "You are trying to use the '" . $method . "' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.";
        throw new \Exception($msg);
    }
}
