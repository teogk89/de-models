<?php

namespace App\Traits;



trait FormatDates {
 	


  	public function byPattern($string,$pattern){

  		
    	
    	//'2017-01-04 00:00:00'
    	$date = strtotime($string);
    	return date($pattern,$date);
    }


  
  public function share($item)
  {
    return 'share this item';
  }
 
}