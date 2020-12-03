<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage_document_admin extends Model
{
        protected $table = 'manage_admin_documents';
        protected $fillable = ['title','fichier','note','id_admin','id_day','id_month','month','id_year'];

	
	}
