<?php

namespace App\Interfaces;

interface ArticleRepositoryInterface 
{
    public function getAll();
    public function getById($Id);
    public function delete($Id);
    public function create(array $Details);
    public function update($Id, array $newDetails);
    public function getFeaturedPost();
    public function getLatestPost();
    public function detailsPost($Id);
    public function relatedPost($Id);
    public function premiumPost();
    public function popularPost();
    public function searchPost($search);
    public function categoryArticle($category_id);
    // public function getFulfilled();
}