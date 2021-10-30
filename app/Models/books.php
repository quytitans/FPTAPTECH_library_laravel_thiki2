<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class books extends Model
{
    public function author(): HasOne
    {
        return $this-> hasOne(author::class);
    }

    public function getstrStatusAttribute(){
        $strStatus = '';
        if($this->available == 1){
            $strStatus = 'available';
        }
        if($this->available == 2){
            $strStatus = 'unavailable';
        }
        return $strStatus;
    }
}
