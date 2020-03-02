<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datospersonales".
 *
 * @property int $ID
 * @property string|null $nombres
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $fecha_de_nacimiento
 * @property int|null $edad
 * @property string|null $correo
 * @property string|null $direccion
 * @property string|null $telefono
 * @property int|null $FK
 *
 * @property User $fK
 */
class Datospersonales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datospersonales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_de_nacimiento'], 'safe'],
            [['edad', 'FK'], 'integer'],
            [['direccion'], 'string'],
            [['nombres', 'apellido_paterno'], 'string', 'max' => 255],
            [['apellido_materno'], 'string', 'max' => 55],
            [['correo'], 'string', 'max' => 128],
            [['telefono'], 'string', 'max' => 10],
            [['FK'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['FK' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'nombres' => Yii::t('app', 'Nombres'),
            'apellido_paterno' => Yii::t('app', 'Apellido Paterno'),
            'apellido_materno' => Yii::t('app', 'Apellido Materno'),
            'fecha_de_nacimiento' => Yii::t('app', 'Fecha De Nacimiento'),
            'edad' => Yii::t('app', 'Edad'),
            'correo' => Yii::t('app', 'Correo'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'FK' => Yii::t('app', 'Fk'),
        ];
    }

    /**
     * Gets query for [[FK]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFK()
    {
        return $this->hasOne(User::className(), ['id' => 'FK']);
    }
}
