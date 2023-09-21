<?php

namespace App\Models;

use App\Filters\CustomerFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = CustomerFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'username',
		'age',
		'company_id',
		'status',
    ];

	public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Company::class);
	}

}
