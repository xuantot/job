@forelse ($menu as $item)
<li><a href="{{ $item->link ? $item->link : 'javascript:void(0)' }}">{{$item->name}}<i @if ($item->sub->count()!=0) class="ti-angle-down" @endif></i></a>
    @if ($item->sub->count()!=0)
    <ul class="submenu">
        <li><a href="{{$item->link}}">@includeWhen($item->sub->count(),'frontend.master.menu', ['menu' => $item->sub])</a></li>
    </ul>
    @endif
</li>
@empty
<span>Khong tim thay ban ghi</span>
@endforelse

