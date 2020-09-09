<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    protected $table ="developers";

    public function getGetAttribute(){
        return substr($this->blog, 0, 50);
    }
}
