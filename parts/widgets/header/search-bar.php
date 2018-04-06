<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> (+91) 989 520 4814
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> contact@<span class="le-color">gotirur.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="Search for item" id="search_key"/>

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="index.php?page=category-grid">all categories</a>

                    <ul class="dropdown-menu" role="menu" >
                        <!--                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">laptops</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">tv & audio</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">gadgets</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?page=category-grid">cameras</a></li>-->
                        <?php
                        include_once 'get_cat.php';
                        ?>

                    </ul>
                </li>
            </ul>

            <a class="search-button" id="search" onclick="showAlert()"></a>    
            <script>
                function showAlert() {
//                    alert("onclick Event detected! "+document.getElementById("search_key").value);
                    if (document.getElementById("search_key").value.length > 0) {
                        window.location = "index.php?page=home-2&search_key=" + document.getElementById("search_key").value;
                    }
                }
            </script>
        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->