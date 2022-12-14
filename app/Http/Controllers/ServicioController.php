<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function getIndex() {
        return view('servicios.index');
    }

    public function getShow($id) {
    return view('servicios.show', array('id'=>$id));
    }

    public function getCreate() {
        return view('servicios.create');
    }

    public function store(Request $request) {
        /*Para crear las tablas y modificarlas, mirar en laravel.com/docs/ en Migrations*/
        /*HAY QUE DEJAR LO QUE ESTÁ COMENTADO AQUÍ y borrar el return de request:
        $registroNuevo = new NombreModelo(); (recodar poner el use arriba)
        $registroNuevo->nombre -emparejado con el de la bbdd-= $request->input('nombre') -emparejado con el del formulario-
        $registroNuevo->precio = $request->input('precio');
        $registroNuevo->categoria = $request->input('categoria');
        $registroNuevo->imagen = $request->input('imagen');
        $registroNuevo->descripcion = $request->input('descripcion');
        $registroNuevo->save();

        $url = action([ServicioController::class, 'getShow'],['id' => $registroNuevo->id]);
        return redirect($url);
        */
        return $request->all(); /*si quiero un campo específico: input('nombre');*/
    }
    /*
    php artisan make:migration movies_default_and_nullables --table=movies
        para crear un fichero. Después lo editamos: estará en la carpeta migrations
        y rellenamos lo que hay dentro de Schema::table UP, copiando del archivo create (tmb en migrations)
        $table->string('poster')->nullable()->change();
        $table->boolean('rented')->default(false)->change();
    En el DOWN lo dejamos como estaba antes:
        $table->string('poster')->change();
        $table->boolean('rented')->change();

    php artisan migrate;
        Si nos pide "Doctrine DBAL", hacemos: composer require doctrine/dbal
    */
    public function getEdit($id) {
            return view('servicios.edit', array('id'=>$id));
    }


/*private $arrayServicios = array(
    array(
        'nombre' => 'Guardería 1',
        'precio' => '20',
        'categoria' => 'empresa',
        'imagen' => '',
        'descripcion' => 'Guardería en el centro de Cartagena.'
    ),
    array(
        'nombre' => 'Autónomo 1',
        'precio' => '10',
        'categoria' => 'particular',
        'imagen' => '',
        'descripcion' => 'Se desplaza.'
    )
);*/
}
