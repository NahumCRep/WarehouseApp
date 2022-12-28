<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::createView('products_view', function ($view) {
        //     $view->select('products.id', 'products.name', 'products.price');
        //     $view->from('products');
        // });

        DB::statement("CREATE VIEW warehouses_view AS SELECT *, (SELECT COUNT(*) FROM items WHERE WAREHOUSE_ID = warehouses.id) AS 'items' FROM warehouses");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses_view');
    }
};
