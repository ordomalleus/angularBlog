<?php

class newsController
{

    public function actionShowAll()
    {

        $newsViews  = News::getAll();
        //$newsViews  = News::getJson($newsViews);
        $view       = new Views();
        //$view->news = $newsViews;
        //var_dump($newsViews);die;
        //$view->display( 'news/newsAll.php' );
        $view->getJson($newsViews);
    }

    public function actionShowOne()
    {

        $id        = $_GET['id'];
        $newsViews = News::getOne( $id );
        $view      = new Views();
        $view->new = $newsViews;
        $view->display( 'news/newsOne.php' );
    }

    public function actionDel()
    {

        $id        = $_GET['id'];
        $newsViews = News::delOne( $id );
        $view      = new Views();
        $view->redirect( 'index.php?ctrl=news&act=ShowAll' );
    }
    
    public function actionAddForm()
    {
        $view = new Views();
        $view->display( 'news/newsAdd.php' );
    }
    
    public function actionAdd()
    {
        $title = $_POST['newName'];
        $text  = $_POST['newText'];
        News::addOne( $title, $text );
        $view = new Views();
        $view->redirect( 'index.php?ctrl=news&act=ShowAll' );
    }
    
    public function actionUpdateForm()
    {

        $id        = $_GET['id'];
        $newsViews = News::getOne( $id );
        $view      = new Views();
        $view->new = $newsViews;
        $view->display( 'news/newsUpdate.php' );
    }
    
    public function actionUpdate()
    {
        $id    = $_POST['id'];
        $title = $_POST['newName'];
        $text  = $_POST['newText'];
        $t     = News::updateOne( $id, $title, $text );
        $view  = new Views();
        $view->redirect( 'index.php?ctrl=news&act=ShowOne&id='.$id );
    }
}