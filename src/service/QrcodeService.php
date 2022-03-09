<?php

namespace App\service;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;


class QrcodeService
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder)
   {
       $this->builder=$builder;
   }
   public function qrcode($query)
   {
       $objdatetime=new \DateTime('NOW');
       $datestring=$objdatetime->format('d-m-y H:i:s');
       $url='le nom de client est :: ';

       $path=dirname(__DIR__,2).'/public/Front/assets';

      $result = $this->builder
          ->data($url.$query)
          ->encoding(new Encoding('UTF-8'))
          ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
          ->size(400)
          ->margin(10)
          ->labelText($datestring)
          ->logoPath($path.'/imgqrcode/logoqrcode.png')
          ->logoResizeToWidth(100)
          ->logoResizeToHeight(100)
          ->build()
          ;
       $namepng=uniqid('','').'.png';
       $result->saveToFile($path.'/qrcode/'.$namepng );

      return $result->getDataUri();
   }


}