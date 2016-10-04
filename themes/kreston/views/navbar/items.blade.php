@foreach($items as $item)
    <li @if($item->hasChildren()) class="parent megamenu promo" @else class="item-bg item-danger"  @endif>
        <a href="{!! $item->url() !!}">
            @if(!$item->children()) <i class="fa fa-caret-right"></i> @endif
                {!! $item->title !!}
        </a>
        @if($item->hasChildren())
            <ul class="sub">
                <li class="sub-wrapper">
                    <div class="sub-list">
                        <div class="box">
                            <ul>
                                @include('kreston::navbar.items', array('items' => $item->children()))
                            </ul>
                        </div>
                    </div>
                    <div class="promo-block bg">
                        <img class="replace-2x" src="{!! Theme::asset('img/logo2.png') !!}" alt="{!! Setting::get_key('company_name') !!}" />
                    </div>
                </li>
            </ul>
        @endif
    </li>
@endforeach