    <footer class="footer-section">
            <nav class="footer">
                    <a href="{{ url('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}"><svg class="footer-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" /></svg></a>

                    <a href="{{ url('/bookmarks') }}" class="{{ (request()->is('bookmarks')) ? 'active' : '' }}"><svg class="footer-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M15 7v12.97l-4.21-1.81-.79-.34-.79.34L5 19.97V7h10m4-6H8.99C7.89 1 7 1.9 7 3h10c1.1 0 2 .9 2 2v13l2 1V3c0-1.1-.9-2-2-2zm-4 4H5c-1.1 0-2 .9-2 2v16l7-3 7 3V7c0-1.1-.9-2-2-2z" clip-rule="evenodd" fill-rule="evenodd" /></svg></a>

                    <a href="{{ url('/search') }}" class="{{ (request()->is('search*')) ? 'active' : '' }}"><svg class="footer-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" clip-rule="evenodd" fill-rule="evenodd" /></svg></a>
            </nav>
    </footer>