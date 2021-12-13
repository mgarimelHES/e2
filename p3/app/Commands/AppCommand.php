<?php

namespace App\Commands;
# Add a use statement here so we can use the Faker\Factory class
use Faker\Factory;

class AppCommand extends Command
{
    # fresh install of the game table and seed the sample data
    public function fresh() 
    {

        $this->migrate();
        $this->seed();
    }
    # create game table using the framework
    public function migrate() 
    {

        $this->app->db()->createTable('rounds', [
            'selection' => 'varchar(10)',
            'winner' => 'varchar(10)',
            'timestamp' => 'timestamp',
            ]);
        
        dump('Migrations complete');
    }
    # Seed the sample fake data
    public function seed() 
    {

        $faker = Factory::create();

        for ($i = 10; $i > 0; $i--) {

            $this->app->db()->insert('rounds', [
                'selection' => ['Rock', 'Paper', 'Scissors'][rand(0,2)],
                'winner' => ['Player', 'Computer', 'Tied'][rand(0,2)],
                'timestamp' => $faker->dateTimeBetween('-'.$i.'days', '-'.$i.'days')->format('Y-m-d H:i:s')   # Date range between last 10 days
                
            ]);
        }
        dump('Seeds are complete');
    }
}