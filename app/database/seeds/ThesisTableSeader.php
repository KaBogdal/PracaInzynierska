<?php

class ThesisTableSeeder extends Seeder
{

public function run()
{
    DB::table('thesis')->delete();
    Thesis::create(array(
        'subject'     => 'Aplikacja na smartfona do planowania zakupów',
        'date' => '2015-06-20',
        'descr'    => 'Aplikacja umożliwia dodawanie, edycje i obabianie zdjęć oraz pozwala na dowolne..',
    	'spec' => 'inf',
    ));
    
    Thesis::create(array(
    		'subject'     => 'Rozmieszczenie kwarcu z okresu kredy w tatrach niskich',
    		'date' => '2015-06-24',
    		'descr'    => 'Celm pracy jest zbadanie i przedstawienie dokładnych spisów i wykresów..',
    		'spec' => 'gor',
    ));

}

}