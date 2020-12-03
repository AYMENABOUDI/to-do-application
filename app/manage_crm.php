<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manage_crm extends Model
{
        protected $table = 'manage_crms';
        protected $fillable = ['id_client','crm_type','title','crm_date','crm_time','note','id_admin','id_day','id_month','month','id_year'];

	
	}
