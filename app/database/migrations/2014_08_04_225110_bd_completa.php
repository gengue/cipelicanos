<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BdCompleta extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usuarios', function($table) {
            $table->increments('id');
            $table->enum('tipo_usuario', array('ADMINISTADOR', 'DIGITADOR', 'CLIENTE'));
            $table->string('password', 60);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('telefono', 25);
            $table->string('email');
            $table->string('direccion');
            $table->string('pais');
            $table->string('ciudad');
            $table->timestamps();
        });

        Schema::create('companias', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('nit');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('id_usuario');
            $table->timestamps();
        });
        Schema::create('containers', function($table) {
            $table->increments('id');
            $table->string('numero_container');
            $table->timestamps();
        });
        Schema::create('navieras', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });
        Schema::create('guias', function($table) {
            $table->increments('id');
            $table->string('numero_guia');
            $table->string('empresa_envio');
            $table->string('url_archivo');
            $table->timestamps();
        });
        Schema::create('proveedores', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->timestamps();
        });
        Schema::create('productos', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });
        
        Schema::create('pedidos', function($table) {
            $table->increments('id');
            $table->integer('id_producto')->unsigned();
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_naviera')->unsigned();
            $table->integer('id_container')->unsigned();
            $table->integer('id_guia')->unsigned();
            $table->string('numero_reserva');
            $table->string('buque');
            $table->date('fecha_carga');
            $table->date('fecha_abordaje');
            $table->date('fecha_entrega');
            $table->date('fecha_vencimiento');
            $table->decimal('importe_facturado', 12, 2);
            $table->foreign('id_producto')->references('id')->on('productos')->on_delete('set null');
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->on_delete('set null');
            $table->foreign('id_naviera')->references('id')->on('navieras')->on_delete('set null');
            $table->foreign('id_container')->references('id')->on('containers')->on_delete('set null');
            $table->foreign('id_guia')->references('id')->on('guias')->on_delete('set null');
            $table->timestamps();
        });

        
        Schema::create('pedidos_containers', function($table) {
            $table->increments('id');
            $table->integer('id_container')->unsigned();
            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_container')->references('id')->on('containers')->on_delete('set null');
            $table->foreign('id_pedido')->references('id')->on('pedidos')->on_delete('set null');
            $table->timestamps();
        });
        
        
        Schema::create('proveedores_productos', function($table) {
            $table->increments('id');
            $table->integer('id_proveedores')->unsigned();
            $table->integer('id_productos')->unsigned();
            $table->foreign('id_proveedores')->references('id')->on('proveedores')->on_delete('set null');
            $table->foreign('id_productos')->references('id')->on('productos')->on_delete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('pedidos_containers');
        Schema::drop('proveedores_productos');
        Schema::drop('pedidos');
        Schema::drop('usuarios');
        Schema::drop('companias');
        Schema::drop('containers');
        Schema::drop('navieras');
        Schema::drop('guias');
        Schema::drop('proveedores');
        Schema::drop('productos');
    }

}
