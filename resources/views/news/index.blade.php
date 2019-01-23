<!DOCTYPE html>
<!-- saved from url=(0027)http://demo449.adminbuy.cn/ -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>山东实创新闻</title>
    <meta name="description" content="网站描述">
    <meta name="keywords" content="关键词">
    <meta name="author" content="order by adminbuy.cn">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
    <!--[if lt IE 9]><script src="js/html5.min.js"></script><![endif]-->
    <style type="text/css">
        .header,
        .excerpt .cat,
        .now-page,
        .pagination span:hover,
        .pagination ul>li>a:focus {
            background-color: #C00;
        }

        .excerpt:hover {
            border-color: #C00;
        }

        .excerpt h2 a:hover {
            color: #C00;
        }

        #comments h4,
        #comments2 h4 {
            border-left-color: #C00;
        }

        #frmSumbit input[type="submit"] {
            background-color: #C00;
        }

        .excerpt-see-index h2 span {
            color: #C00;
        }

        .logo-m {
            background: #C00;
        }

        .excerpt {
            padding: 20px 20px 20px 255px;
        }

        @media (max-width: 640px) {
            .excerpt {
                padding: 10px 10px 10px 180px;
            }
        }

        @media (max-width: 480px) {
            .excerpt {
                padding: 10px 10px 0px 120px;
            }
        }

        @media (max-width: 800px) {
            .header {
                background-color: transparent;
                padding: 0;
            }
        }
    </style>
</head>

<body>
    @include('gong.head')

    <section class="container">
        <div class="content-wrap">
            <div class="content">

                <!---->
                <article class="excerpt-see excerpt-see-index pc">
                    <?php 
                        $zz_article = \DB::Table('article8s')->orderBy('id','desc')->limit(1)->first();
                    ?>
                    <h2><span class="red">【站长推荐】</span> <a href="/article/{{$zz_article->id}}" title="{{$zz_article->title}}">{{$zz_article->title}}</a></h2>
                    <p class="note"> </p>

                    <div class="relatescom">
                        <?php 
                            $article5 = \DB::Table('article8s')->orderBy('id','desc')->skip(1)->limit(6)->get();
                        ?>
                        <ul>
                            @foreach($article5 as $v)
                            <li><a href="/article/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </article>
                <?php 
                    $article = \DB::Table('article8s')->orderBy('id','desc')->skip(7)->limit(10)->get();
                ?>
                @foreach($article as $v)
                <?php
                    $gfenlei = \DB::Table('fenlei8s')->where('id',$v->fenlei_id)->first();
                ?>
                <article class="excerpt"> <a class="focus" href="/article/{{$v->id}}"><img src="{{$v->news_pic}}" alt="{{$v->title}}"></a>
                    <header><a href="/fenlei/{{$gfenlei->id}}" class="cat" title="{{$gfenlei->fenlei_name}}">{{$gfenlei->fenlei_name}}</a>
                        <h2><a href="/article/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a></h2>
                    </header>
                    <p class="meta">
                        <time>{{$v->create_time}}</time>
                        <span class="pv">{{$v->zuozhe}}</span> </p>
                    <p class="note pc"> <a href="/article/{{$v->id}}" title="{{$v->title}}">{{mb_substr(preg_replace('/<.*?>/','',$v->content),0,80)}}</a></p>
                </article>
                @endforeach
            </div>
        </div>
        <aside class="sidebar pc">
            <dl class="function" id="divPrevious">
                <dt class="function_t">点击排行</dt>
                <dd class="function_c">
                    <?php 
                        $hot_article = \DB::Table('article8s')->orderBy('dianji','desc')->limit(10)->get();
                    ?>
                    <ul>
                        @foreach($hot_article as $v)
                        <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                        @endforeach
                    </ul>
                </dd>
            </dl>
            @include('gong.footer')
        </aside>
    </section>


</body>

</html>