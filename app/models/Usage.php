<?php 
	class Usage extends Eloquent{
		protected $table = 'usages';

		public function complaints() {
			return $this->belongTo('Complaint');
		}

		public function appliances() {
			return $this->belongsTo('Appliance');
		} 
	}