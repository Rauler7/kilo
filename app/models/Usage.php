<?php 
	class Usage extends Eloquent{
		protected $table = 'usages';
		protected $fillable = array();

		public function complaints() {
			return $this->belongTo('Complaint');
		}

		public function appliances() {
			return $this->belongsTo('Appliance');
		} 
	}