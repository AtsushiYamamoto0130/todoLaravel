<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks () {
        return $this->hasMany('App\Task');
        // $this->hasMany('App\Task', 'folder_id', 'id');を短縮
    }
}
