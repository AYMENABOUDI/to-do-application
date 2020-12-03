<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
        protected $table = 'tasks';
protected $fillable = ['name', 'description', 'task_date', 'type', 'day', 'id_admin', 'etats', 'etatsnote', 'etatsdate'];
}