<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
class ImageUpload extends Model
{
    public $photo;
    //правила валидации для загрузки картинки
    public function rules()
    {
        return[
            [['photo'], 'required'],
            [['photo'], 'file', 'extensions' => 'jpg,png']
        ];
    }
    public function uploadFile( $file, $currentImage)
    {
        $this->photo = $file;
        if($this->validate()) {
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
        }
    }
    //получаем директорию изображения
    public function getFolder()
    {
        return Yii::getAlias('@app/web') . '/uploads/';
    }
    //генерация названия изображения
    public function generateFilename()
    {
        return strtolower(md5(uniqid($this->photo->baseName)) . '.' . $this->photo->extension);
    }
    //удаление изображения, если загружено новое
    public function deleteCurrentImage($currentImage)
    {
        if ($this->fileExists($currentImage)) {
            unlink($this->getFolder() . $currentImage);
        }
    }
    public function fileExists($currentImage)
    {
        if (!empty($currentImage) && $currentImage != null) {
            return file_exists($this->getFolder() . $currentImage);
        }
    }
    public function saveImage()
    {
        $filename = $this->generateFilename();
        $this->photo->saveAs($this->getFolder() . $filename);
        return $filename;
    }
}