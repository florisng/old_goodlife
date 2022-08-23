<div class="header">
    <div class="header_in">
        <div>
            <img src="./img/logo.png" class="logo" alt="" />
        </div>
        <div class="menu">
            <a href="#" class="menu_link_one">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                    <a href="#">Health</a>
                    <a href="#">Beauty</a>
                    <a href="#">Personal Care</a>
                    <a href="#">Baby Care</a>
                </div>
            </div>
            <a href="#" class="menu_link_one">Promotions</a>
            <a href="#" class="menu_link_two">Pharmacy</a>
        </div>
    </div>
</div>
<div class="phone_header">
        <div>
            <div class="logo_div">
                <img src="./img/logo.png" class="logo" alt="" />
            </div>
            <div class="phone_menu_icon_div">
                <img src="./img/phone_open_menu_icon.png" class="open_icon" onclick="open_small_menu()" alt="">
                <img src="./img/phone_close_menu_icon.png" class="close_icon" onclick="close_small_menu()" alt="">
            </div>
        </div>
        <div class="phone_menu">
            <a href="#">Home</a>
            <a onclick="open_dropdown_menu()">Products</a>
            <div class="dropdown_content">
                <a href="#">Health</a>
                <a href="#">Beauty</a>
                <a href="#">Personal Care</a>
                <a href="#">Baby Care</a>
            </div>
            <a href="#" class="menu_link_one">Promotions</a>
            <a href="#" class="menu_link_two">Pharmacy</a>
        </div>
</div>
<script>
    function open_dropdown_menu() {
        document.querySelector(".dropdown_content").style.display = "block";
    }
    function open_small_menu() {
        document.querySelector(".phone_menu").style.display = "block";
        document.querySelector(".open_icon").style.display = "none";
        document.querySelector(".close_icon").style.display = "block";
    }
    function close_small_menu() {
        document.querySelector(".phone_menu").style.display = "none";
        document.querySelector(".close_icon").style.display = "none";
        document.querySelector(".open_icon").style.display = "block";
    }
</script>