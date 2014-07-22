@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => 'Notice', 'body' => Session::get('flash_notification.message')])
    @else
        <div class="alert alert-{{ Session::get('flash_notification.level') }}">
            {{ Session::get('flash_notification.message') }}

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="fa fa-times-circle"></span></button>
        </div>
    @endif
@endif