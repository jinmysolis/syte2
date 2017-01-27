<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        
                
                $this->truncateTables(array(
                    'users',
                    'password_resets',
                    'tickets',
                    'ticket_votes',
                    'ticket_commets'
                    
                ));
              $this->call('UserTableSeeder');
              $this->call('TickeTableSeeder');
              $this->call('TickeVoteTableSeeder');
              $this->call('TickeCommentTableSeeder');
                
        }     
        
        private function truncateTables(array $tables)
        {
                DB::statement('SET FOREIGN_KEY_CHECKS = 0');
                 $this->checkForeignKeys(false);
               
                 foreach ($tables as $table) {
                      DB::table($table)->truncate();
                     
                 }
               
                 $this->checkForeignKeys(true);
              
		
               
	}
        private function checkForeignKeys($check)
                {
            $check= $check ? '1' : '0';
            DB::statement("SET FOREIGN_KEY_CHECKS =  $check;");
                 
        }

}
