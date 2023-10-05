<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasFactory;
    protected $table = 'driver_details';
	protected $primaryKey = 'driverid';

    protected $fillable = ['driverid', 'username ', 'password', 'signupdate','email'];
	
	protected $guard = 'driveruser';


    protected $casts = [
        'signupdate' => 'date',
        'licenseexpiry' => 'date',
    ];


    /**
     * Get the photo associated with the Driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photo(): HasOne
    {
        return $this->hasOne(DriverPhoto::class, 'driverid', 'driverid');
    }
}
