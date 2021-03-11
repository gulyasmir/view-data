<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_product".
 *
 * @property int $id
 * @property string $code
 * @property int $weight
 * @property int $quantity_msk
 * @property int $quantity_piter
 * @property int $quantity_camara
 * @property int $quantity_caratov
 * @property int $quantity_kazan
 * @property int $quantity_novosib
 * @property int $quantity_chelyabinsk
 * @property int $quantity_dl_chelyabinsk
 * @property string $price_msk
 * @property string $price_piter
 * @property string $price_camara
 * @property string $price_caratov
 * @property string $price_kazan
 * @property string $price_novosib
 * @property string $price_chelyabinsk
 * @property string $price_dl_chelyabinsk
 * @property string $usage_product
 * @property string $name
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'weight', 'quantity_msk', 'quantity_piter', 'quantity_camara', 'quantity_caratov', 'quantity_kazan', 'quantity_novosib', 'quantity_chelyabinsk', 'quantity_dl_chelyabinsk', 'price_msk', 'price_piter', 'price_camara', 'price_caratov', 'price_kazan', 'price_novosib', 'price_chelyabinsk', 'price_dl_chelyabinsk', 'usage_product', 'name'], 'required'],
            [['weight', 'quantity_msk', 'quantity_piter', 'quantity_camara', 'quantity_caratov', 'quantity_kazan', 'quantity_novosib', 'quantity_chelyabinsk', 'quantity_dl_chelyabinsk'], 'integer'],
            [['usage_product'], 'string'],
            [['code', 'price_msk', 'price_piter', 'price_camara', 'price_caratov', 'price_kazan', 'price_novosib', 'price_chelyabinsk', 'price_dl_chelyabinsk', 'name'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'weight' => 'Weight',
            'quantity_msk' => 'Quantity Msk',
            'quantity_piter' => 'Quantity Piter',
            'quantity_camara' => 'Quantity Camara',
            'quantity_caratov' => 'Quantity Caratov',
            'quantity_kazan' => 'Quantity Kazan',
            'quantity_novosib' => 'Quantity Novosib',
            'quantity_chelyabinsk' => 'Quantity Chelyabinsk',
            'quantity_dl_chelyabinsk' => 'Quantity Dl Chelyabinsk',
            'price_msk' => 'Price Msk',
            'price_piter' => 'Price Piter',
            'price_camara' => 'Price Camara',
            'price_caratov' => 'Price Caratov',
            'price_kazan' => 'Price Kazan',
            'price_novosib' => 'Price Novosib',
            'price_chelyabinsk' => 'Price Chelyabinsk',
            'price_dl_chelyabinsk' => 'Price Dl Chelyabinsk',
            'usage_product' => 'Usage Product',
            'name' => 'Name',
        ];
    }
}
