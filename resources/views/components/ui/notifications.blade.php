@if (session('status'))
<div class="notification is-success">
    <button class="delete"></button>
    <p>{{ session('status') }}</p>
</div>
@endif
@if(session('info'))
    <div class="notification is-info">
        <button class="delete"></button>
        <p>{{ session('info') }}</p>
    </div>
@endif
@if(session('success'))
    <div class="notification is-success">
        <button class="delete"></button>
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session('warning'))
    <div class="notification is-warning">
        <button class="delete"></button>
        <p>{{ session('warning') }}</p>
    </div>
@endif
@if(session('danger'))
    <div class="notification is-danger">
        <button class="delete"></button>
        <p>{{ session('danger') }}</p>
    </div>
@endif


@push('scripts')
    <script type="application/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
@endpush
