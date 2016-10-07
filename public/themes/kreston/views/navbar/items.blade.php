@foreach($items as $item)
    <li @if($item->hasChildren()) class="parent item-primary item-bg" @else class="item-bg item-danger"  @endif>
        <a href="{!! $item->url() !!}">
            @if(!$item->children()) <i class="fa fa-caret-right"></i> @endif
                {!! $item->title !!}
        </a>
        @if($item->hasChildren())
            <ul class="sub">           
                @include('kreston::navbar.items', array('items' => $item->children()))
            </ul>
        @endif
    </li>
@endforeach