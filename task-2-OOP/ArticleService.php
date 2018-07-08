<?php

/**
 * Class ArticleService
 *
 * Обеспечивает логику авторов и статей
 */
class ArticleService
{
    /**
     * Получить все статьи одного автора
     *
     * @param User $author
     * @return Article[]
     */
    public function getArticlesByAuthor(User $author)
    {}

    /**
     * Добавить новую статью автора
     *
     * @param Article $article
     * @param User $author
     */
    public function addArticleWithAuthor(Article $article, User $author) : void
    {}

    /**
     * Получить автора статьи
     *
     * @param Article $article
     * @return User
     */
    public function getAuthorByArticle(Article $article) : User
    {}

    /**
     * Сменить автора статьи на нового
     *
     * @param Article $article
     * @param User $newAuthor
     * @return User
     */
    public function replaceAuthorOfArticle(Article $article, User $newAuthor) : User
    {}
}
