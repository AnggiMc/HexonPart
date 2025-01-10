<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Kunci utama tabel.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indikasi apakah kunci utama adalah auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Tipe data kunci utama.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * Kolom yang dapat diisi (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Kolom yang harus disembunyikan saat serialisasi.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Kolom yang harus di-cast ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke model User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}