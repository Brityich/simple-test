
<!-- Sidebar Widgets Column -->
<div class="col-md-4 col-lg-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">@lang('user.search')</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="@lang('user.search_for')">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">@lang('user.categories')</h5>
        <div class="card-body">
            <div class="row">
                <ul class="gw-nav gw-nav-list">
                    @foreach($categories as $category)
                        <li class="init-arrow-down"> <a href="{{ url('category', [$category->id]) }}"> <span class="gw-menu-text">{{ $category->name }}</span> <b class="gw-arrow"></b> </a>
                            <ul class="gw-submenu">
                            @foreach($category->posts as $post)
                                <li> <a href="{{ url('post', [$post->id]) }}">{{ $post->title }}</a> </li>
                            @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>