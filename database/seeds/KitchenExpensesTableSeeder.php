<?php

use Illuminate\Database\Seeder;

class KitchenExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kitchen_expenses')->insert([
       	['time'=>'2019-03-01','item'=>'Gas','quantity'=>6,'price'=>1740000],
       	['time'=>'2019-04-01','item'=>'Nước lau sàn','quantity'=>10,'price'=>250000],
       	['time'=>'2019-04-01','item'=>'Cây lau sàn','quantity'=>2,'price'=>120000],
       	['time'=>'2019-04-01','item'=>'Bì đựng rác','quantity'=>10,'price'=>100000],
       	['time'=>'2019-04-01','item'=>'Gas','quantity'=>6,'price'=>1740000],
       	['time'=>'2019-04-01','item'=>'Thau nhựa','quantity'=>2,'price'=>35000],
       	['time'=>'2019-04-01','item'=>'Thùng rác','quantity'=>2,'price'=>75000],
       	['time'=>'2019-06-01','item'=>'Gas','quantity'=>6,'price'=>1740000],
       	['time'=>'2019-06-01','item'=>'Bì đựng rác','quantity'=>10,'price'=>100000],
       	['time'=>'2019-06-01','item'=>'Nước lau sàn','quantity'=>10,'price'=>250000],

       ]);
    }
}
