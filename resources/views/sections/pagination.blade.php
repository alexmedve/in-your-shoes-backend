@if ($paginator->lastPage() > 1)
<div class="categ-pagination">
    <div class="pagi-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ ($paginator->currentPage() == 1) ? 'javascript:void(0);' : $paginator->url(1) }}"><i class="fas fa-chevron-left"></i> Prev</a>
    </div>
    <div class="pagi-itemnumb">
        <ul>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="">
                    <a class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </div>
    <div class="pagi-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'javascript:void(0);' : $paginator->url($paginator->currentPage()+1) }}">Next <i class="fas fa-chevron-right"></i></a>
    </div>
</div>
@endif

<style>
  .disabled > a {
    background: #ededed !important;
    color: grey !important;
  }
  .disabled > a > i {
    color: grey !important;
  }
</style>