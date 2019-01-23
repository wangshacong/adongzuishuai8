<!DOCTYPE html>
<!-- saved from url=(0043)http://demo449.adminbuy.cn/a/meinv/190.html -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>{{$content['title']}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
    <style>
        a.keywordlink {
            color: #0000ff !important;
        }
    </style>
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

<body class="single">
    @include('gong.head')

    <section class="container">
        <div class="content-wrap" style="padding-top: 15px;">
            <div class="content">
                <header class="article-header">
                    <h1 class="article-title">{{$content['title']}}</h1>
                </header>
                <article class="article-content">
                   <?php echo $content['content']; ?>
                    <br>
                </article>
                <div class="cygswtags title" id="comments2">
                    <ul>

                    </ul>
                </div>
                <div class="ads ads-post ads-post-02"> </div>
                <div class="relates">
                    <div class="title" id="comments">
                        <h4>相关阅读</h4>
                    </div>
                    <?php 
                        $xg_article = \DB::Table('article8s')->orderBy('dianji','desc')->where('fenlei_id',$content['fenlei_id'])->limit(5)->get();
                    ?>
                    <ul>
                        @foreach($xg_article as $v)
                        <li class="tuijian554"><a href="/article/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a> <span class="sijian554"></span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <aside class="sidebar pc">
            <dl class="function" id="divPrevious">
                <dt class="function_t">最近发表</dt>
                <dd class="function_c">
                    <?php 
                        $tuijian_article = \DB::Table('article8s')->orderBy('id','desc')->where('fenlei_id',$content['fenlei_id'])->limit(10)->get();
                    ?>
                    <ul>
                        @foreach($tuijian_article as $v)
                        <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                        @endforeach
                    </ul>
                </dd>
            </dl>
        </aside>
        @include('gong.footer')
    </section>


</body>

</html>