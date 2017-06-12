<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <a class="navbar-brand" href="{{ action('HomeController@index') }}">HelloLaravel</a>
        <ul class="nav navbar-nav">
            <li>
                <a  href="{{ action('BoardController@getIndex') }}">排行榜</a>
            </li>
        </ul>
    </div>
</nav>
<div style="padding-top:70px;"></div>
