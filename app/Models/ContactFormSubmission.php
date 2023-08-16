<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    use HasFactory;

    protected $table = 'contact_form_submissions';

    protected $fillable = [
        'full_name',
        'email',
        'subject',
        'message',
    ];
}
