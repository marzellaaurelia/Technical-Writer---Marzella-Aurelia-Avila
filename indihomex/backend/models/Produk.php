<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string|null $nama_produk
 * @property string|null $kecepatan
 * @property string|null $deskripsi
 * @property string|null $logo
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'kecepatan', 'deskripsi', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_produk' => 'Nama Produk',
            'kecepatan' => 'Kecepatan',
            'deskripsi' => 'Deskripsi',
            'logo' => 'Logo',
        ];
    }
}
