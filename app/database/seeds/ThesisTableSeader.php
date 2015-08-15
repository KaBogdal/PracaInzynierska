<?php

class ThesisTableSeeder extends Seeder
{

public function run()
{
    DB::table('theses')->delete();
    Thesis::create(array(
        'subject'     => 'Aplikacja na smartfona do planowania zakupów',
        'date' => '2015',
        'descr'    => 'Aplikacja umożliwia dodawanie, edycje i obabianie zdjęć oraz pozwala na dowolne..',
    	'spec' => 'inf',
    	'level' => 1,
    ));
    
    Thesis::create(array(
    		'subject'     => 'Rozmieszczenie kwarcu z okresu kredy w tatrach niskich',
    		'date' => '2015',
    		'descr'    => 'Celem pracy jest zbadanie i przedstawienie dokładnych spisów i wykresów..',
    		'spec' => 'geo',
    		'level' => 1,
    ));

}

}