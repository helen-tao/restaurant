<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'countries';
        // Data taken from https://github.com/prograhammer/countries-regions-cities
        $this->filename = base_path().'/database/seeders/csv/countries.csv';
    }

    public function run()
    {
        DB::disableQueryLog();

        parent::run();
    }
}
