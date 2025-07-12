<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
            <h4 class="page-title">{{ $title ?? 'Judul Halaman' }}</h4>
            <div class="">
                <ol class="mb-0 breadcrumb">
                    @foreach ($breadcrumbs ?? [] as $label => $url)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $label }}</li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{{ $url }}">{{ $label }}</a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
