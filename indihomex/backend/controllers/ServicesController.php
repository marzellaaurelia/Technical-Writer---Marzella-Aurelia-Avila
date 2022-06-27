<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class ServicesController extends Controller
{
    public function actionProduk(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $all = \backend\models\Produk::find()->all();
        if($all){
            $data=[];
            foreach ($all as $key =>  $value) {
                $data[$key]['id'] = $value->id;
                $data[$key]['nama_produk'] = $value->nama_produk;
                $data[$key]['kecepatan'] = $value->kecepatan;
                $data[$key]['deskripsi'] = $value->deskripsi;
                $data[$key]['logo'] = 'https://indihome.co.id/images/logo_indiHome.png'.$value->logo;
            }
            return[
                'status'=>'success',
                'data'=>$data,
            ];
        }else{
            return[
                'status'=>'error',
                'message'=>'Data tidak ditemukan'
            ];
        }
    }
}
?>