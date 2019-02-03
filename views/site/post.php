<?php
/**
 * @var $this \yii\web\View
 * @var $posts \app\models\Post[]
 * 
 * Смотри, у тебя здесь есть масив объектов типа Post.
 * У елементов есть 3 свойства, которые тебе нужы.(title, content, image), сами они с БД.
 * Так же, я добавид цикл, внуткри которого можно ставить любой html код.
 * Здесь полностью работает бутстрап. Все его стили
 * свойство image прямо указивает на картинку, т.е. ничего делать не надо
 * Пример кода я тебе оставил
 */
$this->title = "All posts";
?>

<div class="row">
    <?php foreach($posts as $post){ ?>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><?= $post->title ?></div>
                <div class="panel-body">
                    <img src="<?= $post->image ?>" style="height: 100px; width: 100px">
                    <p><?= $post->content ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>