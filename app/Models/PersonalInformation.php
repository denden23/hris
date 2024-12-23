<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $table = 'personal_information'; // Explicitly specify the table name

    protected $primaryKey = 'personal_information_id'; // Set the primary key

    protected $fillable = [
        'surname',
        'first_name',
        'middle_name',
        'name_extension',
        'date_of_birth',
        'telephone_no',
        'mobile_no',
        'email_address',
        'place_of_birth',
        'sex',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id',
        'pagibig_id',
        'philhealth_no',
        'sss_no',
        'tin_no',
        'agency_employee_no',
        'citizenship',
        'citizenship_type',
        'citizenship_country',
        'residential_lot_no',
        'residential_street',
        'residential_subdivision',
        'residential_barangay',
        'residential_city',
        'residential_province',
        'residential_zip_code',
        'permanent_lot_no',
        'permanent_street',
        'permanent_subdivision',
        'permanent_barangay',
        'permanent_city',
        'permanent_province',
        'permanent_zip_code',
        'spouse_surname',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_extension_name',
        'spouse_occupation',
        'spouse_employer',
        'spouse_business_address',
        'spouse_telephone_no',
        'father_surname',
        'father_first_name',
        'father_middle_name',
        'father_extension_name',
        'mother_surname',
        'mother_first_name',
        'mother_middle_name',
    ];
}
