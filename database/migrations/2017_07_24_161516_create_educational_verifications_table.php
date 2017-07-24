<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_verifications', function (Blueprint $table) {
            //`ud_uid`, `ud_type`, `ud_surname`, `ud_first_name`, `ud_middle_name`, `ud_date_of_birth`, `ud_date_created`, `ud_created_by_u_uid`, `ud_response_file`, `ud_response_message`, `ud_is_verified`, `ud_is_verified_by_uid`, `ud_is_verified_by_institute`, `ud_transaction_serialize_array`, `ud_is_payment_success` and `ud_uid`, `ev_pi_name`, `ev_pi_id`, `ev_year_of_graduation`, `ev_matric_number`, `ev_course_offered`, `ev_degree_obtained`, `ev_degree_class`, `ev_purpose_of_verification`, `ev_url_of_document`, `ev_url_of_academic_degree`
            $table->uuid('id');
            $table->string('type');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('date_of_birth');
            $table->string('response_file');
            $table->text('response_message');
            $table->tinyInteger('is_verified');
            $table->string('verified_by_id');
            $table->tinyInteger('is_verified_by_institute');
            $table->string('transaction_serialize_array');
            $table->tinyInteger('is_payment_succeed');
            $table->string('institute_name');
            $table->string('institute_id');
            $table->integer('year_of_graduation');
            $table->string('matric_number');
            $table->string('course_offered');
            $table->string('degree_obtained');
            $table->string('degree_class');
            $table->text('purpose_of_verification');
            $table->string('document');
            $table->string('academic_degree');
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
        Schema::dropIfExists('educational_verifications');
    }
}
