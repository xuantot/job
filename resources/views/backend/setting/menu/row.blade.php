@forelse ($menu as $item)
<div class="item-menu remove-menu">
    <span>
        @for ($i = 0; $i < $level; $i++)
        --|
        @endfor
        {{ $item->name }}
    </span>
    <div class="category-fix">
    <a class="btn-category btn-primary" href="/admin/setting/menu/edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
        <a onclick='return del_company("{{ $item->name }}")' data-menu-id="{{$item->id}}" class="btn-category btn-danger delete" ><i class="fas fa-times"></i></a>
    </div>
</div>
@includeWhen($item->sub->count(),'backend.setting.menu.row', ['menu' => $item->sub, 'level' => $level + 1])
@empty
<span>Khong tim thay ban ghi</span>
@endforelse
