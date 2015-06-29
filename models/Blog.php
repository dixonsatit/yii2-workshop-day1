<?php
namespace app\models;
use Yii;
use yii\base\Model;

class Blog extends Model
{
    public $title;
    public $detail;
    public $email;
    public $url;

    public  function rules()
    {
      return [
        [['title','detail'],'required'],
        [['email'],'email'],
        [['url'],'url'],
        [['title','detail'],'string','max'=>255]
      ];
    }
}
