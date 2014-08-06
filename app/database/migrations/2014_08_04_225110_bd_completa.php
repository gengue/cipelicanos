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
            $table->softDeletes();
        });

        Schema::create('companias', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('nit');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->on_delete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('containers', function($table) {
            $table->increments('id');
            $table->string('numero_container');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('navieras', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('guias', function($table) {
            $table->increments('id');
            $table->string('numero_guia');
            $table->string('empresa_envio');
            $table->string('url_archivo');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('proveedores', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('productos', function($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('pedidos', function($table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->integer('naviera_id')->unsigned();
            $table->integer('container_id')->unsigned();
            $table->integer('guia_id')->unsigned();
            $table->string('numero_reserva');
            $table->string('buque');
            $table->date('fecha_carga');
            $table->date('fecha_abordaje');
            $table->date('fecha_entrega');
            $table->date('fecha_vencimiento');
            $table->decimal('importe_facturado', 12, 2);
            $table->foreign('producto_id')->references('id')->on('productos')->on_delete('set null');
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->on_delete('set null');
            $table->foreign('naviera_id')->references('id')->on('navieras')->on_delete('set null');
            $table->foreign('container_id')->references('id')->on('containers')->on_delete('set null');
            $table->foreign('guia_id')->references('id')->on('guias')->on_delete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        
        Schema::create('pedidos_containers', function($table) {
            $table->increments('id');
            $table->integer('container_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->foreign('container_id')->references('id')->on('containers')->on_delete('set null');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->on_delete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
        
        
        Schema::create('proveedores_productos', function($table) {
            $table->increments('id');
            $table->integer('proveedores_id')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->foreign('proveedores_id')->references('id')->on('proveedores')->on_delete('set null');
            $table->foreign('productos_id')->references('id')->on('productos')->on_delete('set null');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('companias');
        Schema::drop('usuarios');
        Schema::drop('containers');
        Schema::drop('navieras');
        Schema::drop('guias');
        Schema::drop('proveedores');
        Schema::drop('productos');
    }

}
