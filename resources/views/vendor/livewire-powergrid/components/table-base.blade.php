@props([
    'theme' => null
])
<div class="table-responsive">
    <table class="{{ $theme->tableClass }}"
           style="width: 100%!important;{{$theme->tableStyle}}">
        <thead class="{{$theme->theadClass}}"
               style="{{$theme->theadStyle}}">
                {{ $header }}
        </thead>
        <tbody class="{{$theme->tbodyClass}}"
               style="{{$theme->tbodyStyle}}">
                {{ $rows }}
        </tbody>
    </table>
</div>
