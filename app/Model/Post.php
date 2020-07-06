<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use League\Flysystem\Filesystem;


/**
 * @property int $id 
 * @property string $type 
 * @property string $content 
 * @property int $view 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Post extends Model
{

    const TYPE_IMG = 'img';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type','content','source_url','description','title','created_at','min_img'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'view' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

    //一次性插入所有数据
    public function insertAll($data)
    {
      return \Hyperf\DbConnection\Db::table($this->getTable())->insert($data);
    }

    public function getImgAttribute($img)
    {
        return public_upload_url($img);
    }



    public function scopeFilter($query,array  $where)
    {
        if( isset($where['title']))
        $query->where('title','like','%'.$where['title'].'%');

        if( isset($where['type']))
        $query->where('type',$where['type']);
    }

}
