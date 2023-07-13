<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditReport extends Model
{
    use HasFactory;
    protected $table = "credit_report";
    protected $fillable = [
        "firstName",
        "lastName",
        "ssn",
        "dob",
        "houseNumber",
        "quadrant",
        "streetName",
        "streetType",
        "city",
        "state",
        "zip",
        "phone",
        "pdfReportId"
    ];
}
