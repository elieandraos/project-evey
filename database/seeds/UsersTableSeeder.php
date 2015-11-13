<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        	User::create([
			"username" => "elie",
			"email" => "elie.a@mcsaatchi.me",
			"name" => "elie andraos",
			"password" => Hash::make("123456"),
			"username" => "eliea"
		]);

		User::create([
			"username" => "georges",
			"email" => "georges.r@mcsaatchi.me",
			"name" => "georges raad",
			"password" => Hash::make("123456"),
			"username" => "gerogesr"
		]);

		User::create([
			"username" => "lama",
			"email" => "lama.bg@mcsaatchi.me",
			"name" => "lama bou ghannam",
			"password" => Hash::make("123456"),
			"username" => "lamabg"
		]);

		User::create([
			"username" => "rached",
			"email" => "rached.h@mcsaatchi.me",
			"name" => "rached haddad",
			"password" => Hash::make("123456"),
			"username" => "rachedh"
		]);

		User::create([
			"username" => "joseph",
			"email" => "jospeh.s@mcsaatchi.me",
			"name" => "joseph saade",
			"password" => Hash::make("123456"),
			"username" => "josephs"
		]);

		User::create([
			"username" => "jihane",
			"email" => "jihane.s@mcsaatchi.me",
			"name" => "jihane saade",
			"password" => Hash::make("123456"),
			"username" => "jihanes"
		]);		

		User::create([
			"username" => "jimmy",
			"email" => "jimmy.g@mcsaatchi.me",
			"name" => "jimmy ghazal",
			"password" => Hash::make("123456"),
			"username" => "jimmyg"
		]);			
    }
}
