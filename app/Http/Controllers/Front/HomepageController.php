<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\ArticleResource;
use App\Interfaces\ArticleRepositoryInterface;


class HomepageController extends Controller
{

    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function homepage(){
        $meta['title'] = 'Home Page';
        $meta['description'] = 'Home Page Description';
        $meta['tags'] = ['tag1','tag2','tag3'];
        $meta['created_at'] = date('d-m-Y');
        $meta['images'] = ['https://via.placeholder.com/200x100','https://via.placeholder.com/200x100'];
        $featured_post = $this->articleRepository->getFeaturedPost();
        $premium_post = $this->articleRepository->premiumPost();
        $popular_post = $this->articleRepository->popularPost();
        $latest_post = $this->articleRepository->getLatestPost();
        $paginate_post = $this->articleRepository->getPaginate(3);

    //   dd( $paginate_post );
        return view('theme.default.pages.home')->with(['meta'=>$meta,'featured_post'=>$featured_post,'premium_post'=>$premium_post,'popular_post'=>$popular_post,'latest_post'=>$latest_post,'paginate_post'=>$paginate_post] );
    }
}
