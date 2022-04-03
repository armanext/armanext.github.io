
                </div>

</div>

<br>
<br>

<div class="profile-footer profile_theme_three">
    <div class="ufo--container">
        <div class="profile-footer-content">
            <a href="https://www.linkedin.com/in/golchoubian/" target="_blank" rel="nofollow noopener" class="footer-url">linkedin</a>
            <a href="https://dribbble.com/golchoubian/" target="_blank" rel="nofollow noopener" class="footer-url">Dribbble</a>
            <a href="https://medium.com/@golchoubian" target="_blank" rel="nofollow noopener" class="footer-url">medium</a>
           
        </div>
    </div>
</div>
<script>
    function navigateToPage(page) {
        let currentLocation = location.href.replace(location.search, "");
        window.location = currentLocation + (currentLocation[currentLocation.length - 1] === '/' ? '' : '/') + (page ? page : '');
    }

    function navigateToProject(projectUrl) {
        var location = window.location.origin;
        location += projectUrl;
        window.location.href = location;
    }

    function ctaIntNavigation(page) {
        let currentLocation = location.href.replace(location.search, "");
        currentLocation = currentLocation.lastIndexOf("/") === currentLocation.length - 1 ?
            currentLocation.substring(0, currentLocation.lastIndexOf('/')) :
            currentLocation;

        window.location = currentLocation + page;
    }
    document.querySelector('.ufo--site-nav-toggle-btn').onclick = function() {
        this.classList.toggle('on');
        document.querySelector('.ufo--site-nav-container').classList.toggle('visible');
        document.querySelector('body').classList.toggle('nav-on');
    }
</script>


</div>


</main>

<script src="/files/csv.js"></script>

</body>

</html>