<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Apartment;

use Faker\Generator as Faker;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) { 
            $newApartment = new Apartment;
            $newApartment->user_id = rand(1, 6);
            $newApartment->title = $faker->sentence;
            $newApartment->description = $faker->text($maxNbChars = 200);
            $newApartment->number_of_rooms = rand(1, 6);
            $newApartment->number_of_bath = rand(1, 2);
            $newApartment->number_of_beds = rand(1, 5);
            $newApartment->meters = rand(50, 100);
            $newApartment->address = $faker->address;
            $newApartment->latitude = $faker->latitude($min = -90, $max = 90);
            $newApartment->longitude = $faker->longitude($min = -180, $max = 180);
            $newApartment->price_for_night = rand(50, 100);
            $newApartment->image_path = 'https://picsum.photos/id/'.rand(1,100).'/300/200';
            $newApartment->published = $faker->boolean;
            $newApartment->save();
        }
    }
}
