<?php

namespace App\Traits;



trait FormatDates {
 	


  	public function byPattern($string,$pattern){

  		
    	
    	//'2017-01-04 00:00:00'
    	$date = date_create_from_format('Y-m-d H:i:s',$string);
    	return date_format($date,$pattern);
    }


  
  public function share($item)
  {
    return 'share this item';
  }
 
}