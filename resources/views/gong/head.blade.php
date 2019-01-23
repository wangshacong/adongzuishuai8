<header class="header">
    <div class="container">
        <h2 class="logo logo-m" style="margin-left:240px;"><a href="/" title="山东实创">山东实创</a></h2>
        <ul class="nav nav-m" style="margin-right:300px;">
            <li id="nvabar-item-index"><a href="/">首页</a></li>
            @foreach($fenlei as $v)
            <li><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a></li>
            @endforeach


        </ul>
    </div>
</header>