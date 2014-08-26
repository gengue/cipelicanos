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
        /*
         * Para los paises y ciudades. Importar los datos de /world.sql 
         */
        Schema::create('City', function($table) {
            $table->increments('id');
            $table->string('nombre', 35);
            $table->string('CountryCode', 3)->references('Code')->on('Country');
            $table->string('District', 20);
            $table->integer('Population')->nullable();
        });
        Schema::create('Country', function($table) {
            $table->engine = 'InnoDB';
            $table->string('Code', 3)->primary();
            $table->string('nombre', 52);
            $table->enum('Continent', array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America'));
            $table->string('Region', 26);
            $table->decimal('SurfaceArea', 10, 2);
            $table->tinyInteger('IndepYear')->nullable();
            $table->integer('Population')->nullable();
            $table->decimal('LifeExpectancy', 3, 1)->nullable();
            $table->decimal('GNP', 10, 2)->nullable();
            $table->decimal('GNPOld', 10, 2)->nullable();
            $table->string('LocalName', 45)->nullable();
            $table->string('GovermentForm', 45)->nullable();
            $table->string('HeadOfState', 60)->nullable();
            $table->integer('Capital')->nullable();
            $table->string('Code2', 2);
        });
        Schema::create('CountryLanguage', function($table) {
            $table->engine = 'InnoDB';
            $table->string('CountryCode', 3)->references('Code')->on('Country');
            $table->string('Language', 30);
            $table->enum('IsOfficial', array('T', 'F'));
            $table->decimal('Percentage', 4, 1);
        });
        /* 
         * CORE DEL SISTEMA
         * 
         *  */
        
        Schema::create('usuarios', function($table) {
            $table->increments('id');
            $table->enum('tipo_usuario', array('ADMINISTRADOR', 'DIGITADOR', 'CLIENTE'));
            $table->string('password');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->string('pais_id');
            $table->foreign('pais_id')->references('Code')->on('Country');
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('City');
            $table->enum('estado', array('ACTIVO', 'INACTIVO'));
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
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->on_delete('set null');
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
            //$table->integer('container_id')->unsigned();
            $table->enum('estado', array('ACTIVO', 'INACTIVO'));
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
            //$table->foreign('container_id')->references('id')->on('containers')->on_delete('set null');
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('pedidos_containers');
        Schema::drop('pedidos');
        Schema::drop('companias');
        Schema::drop('usuarios');
        Schema::drop('containers');
        Schema::drop('navieras');
        Schema::drop('guias');
        Schema::drop('productos');
        Schema::drop('proveedores');
        Schema::drop('City');
        Schema::drop('Country');
        Schema::drop('CountryLanguage');
    }

}
