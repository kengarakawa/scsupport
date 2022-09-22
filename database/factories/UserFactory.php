<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   // $faker = Faker\Factory::create();
        
        $originalDistributors = [
            [ 'id' => '22121124'  , 'name' => 'Inge Sarfelt' ] , 
            [ 'id' => '22121127'  , 'name' => 'Jan Madsen' ] , 
            [ 'id' => '22121199'  , 'name' => 'Louise Hjorth' ] ,             
        ];
        
        
        $od = $originalDistributors[ $this->faker->randomKey($originalDistributors) ];
        return [
            //
            'distributor_id' => sprintf('22000%05d' , rand(1,9999)) , 
            'full_name' => $this->faker->unique()->name() , 
            'phone' => $this->faker->phoneNumber() , 
            'email' => $this->faker->email() ,
            'avatar_url' => $this->faker->imageUrl(360, 360, 'animals') , 
                    
            'password' => bcrypt('password') , 
            'original_distributor' => $od['id'] , 
            'original_distributor_name' => $od['name'] , 
            'current_distributor' => $od['id'] , 
            'current_distributor_name' => $od['name'] ,
            
            'privileges' => 'C' , 
            'signup_at' => $this->faker->dateTimeBetween('-10 YEAR', '-1 week') , 
            
            'rank' => 'distributor' , 
            'team' => 'global' , 
            'account_status' => 10 , 
            
            'remember_token' => $this->faker->numerify('###########') ,                         
            'email_verified_at' => now(),
            'created_at' => now()  
        ];
    }
}
