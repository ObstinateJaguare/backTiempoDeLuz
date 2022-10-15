<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clients', function (Blueprint $table) {
            $table->id();

            # En:Client code
            # Es:Codigo del cliente
            $table->string('code', 15)
                ->unique()
                ->comment('Codigo del cliente');

            # En:client name
            # Es:Nombre del cliente
            $table->string('name')->comment('Nombre del cliente');

            # En:Lastname client
            # Es:apellido del cliente
            $table->string('lastname')->comment('apellido del cliente');

            # En:Date of Birth of client
            # Es:Fecha de nacimiento del cliente
            $table->date('date_of_Birth')->comment('Fecha de nacimiento del cliente');

            # En:Client phone
            # Es:Telefono del cliente
            $table->string('phone')->comment('Telefono del cliente');
            //$table->enum('is_commissionable', ['yes', 'no'])->default('yes')->comment('if the plan is commissionable');

            # En:Email client
            # Es:Correo electronico del cliente
            $table->string('email')->comment('Correo electronico del cliente');

            # En:Client city
            # Es:Ciudad del cliente
            $table->string('city')->comment('Ciudad del cliente');

            # En:country client
            # Es:Pais del cliente
            $table->string('country')->comment('Pais del cliente');

            /*# En:Plan profitability indicator
            # Es:Indicador de rentabilidad del plan
            $table->enum('profitability_indicator', ['yes', 'no'])->default('yes')->comment('plan profitability indicator');

            # En:
            # Es:
            $table->string('quantity_indicator')->nullable()->comment('plan quantity indicator');

            # En:Plan restriction
            # Es:Restrinciones del plan
            $table->enum('restriction', ['yes', 'no'])->default('yes')->comment('plan restriction');

            # En:Plan adjustment indicator
            # Es:Indicador de ajuste del plan
            $table->enum('setting_indicator', ['yes', 'no'])->default('yes')->comment('plan adjustment indicator');

            # En:Plan adjustment amount
            # Es:Cantidad de ajuste del plan
            $table->string('adjustment_amount')->comment('plan adjustment amount');

            # En:Plan adjustment percentage
            # Es:Porcentaje de ajuste del plan
            $table->string('adjustment_percentage')->comment('plan adjustment percentage');
            */

            # En:Client status
            # Es:Estado del cliente
            $table->boolean('status')->default(true)->comment('Estado del cliente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
