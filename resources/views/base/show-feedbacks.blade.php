<script>
    @if(session('success'))
        showSuccessToast("{{  session('success') }}");
    @endif
</script>
