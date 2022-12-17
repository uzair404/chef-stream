
</div>
        
<script src="{{url('/frontend/js/chef-dashboard/all.js')}}"></script>
<script>
    top_image = document.getElementById("top-menu-image");
    top_image.addEventListener('mouseover',openmenu);
    top_image.addEventListener('mouseout',closemenu);

    ddmenu = document.getElementById("dd-menu");
    ddmenu.addEventListener('mouseover',openmenu);
    ddmenu.addEventListener('mouseout',closemenu);


    function openmenu() {
        document.getElementById("dd-menu").style.display = "block"
    }
    function closemenu() {
        document.getElementById("dd-menu").style.display = "none"
    }

</script>
@yield('scripts')
</body>
</html>