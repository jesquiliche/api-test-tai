<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\File;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->delete();
        $json = File::get("database/data/preguntas.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Pregunta::create(array(
                
                'pregunta' => $obj->pregunta,
                'a'=>$obj->a,
                'b'=>$obj->b,
                'c'=>$obj->c,
                'd'=>$obj->d,
                'respuesta' => $obj->respuesta,
                'categoria_id'=> $obj->categoria_id
            ));
            print $obj->pregunta."\n";
            print "  a) ".$obj->a."\n";
            print "  b) ".$obj->b."\n";
            print "  c) ".$obj->c."\n";
            print "  d) ".$obj->d."\n";
            print "\n";

  
        }
        //
    }
}
