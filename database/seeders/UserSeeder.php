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
        
        $CaptainAmerica = new User;
        $CaptainAmerica ->name = "CaptainAmerica";
        $CaptainAmerica ->gender = "Male";
        $CaptainAmerica ->universe_id = 4;
        $CaptainAmerica ->real_name = "Steven Rogers";
        $CaptainAmerica ->email = "stevenrogers@email.com";
        $CaptainAmerica ->password = Hash::make("Pass123");
        $CaptainAmerica ->save();
        
        $Superman = new User;
        $Superman ->name = "Superman";
        $Superman ->gender = "Male";
        $Superman ->universe_id = 2;
        $Superman ->real_name = "Clark Kent";
        $Superman ->email = "superman@email.com";
        $Superman ->password = Hash::make("Pass123");
        $Superman ->save();
        
        $Batman = new User;
        $Batman  ->name = "Batman";
        $Batman ->gender = "Male";
        $Batman ->universe_id = 1;
        $Batman ->real_name = "Bruce Wayne";
        $Batman ->email = "batman@email.com";
        $Batman ->password = Hash::make("Pass123");
        $Batman ->save();
        
        $Scarlet_Spider = new User;
        $Scarlet_Spider  ->name = "Scarlet_Spider";
        $Scarlet_Spider ->gender = "Female";
        $Scarlet_Spider ->universe_id = 5;
        $Scarlet_Spider ->real_name = "Ben Reilly";
        $Scarlet_Spider ->email = "benreillyn@email.com";
        $Scarlet_Spider ->password = Hash::make("Pass123");
        $Scarlet_Spider ->save();
        
        $Wonder_Woman = new User;
        $Wonder_Woman  ->name = "Wonder_Woman";
        $Wonder_Woman ->gender = "Female";
        $Wonder_Woman ->universe_id = 1;
        $Wonder_Woman ->real_name = "Diana Prince";
        $Wonder_Woman ->email = "dianaprince@email.com";
        $Wonder_Woman ->password = Hash::make("Pass123");
        $Wonder_Woman ->save();
        
        $Doomsday = new User;
        $Doomsday  ->name = "";
        $Doomsday ->gender = "male";
        $Doomsday ->universe_id = 3;
        $Doomsday ->real_name = "Doomsday";
        $Doomsday ->email = "doomsday@email.com";
        $Doomsday ->password = Hash::make("Pass123");
        $Doomsday ->save();
        
         $Scarlet_Witch = new User;
         $Scarlet_Witch  ->name = "  Scarlet_Witch";
         $Scarlet_Witch ->gender = "Female";
         $Scarlet_Witch ->universe_id = 5;
         $Scarlet_Witch ->real_name = "Wanda Maxinoff";
         $Scarlet_Witch ->email = "wandawithc@email.com";
         $Scarlet_Witch ->password = Hash::make("Pass123");
         $Scarlet_Witch ->save();
        
        $Night_Wing = new User;
         $Night_Wing  ->name = " Night_Wing";
         $Night_Wing ->gender = "male";
         $Night_Wing ->universe_id = 3;
         $Night_Wing ->real_name = "Dick Grayson";
         $Night_Wing ->email = "nightwing@email.com";
         $Night_Wing ->password = Hash::make("Pass123");
         $Night_Wing ->save();
        
        
        
    }
}
