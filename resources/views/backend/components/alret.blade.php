<div class="alert bg-{{ $type }} close_errors" role="alert">
    <svg class="glyph stroked {{ $stroke }}">
        <use xlink:href="#stroked-{{ $stroke }}"></use>
    </svg>
    {{ $slot }}
    <a href="javascript:void(0)" class="pull-right" id="_errors"><span class="glyphicon glyphicon-remove"></span></a>
</div>
