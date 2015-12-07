# yii2-rendermany
RenderManyTrait for Yii Framework 2, allows render many views

=====================================
[![Latest Stable Version](https://poser.pugx.org/igogo5yo/yii2-rendermany/v/stable)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![Total Downloads](https://poser.pugx.org/igogo5yo/yii2-rendermany/downloads)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![License](https://poser.pugx.org/igogo5yo/yii2-rendermany/license)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![Dependency Status](https://www.versioneye.com/user/projects/55686ea96365320026021300/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55686ea96365320026021300)

This is the upload file from url address extension for Yii 2. It have class UploadFromUrl for upload files from URL and it have FileFromUlrValidator for validate model attribute with file from url.

Please submit issue reports and pull requests to the main repository.
For license information check the [LICENSE](LICENSE.md)-file.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist igogo5yo/yii2-rendermany
```

or add

```
"igogo5yo/yii2-rendermany": ">=1.0"
```

to your `composer.json` file


Example
----

```php
...
class MyController extends Controller {
    use igogo5yo\rendermany\RenderManyTrait;
    
    public function actionIndex()
    {
        ...
        
        return $this->renderMany([
            'sliderSection' => [
                'slides' => ['img1.jpg', 'img3.jpg', 'img3.jpg', ...]
            ],
            'contentSection' => [
                'title' => 'My post',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry...',
                ...
            ],
            'partnersSection' => [
                'partners' => [
                    ['link' => '#', 'name' => 'partner 1'],
                    ['link' => '#', 'name' => 'partner 2'],
                    ['link' => '#', 'name' => 'partner 3'],
                    ...
                ]
            ],
            ...
        ]);
    }
    
    ...
}
...
```
