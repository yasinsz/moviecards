    <footer class="footer-section">
        <nav class="footer">
            <a class="footer-icon" href="{{ url('/') }}"><img class="footer-item" src="{{ asset('assets/img/home.svg') }}"><span class="subtitle">Home</span></a>
            <a class="footer-icon" href="{{ url('/bookmarks') }}"><img class="footer-item ml-3" src="{{ asset('assets/img/bookmarks.svg') }}"><span class="subtitle">Bookmarks</span></a>
            <a class="footer-icon" href="{{ url('/search') }}"><img class="footer-item" src="{{ asset('assets/img/search.svg') }}"><span class="subtitle">Search</span></a>
        </nav>
    </footer>

    <?php /*
    <a href="{{ url('/create') }}"><img class="footer-item" src="{{ asset('assets/img/create.svg') }}"></a>
    */ ?>