<style><?php include 'side_menu/side_menu.css'; ?></style>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <strong>Pseudo<strong>
            </li>
            <li>
                <a href="index.php">Aventure</a>
            </li>
            <li>
                <a href="quete.php">Quête</a>
            </li>
            <!--<li>
                <a href="#">Overview</a>
            </li>-->
            <li>
                <a href="#">Options</a>
            </li>
            <li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="fa fa-street-view fa-lg" aria-hidden="true"></i></i></a>
    </div>
</div>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
