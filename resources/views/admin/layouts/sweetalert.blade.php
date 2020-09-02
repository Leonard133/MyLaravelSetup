@if(session('success'))
<script>
    $(function () {
        Swal.fire({
            title: "Successed!",
            text: "{{ session('success') }}",
            icon: "success",
            showConfirmButton: false,
            timer: 3000
            });
     })
</script>
@endif

@if(session('error'))
<script>
    $(function () {
        Swal.fire({
            title: "Failed!",
            text: "{{ session('error') }}",
            icon: "error",
            showConfirmButton: false,
            timer: 3000
            });
     })
</script>
@endif

@if(session('error2'))
<script>
    $(function () {
            swal({
                title: "{{ __('message.failed')}}",
                html: '{{ session('error2') }}',
                icon: "error",
                type: 'error',
                buttons: true,
            });
        })
</script>
@endif

@if(session('warning'))
<script>
    $(function () {
            swal({
                title: "{{ __('message.failed')}}",
                text: '{{ session('warning') }}',
                icon: "warning",
                type: 'warning',
                showConfirmButton: false,
                timer: 3000
            });
        })
</script>
@endif

@if(session('info'))
<script>
    $(function () {
            swal({
                title: "{{ __('message.failed')}}",
                text: '{{ session('info') }}',
                icon: "info",
                type: 'info',
                showConfirmButton: false,
                timer: 3000
            });
        })
</script>
@endif
