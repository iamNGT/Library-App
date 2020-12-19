<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{

    private function randDate()
	{
		return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    private function randLang(){
        $lang = ['Kirundi','Français','English','Kiswahili'];
        $lang_rand = array_rand($lang,1);

        return $lang[$lang_rand];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<= 100 ;$i++){
            $date = $this->randDate();
            $lang = $this->randLang();
            DB::table('books')->insert([
                'title' => 'Livre' . $i,
                'author' => 'Auteur' . $i,
                'editor' => 'Editeur' . $i,
                'lang_book' => $lang,
                'description' => 'Le livre' . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                    ,sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'nbr_copy' => rand(50,500),
                'created_at' => $date,
				'updated_at' => $date
            ]);
        }
    }
}
