<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $ID
 * @property string|null $Nombre
 * @property string|null $Apellidos
 * @property string|null $Edad
 * @property string|null $Correo
 * @property int|null $Telefono
 * @property string|null $Direccion
 * @property string|null $Categoría
 * @property string|null $Modelo
 * @property string|null $Modo_De_Compra
 * @property string|null $Apertura
 * @property string|null $Cierre
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Telefono'], 'integer'],
            [['Direccion'], 'string'],
            [['Apertura', 'Cierre'], 'safe'],
            [['Nombre'], 'string', 'max' => 25],
            [['Apellidos', 'Categoría', 'Modelo'], 'string', 'max' => 40],
            [['Edad'], 'string', 'max' => 10],
            [['Correo'], 'string', 'max' => 30],
            [['Modo_De_Compra'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nombre' => 'Nombre',
            'Apellidos' => 'Apellidos',
            'Edad' => 'Edad',
            'Correo' => 'Correo',
            'Telefono' => 'Telefono',
            'Direccion' => 'Direccion',
            'Categoría' => 'Categoría',
            'Modelo' => 'Modelo',
            'Modo_De_Compra' => 'Modo De Compra',
            'Apertura' => 'Apertura',
            'Cierre' => 'Cierre',
        ];
    }
}
