<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'payments';

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
        'order_id',
        'amount',
        'payment_method',
        'status',
        'transaction_id',
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
        'amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke model Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}