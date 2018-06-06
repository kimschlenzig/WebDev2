<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $vorname
 * @property string $nachname
 * @property string $geburtsdatum
 * @property int $telefonnummer
 * @property string $ort
 * @property string $strasse
 * @property int $hausnummer
 * @property string $land
 * @property int $postleitzahl
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGeburtsdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereHausnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNachname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePostleitzahl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStrasse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTelefonnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereVorname($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ticket(){
        return $this -> hasMany('ticket');
    }
    public function location(){
        return $this -> belongsTo('location');
    }
    public function rechnung(){
        return $this -> hasMany('rechnung');
    }
}
