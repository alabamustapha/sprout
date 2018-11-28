<?php

use Illuminate\Database\Seeder;
use App\Service;

class Services extends Seeder
{

	protected $services = [
		'Radiology/Imaging',
		'Surgery',
		'Intensive Care Unit (ICU)',
		'Emergency Room (ER)',
		'Labor & Delivery',
		'Nursery',
		'Cardiac Care',
		'Cafeteria',
		'Gift Shop',
		'Lab',
		'Pharmacy',
		'Neonatal Intensive Care Unit (NICU)',
		'Morgue',
		'Pediatrics',
	];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Service::truncate();

    	foreach($this->services as $service) {
    		DB::table('services')->insert([
	            'name' => $service,
	        ]);
    	}
    }
}
