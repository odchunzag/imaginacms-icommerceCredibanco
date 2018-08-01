<?php

namespace Modules\IcommerceCredibanco\Entities;


class Configcredibanco
{
   	

   	private $description;
    private $merchantId;
    private $nroTerminal;
    private $vec;
    private $url_action;
    private $currency;
   	private $image;
   	private $status;


    public function __construct()
    {

    	$this->description = setting('icommerceCredibanco::description');
      $this->merchantId = setting('icommerceCredibanco::merchantId');
      $this->nroTerminal = setting('icommerceCredibanco::nroTerminal');
      $this->vec = setting('icommerceCredibanco::vec');
      $this->url_action = setting('icommerceCredibanco::url_action');
      $this->currency = setting('icommerceCredibanco::currency');
    	$this->image = setting('icommerceCredibanco::image');
      $this->status = setting('icommerceCredibanco::status');

    }


    public function getData()
    {
        return (object) [
            'description' => $this->description,
            'url_action' => $this->url_action,
            'merchantId' => $this->merchantId,
            'nroTerminal' => $this->nroTerminal,
            'vec' => $this->vec,
            'currency' => $this->currency,
            'image' => url($this->image),
            'status' => $this->status
        ];
    }

}