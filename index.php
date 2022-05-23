<?php
    include './utils/connect_bdd.php';
    include './model/model_article.php';
    include './view/view_show_all_article.php';

    $article = new Article(null, null);
    //stocke dans un tableau la liste des articles de la BDD
    $tab = $article->showAllArticle($bdd);
    //boucle pour afficher la liste des articles (avec le nom et le prix)
    foreach($tab as $value){
        echo '
        <p>'.$value->nom_art.'</p>
        <textarea>'.$value->content_art.'</textarea>';
    }
?>