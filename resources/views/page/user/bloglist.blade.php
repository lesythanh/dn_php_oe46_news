@extends('index')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-section-name">
                    <h2>Latest blogs / News</h2>
                </div>
                <div class="col-sm-11 col-xs-11 pull-right">
                    <form class="form-search">
                        <fieldset>
                            <input type="search" placeholder="Search Here" class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </fieldset>
                    </form>
                    @foreach ($posts as $post)
                    <div class="tg-blogpost tg-blogpostlist">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <article class="tg-post">
                                    <figure class="tg-postimg">
                                        <a href="#">
                                            <img src="images/blog/img-14.jpg" alt="image description">
                                        </a>
                                        <figcaption>
                                            <ul class="tg-postmetadata">
                                                <li><a href="#">by admin</a></li>
                                                <li><a href="#">04 comments</a></li>
                                                <li><a href="#">lifestyle</a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-posttitle"><h3><a href="#">{{ $post->title }}</a></h3></div>
                                    <div class="tg-description">
                                        <p>{{$post->except}}</p>
                                    </div>
                                    <a class="tg-btn" href="{{route('blogdetail.show',$post->slug)}}">Read more</a>
                                </article>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <ul class="tg-pagination">
                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
