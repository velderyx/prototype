<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdatePartDatesFromLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            UPDATE parts
            JOIN (
                SELECT part_id, MAX(date) AS latest_date
                FROM logs
                GROUP BY part_id
            ) AS latest_logs ON parts.id = latest_logs.part_id
            SET parts.date_out = latest_logs.latest_date
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If needed, you can define how to reverse this update.
        // For example, you might set parts.date_out back to NULL or some default value.
    }
}
