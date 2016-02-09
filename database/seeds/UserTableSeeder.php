<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
 
        User::create(array(
 
            'name'    => 'Shailendra Ruhela',
             'email'         => 'shailendra.ruhela@logixshapers.com',
            'username'      => 'admin',
            'password'      => Hash::make('password') //hashes our password nicely for us
        ));
 
    }
 
}