@forelse ($menu as $item)
<option value="{{ $item->id }}"
    {{ isset($category)&&$category->parent_id===$item->id ? 'selected' : '' }}>
    @for ($i = 0; $i < $level; $i++)
    --|
    @endfor
    {{ $item->name }}
</option>
@includeWhen($item->sub->count(), 'backend.setting.menu.option', [
    'level' => $level + 1,
    'menu' => $item->sub
])
@empty
@endforelse
