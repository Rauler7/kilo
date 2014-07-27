<?php

class InquiryTableSeeder extends Seeder {

	public function run()
	{
		Inquiry::create([
			'fee_type' => 'sdfsfdfsdfsfd',
			'real_amount' => '12.90',
			'estimated_amount' => '13.10'
		]);
		Inquiry::create([
			'fee_type' => 'sdfsfdfsdfsfd',
			'real_amount' => '12.90',
			'estimated_amount' => '13.10'
		]);
		Inquiry::create([
			'fee_type' => 'sdfsfdfsdfsfd',
			'real_amount' => '12.90',
			'estimated_amount' => '13.10'
		]);		
	}

}