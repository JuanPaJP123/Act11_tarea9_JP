<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spiderman = new User;
        $spiderman->name = "Spiderman";
        $spiderman->gender = "Male";
        $spiderman->universe_id = 4;
        $spiderman->real_name = "Peter Benjamin Parker";
        $spiderman->email = "spiderman@email.com";
        $spiderman->password = Hash::make("Pass123");
        $spiderman->save();

        $hulk = new User;
        $hulk ->name = "Hulk";
        $hulk ->gender = "Male";
        $hulk ->universe_id = 4;
        $hulk ->real_name = "Robert Bruce Banner";
        $hulk ->email = "hulk@email.com";
        $hulk ->password = Hash::make("Pass123");
        $hulk ->save();
        
        $captainAmerica = new User;
        $captainAmerica ->name = "CaptainAmerica";
        $captainAmerica ->gender = "Male";
        $captainAmerica ->universe_id = 4;
        $captainAmerica ->real_name = "Steven Rogers";
        $captainAmerica ->email = "stevenrogers@email.com";
        $captainAmerica ->password = Hash::make("Pass123");
        $captainAmerica ->save();
        
        $superman = new User;
        $superman ->name = "Superman";
        $superman ->gender = "Male";
        $superman ->universe_id = 2;
        $uperman ->real_name = "Clark Kent";
        $uperman ->email = "superman@email.com";
        $superman ->password = Hash::make("Pass123");
        $superman ->save();
        
        $batman = new User;
        $batman  ->name = "Batman";
        $batman ->gender = "Male";
        $batman ->universe_id = 1;
        $batman ->real_name = "Bruce Wayne";
        $batman ->email = "batman@email.com";
        $batman ->password = Hash::make("Pass123");
        $batman ->save();
        
        $scarlet_Spider = new User;
        $scarlet_Spider  ->name = "Scarlet_Spider";
        $scarlet_Spider ->gender = "Female";
        $scarlet_Spider ->universe_id = 5;
        $scarlet_Spider ->real_name = "Ben Reilly";
        $scarlet_Spider ->email = "benreillyn@email.com";
        $scarlet_Spider ->password = Hash::make("Pass123");
        $scarlet_Spider ->save();
        
        $wonder_Woman = new User;
        $wonder_Woman  ->name = "Wonder_Woman";
        $wonder_Woman ->gender = "Female";
        $wonder_Woman ->universe_id = 1;
        $wonder_Woman ->real_name = "Diana Prince";
        $wonder_Woman ->email = "dianaprince@email.com";
        $wonder_Woman ->password = Hash::make("Pass123");
        $wonder_Woman ->save();
        
        $doomsday = new User;
        $doomsday  ->name = "";
        $doomsday ->gender = "male";
        $doomsday ->universe_id = 3;
        $doomsday ->real_name = "Doomsday";
        $doomsday ->email = "doomsday@email.com";
        $doomsday ->password = Hash::make("Pass123");
        $doomsday ->save();
        
         $scarlet_Witch = new User;
         $scarlet_Witch  ->name = "  Scarlet_Witch";
         $scarlet_Witch ->gender = "Female";
         $scarlet_Witch ->universe_id = 5;
         $scarlet_Witch ->real_name = "Wanda Maxinoff";
         $scarlet_Witch ->email = "wandawithc@email.com";
         $scarlet_Witch ->password = Hash::make("Pass123");
         $scarlet_Witch ->save();
        
        $night_Wing = new User;
        $night_Wing  ->name = " Night_Wing";
        $night_Wing ->gender = "male";
        $night_Wing ->universe_id = 3;
        $night_Wing ->real_name = "Dick Grayson";
        $night_Wing ->email = "nightwing@email.com";
        $night_Wing ->password = Hash::make("Pass123");
        $night_Wing ->save();
        
        
        
    }
}
