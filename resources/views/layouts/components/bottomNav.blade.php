<nav class="bottom_nav d-flex">
    <div class="bottom-header-img">
        <a class="navbar-brand" href="#">
            <img src="{{isset($imgSrc) ? $imgSrc : ""}}" class="img-fluid" alt="" width="70">
        </a>
    </div>

    <div class="bottom-header-btn">
        <a href="#"> {!! isset($text) ? $text : '' !!}</a>
    </div>

</nav>
