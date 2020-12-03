<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage_document extends Model
{
        protected $table = 'manage_documents';
        protected $fillable = ['id_client','title','fichier','note','id_admin','id_day','id_month','month','id_year'];

	
	}
