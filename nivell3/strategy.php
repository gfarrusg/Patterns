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

   


?>