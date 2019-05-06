<div class="bar py-2">
    <a class="left15 font-weight-bold float-left pinkUrl" href="{{ URL::previous() }}">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>
    @if(Route::is('searchResults'))
        @if(!isset($error))
        <a href="#" role="button" class="float-right font-weight-bold filter pinkUrl d-none" title="Remove Filter" id="removeFilter"><i class="far fa-trash-alt"></i></a>
        <a class="float-right font-weight-bold filter pinkUrl" href="#" role="button" id="filterDropDown" data-toggle="modal" data-target=".filter-modal">
            Filter
            <i class="fas fa-filter"></i>
        </a>
        @endisset
    @endif
</div>
