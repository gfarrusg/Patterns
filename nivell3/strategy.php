<?php

interface carCouponGenerator {
   
   public function addSeasonDiscount($isHighSeason);
   public function addStockDiscount($bigStock);
}

class BmwCouponGenerator implements carCouponGenerator {

   public function addSeasonDiscount($isHighSeason){
      
      if(!$isHighSeason){
       return 5;
      }
      return 0;

   }
   
   public function addStockDiscount($bigStock){
     
      if($bigStock) {
          return 7;
      }
      return 0;

   }

}

class MercedesCouponGenerator implements carCouponGenerator {

   public function addSeasonDiscount($isHighSeason){
      
      if(!$isHighSeason){
         return 4;
        }
        return 0;

   }
   
   public function addStockDiscount($bigStock){
      
      if($bigStock) {
         return 10;
     }
     return 0;

   }

}

   function cupounGenerator($car) {

   $discount = 0;
   $isHighSeason = false;
   $bigStock = true;

   if ($car == "bmw"){
   
      $discount = (new BmwCouponGenerator()) -> addSeasonDiscount ($isHighSeason) + (new BmwCouponGenerator()) -> addStockDiscount ($bigStock) ;

   } else if ($car == "mercedes") {
   
      $discount = (new MercedesCouponGenerator()) -> addSeasonDiscount ($isHighSeason) + (new MercedesCouponGenerator()) -> addStockDiscount ($bigStock) ;

   }
   return $cupoun = "Get {$discount}% off the price of your new car.\n".'<br />';
}
   echo cupounGenerator("bmw"); 
   echo cupounGenerator("mercedes"); 
   



?>