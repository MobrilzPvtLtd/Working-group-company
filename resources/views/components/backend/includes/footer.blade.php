<footer class="footer px-4 mt-4">
    <div>
        @if (setting('show_copyright'))
            <small>
                @lang('Copyright') &copy; {{ date('Y') }}
                <a class="text-muted" href="/"></a>
            </small>
        @endif
    </div>
    <div class="ms-auto"><small></small></div>
</footer>
