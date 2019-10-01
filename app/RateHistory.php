<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RateHistory extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rate_histories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'currency_id', 'sale_rate', 'purchase_rate', 'date'];

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    public function currency()
    {
        return $this->BelongsTo('App\Currency');
    }
    


     public function getColumns(){
           return array_slice( $this->getFillable(), 0, config('crudgenerator.view_columns_number'));
     }
}
