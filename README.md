# yii2-render-many
Yii Framework 2 extension for render many views in one action (best solution for landing pages or pages with many content blocks)

=====================================
[![Latest Stable Version](https://poser.pugx.org/igogo5yo/yii2-rendermany/v/stable)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![Total Downloads](https://poser.pugx.org/igogo5yo/yii2-rendermany/downloads)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![License](https://poser.pugx.org/igogo5yo/yii2-rendermany/license)](https://packagist.org/packages/igogo5yo/yii2-rendermany) [![Dependency Status](https://www.versioneye.com/user/projects/56655361f376cc003d000a91/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56655361f376cc003d000a91)

This is the upload file from url address extension for Yii 2. It have class UploadFromUrl for upload files from URL and it have FileFromUlrValidator for validate model attribute with file from url.

Please submit issue reports and pull requests to the main repository.
For license information check the [LICENSE](LICENSE.md)-file.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist igogo5yo/yii2-render-many
```

or add

```
"igogo5yo/yii2-render-many": ">=1.0"
```

to your `composer.json` file


Example
----

```php
...
class MyController extends Controller {
    use igogo5yo\rendermany\RenderMany;
    
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

or extend your controller
```php
...
class MyController extends igogo5yo\rendermany\Controller {
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
