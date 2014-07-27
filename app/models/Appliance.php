<?php 
	class Appliance extends Eloquent{
		protected $table = 'appliances';
		protected $fillable = array('name', 'standar_usages');
	}