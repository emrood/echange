<aside class="right-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav mr-lg-4 pt-2">
            <div class="list-group m-b-0">
                <span class="list-group-item bg-warning text-white font-weight-bold no-border text-center">Categories</span>
                @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <a class="list-group-item"
                           href="{{url('blogs/category/'.$category->slug)}}">{{$category->title}}</a>
                    @endforeach
                @else
                    No Categories Yet
                @endif
            </div>
            <div class="list-group mt-4">
                <span class="list-group-item  text-white font-weight-bold bg-primary no-border text-center">Tags</span>
                @if(count($tags) > 0)
                    @foreach($tags as $tag)
                        <a class="list-group-item" href="{{url('blogs/tag/'.$tag->slug)}}">{{$tag->name}}</a>
                    @endforeach
                @else
                    No Categories Yet
                @endif
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
