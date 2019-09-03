<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendarr extends Model implements \MaddHatter\LaravelFullcalendar\IdentifiableEvent
{
   protected $table = 'odsustva';
   protected $fillable = ['vrsta_odsustva', 'datum_odsustva'];


   public function getId() {
     return $this->id;
  }

   /**
    * Get the event's title
    *
    * @return string
    */
   public function getTitle()
   {
      return $this->vrsta_odsustva;
   }

   /**
    * Is it an all day event?
    *
    * @return bool
    */
   public function isAllDay()
   {
      return (bool)$this->all_day;
   }

   /**
    * Get the start time
    *
    * @return DateTime
    */
   public function getStart()
   {
      return $this->datum_odsustva;
   }

   /**
    * Get the end time
    *
    * @return DateTime
    */
   public function getEnd()
   {
      return $this->datum_odsustva;
   }
   public function getEventOptions()
  {
      return [
          'color' => $this->color,
    //etc
      ];
  }
}
