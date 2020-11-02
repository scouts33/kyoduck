<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "50000",
        "extendedTimeOut": "50000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    @if (count($errors) > 0)
        //에러시
        @foreach ($errors->all() as $error)
            toastr["error"]("{{ $error }}");
        @endforeach
    @endif

    @if(session()->exists('success'))
        toastr["success"]("{{ session('success') }}");
    @endif
</script>
