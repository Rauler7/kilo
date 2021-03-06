<?php

class ApplianceTableSeeder extends Seeder {

	public function run()
	{
		Appliance::create([
			'name' => 'Foco 100W(Luz amarilla)',
			'standar_usages' => '100',
			'avg_usages' => '3'
		]);
		Appliance::create([
			'name' => 'Tostadora',
			'standar_usages' => '1000',
			'avg_usages' => '0.2'
		]);
		Appliance::create([
			'name' => 'Bomba de Cisterna',
			'standar_usages' => '1030',
			'avg_usages' => '0.5'
		]);		
		Appliance::create([
			'name' => 'Cocina electrica 4 quemadores',
			'standar_usages' => '10500',
			'avg_usages' => '0.7'
		]);	
		Appliance::create([
			'name' => 'Secadora de pelo',
			'standar_usages' => '1200',
			'avg_usages' => '0.2'
		]);	
		Appliance::create([
			'name' => 'Horno microonda',
			'standar_usages' => '1200',
			'avg_usages' => '0.1'
		]);	
		Appliance::create([
			'name' => 'Horno eléctrico',
			'standar_usages' => '1200',
			'avg_usages' => '0.3'
		]);	
		Appliance::create([
			'name' => 'Ventilador de techo',
			'standar_usages' => '125',
			'avg_usages' => '2'
		]);	
		Appliance::create([
			'name' => 'Asador eléctrico',
			'standar_usages' => '1400',
			'avg_usages' => '0.3'
		]);	
		Appliance::create([
			'name' => 'Cocina electrica 2 quemadores',
			'standar_usages' => '1500',
			'avg_usages' => '0.6'
		]);	
		Appliance::create([
			'name' => 'Tetera',
			'standar_usages' => '1500',
			'avg_usages' => '0.5'
		]);	
		Appliance::create([
			'name' => 'Refrigerador 1 puerta',
			'standar_usages' => '178',
			'avg_usages' => '8'
		]);	
		Appliance::create([
			'name' => 'Aire acondicionado pequeño',
			'standar_usages' => '1800',
			'avg_usages' => '3'
		]);	
		Appliance::create([
			'name' => 'Radiograbadora',
			'standar_usages' => '20',
			'avg_usages' => '1.5'
		]);	
		Appliance::create([
			'name' => 'Consola de juegos',
			'standar_usages' => '210',
			'avg_usages' => '1'
		]);	
		Appliance::create([
			'name' => 'TV color',
			'standar_usages' => '210',
			'avg_usages' => '4.3'
		]);	
		Appliance::create([
			'name' => 'Refrigeradora 2 puertas',
			'standar_usages' => '243',
			'avg_usages' => '8'
		]);	
		Appliance::create([
			'name' => 'Lampara blanca',
			'standar_usages' => '25',
			'avg_usages' => '4'
		]);	
		Appliance::create([
			'name' => 'Foco 25W (Luz amarilla)',
			'standar_usages' => '25',
			'avg_usages' => '3'
		]);	
		Appliance::create([
			'name' => 'Freezer pequeño',
			'standar_usages' => '250',
			'avg_usages' => '8'
		]);	
		Appliance::create([
			'name' => 'Aire acondicionado mediano',
			'standar_usages' => '2950',
			'avg_usages' => '3'
		]);	
		Appliance::create([
			'name' => 'Ducha electrica pequeña',
			'standar_usages' => '4400',
			'avg_usages' => '0.3'
		]);	
		Appliance::create([
			'name' => 'Licuadora',
			'standar_usages' => '475',
			'avg_usages' => '0.3'
		]);	
		Appliance::create([
			'name' => 'Ventilador de mesa',
			'standar_usages' => '50',
			'avg_usages' => '0.4'
		]);	
		Appliance::create([
			'name' => 'Foco 50W(Luz amarilla)',
			'standar_usages' => '50',
			'avg_usages' => '3'
		]);	
		Appliance::create([
			'name' => 'Lavadora',
			'standar_usages' => '561',
			'avg_usages' => '0.5'
		]);
		Appliance::create([
			'name' => 'TV 21',
			'standar_usages' => '70',
			'avg_usages' => '4.3'
		]);
		Appliance::create([
			'name' => 'Reflectores',
			'standar_usages' => '75',
			'avg_usages' => '1.3'
		]);
		Appliance::create([
			'name' => 'Plancha',
			'standar_usages' => '800',
			'avg_usages' => '0.7'
		]);
		Appliance::create([
			'name' => 'Freezer mediano',
			'standar_usages' => '840',
			'avg_usages' => '8'
		]);
		Appliance::create([
			'name' => 'Bomba de agua pequeña',
			'standar_usages' => '871',
			'avg_usages' => '0.5'
		]);	
		Appliance::create([
			'name' => 'Cafetera',
			'standar_usages' => '900',
			'avg_usages' => '1'
		]);	
	}
}