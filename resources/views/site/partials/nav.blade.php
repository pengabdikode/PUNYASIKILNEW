<style type="text/css">
    @media screen and (min-width: 768px){
      .dropdown:hover .dropdown-menu, .btn-group:hover .dropdown-menu{
            display: block;
        }
        .dropdown-menu{
            margin-top: 0;
        }
        .dropdown-toggle{
            margin-bottom: 2px;
        }
        .navbar .dropdown-toggle, .nav-tabs .dropdown-toggle{
            margin-bottom: 0;
        }
    }
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".dropdown, .btn-group").hover(function(){
            var dropdownMenu = $(this).children(".dropdown-menu");
            if(dropdownMenu.is(":visible")){
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });     
    </script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                @foreach($categories as $cat)
                    @foreach($cat->items as $category)
                        @if ($category->items->count() > 0)
                            <li class="nav-item dropdown">
                                <a class="nav-link stroke" href="{{ route('category.show', $category->slug) }}" id="{{ $category->slug }}"
                                    aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="{{ $category->slug }}">
                                    @foreach($category->items as $item)
                                        <a class="dropdown-item" href="{{ route('category.show', $item->slug) }}">{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item stroke">
                                <a class="nav-link stroke" href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
                            <li class="nav-item stroke">
                                <a class="nav-link stroke" href="/katalog">About</a>
                            </li>
            </ul>
        </div>
    </div>
</nav>

