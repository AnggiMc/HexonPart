<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'orders';

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
        'user_id',
        'total_amount',
        'order_status',
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
        'total_amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke model User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}