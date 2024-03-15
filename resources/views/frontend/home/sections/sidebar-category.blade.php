@php
    $categories = \App\Models\Category::where('status', 1)->get();
    $subCategories = \App\Models\SubCategory::where('status', 1)->get();
@endphp
<div class="categories-dropdown-wrap style-2 font-heading mt-30">
    <div class="d-flex categori-dropdown-inner">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <i style="color: #3EB77E;" class="{{$category->icon}}"></i>
                    <a class="ml-10" href="#">
                        {{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="more_slide_open" style="display: none">
        <div class="d-flex categori-dropdown-inner">
            <ul>
                @foreach ($subCategories as $subCategory)

                <li>
                    <a href='#'> <img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-1.svg" alt="" />{{$subCategory->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
</div>
