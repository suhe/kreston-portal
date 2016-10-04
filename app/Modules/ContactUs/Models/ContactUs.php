<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 27/09/2016
 * Time: 11:52
 */

namespace App\Modules\ContactUs\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ContactUs extends Model {
    use Sortable;
    protected $table = 'contact_us';
    protected $fillable = ['id','name'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $sortable = ['id', 'name'];

}