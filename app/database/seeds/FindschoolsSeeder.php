<?php

class FindschoolsSeeder extends Seeder {

	public function run() {

		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE schools');
		DB::statement('TRUNCATE counselors');
		DB::statement('TRUNCATE users');

		# Counselors
		$White = new Counselor;
		$White->counselor_name = 'Seth White';
		$White->counselor_email = 'swhite@gmail.com';
		$White->counselor_phone = '6257455474';		
		$White->save();

		$Simon = new Counselor;
		$Simon->counselor_name = 'Kent Simon';
		$Simon->counselor_email = 'ksimon@gmail.com';
		$Simon->counselor_phone = '6178342135';		
		$Simon->save();		

		$Keller = new Counselor;
		$Keller->counselor_name = 'Sam Keller';
		$Keller->counselor_email = 'skeller@gmail.com';
		$Keller->counselor_phone = '7184862518';		
		$Keller->save();		

		$Bean = new Counselor;
		$Bean->counselor_name = 'Heather Bean';
		$Bean->counselor_email = 'hbean@gmail.com';
		$Bean->counselor_phone = '5851547544';		
		$Bean->save();	




		# Schools
		$Groton = new School;
		$Groton->school_name = 'Groton School';
		$Groton->built_year = 1884;
		$Groton->school_logo = 'http://upload.wikimedia.org/wikipedia/en/9/92/Groton.png';
		$Groton->school_link = 'http://www.groton.org/';
		$Groton->counselor()->associate($White); 
		$Groton->save();

		$Belmont = new School;
		$Belmont->school_name = 'Belmont Hill School';
		$Belmont->built_year = 1923;
		$Belmont->school_logo = 'http://upload.wikimedia.org/wikipedia/en/5/57/Belmont_Hill_School_Seal.png';
		$Belmont->school_link = 'http://www.belmonthill.org/';
		$Belmont->counselor()->associate($Keller); 
		$Belmont->save();

		$Buckingham = new School;
		$Buckingham->school_name = 'Buckingham Browne & Nichols';
		$Buckingham->built_year = 1883;
		$Buckingham->school_logo = 'http://upload.wikimedia.org/wikipedia/en/5/5b/Bbnlogo.png';
		$Buckingham->school_link = 'http://www.bbns.org/';
		$Buckingham->counselor()->associate($Keller); 
		$Buckingham->save();		

		$Brooks = new School;
		$Brooks->school_name = 'Brooks School';
		$Brooks->built_year = 1926;
		$Brooks->school_logo = 'http://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Brooks.png/220px-Brooks.png';
		$Brooks->school_link = 'http://www.brooksschool.org/';
		$Brooks->counselor()->associate($Keller); 
		$Brooks->save();

		$Lawrence = new School;
		$Lawrence->school_name = 'Lawrence Academy';
		$Lawrence->built_year = 1793;
		$Lawrence->school_logo = 'http://upload.wikimedia.org/wikipedia/en/4/49/Lawrence.gif';
		$Lawrence->school_link = 'http://www.lacademy.edu/';
		$Lawrence->counselor()->associate($Simon); 
		$Lawrence->save();

		$Middlesex = new School;
		$Middlesex->school_name = 'Middlesex School';
		$Middlesex->built_year = 1901;
		$Middlesex->school_logo = 'http://www.mxanvil.com/sites/default/files/n1863/rsz_rsz_1rsz_official_mx_logo.jpg';
		$Middlesex->school_link = 'http://mxschool.edu/';
		$Middlesex->counselor()->associate($White); 
		$Middlesex->save();

		$Roxbury = new School;
		$Roxbury->school_name = 'Roxbury Latin School';
		$Roxbury->built_year = 1645;
		$Roxbury->school_logo = 'http://images.careersandcolleges.com/pss/77/logo.jpg';
		$Roxbury->school_link = 'http://www.roxburylatin.org/';
		$Roxbury->counselor()->associate($White); 
		$Roxbury->save();



		
		# Users
		$user = new User;
		$user->email      = 'abc@gmail.com';
		$user->password   = Hash::make('abc1234');
		$user->first_name = 'Allison';
		$user->last_name  = 'Simon';
		$user->save();


	}

}