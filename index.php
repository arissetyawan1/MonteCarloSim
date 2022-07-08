 <?php require 'templates/header.php'; ?>
  <?php require 'templates/side_bar.php'; ?>

    <div class="container">
      <div class="jumbotron">
        <h1>
          Bootstrap Navbar Sidebar
          <br />
          <small>Fixed to Left or Right</small>
        </h1>
        <p>
          <strong>
            Use classic Bootstrap navbar as sidebar, on left or right side.
          </strong>
        </p>
        <p>
          <a
            class="github-button"
            href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar"
            data-icon="octicon-star"
            data-style="mega"
            data-count-href="/mladenplavsic/bootstrap-navbar-sidebar/stargazers"
            data-count-api="/repos/mladenplavsic/bootstrap-navbar-sidebar#stargazers_count"
            data-count-aria-label="# stargazers on GitHub"
            aria-label="Star mladenplavsic/bootstrap-navbar-sidebar on GitHub"
            >Star</a
          >
          <a
            class="github-button"
            href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar/fork"
            data-icon="octicon-repo-forked"
            data-style="mega"
            data-count-href="/mladenplavsic/bootstrap-navbar-sidebar/network"
            aria-label="Fork mladenplavsic/bootstrap-navbar-sidebar on GitHub"
            >Fork</a
          >
          <a
            class="github-button"
            href="https://github.com/mladenplavsic"
            data-style="mega"
            aria-label="Follow @mladenplavsic on GitHub"
            >Follow @mladenplavsic</a
          >
        </p>
        <p>
          Same when using <code>.navbar-fixed-top</code> - add class
          <code>.navbar-fixed-left</code> or
          <code>.navbar-fixed-right</code> where needed.
        </p>
        <p>
          Click buttons below, and appropriate class will be added to example
          navbar.
        </p>
        <p>
          <span class="btn-group">
            <a data-class="navbar-fixed-left" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-left"></i>
              Fixed Left
            </a>
            <a data-class="navbar-fixed-top" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-up"></i>
              Fixed Top
              <small>(original)</small>
            </a>
            <a data-class="navbar-fixed-right" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-right"></i>
              Fixed Right
            </a>
          </span>
        </p>
      </div>
      <script>
          $("#datepicker").datepicker({
              format: " yyyy", // Notice the Extra space at the beginning
              viewMode: "years", 
              minViewMode: "years"
          });
          console.log($("#datepicker").val());
          $("#datepicker").on("change",function(){
            var selected = $(this).val();
            console.log(selected);
            $(".year").val(selected);
          });
      </script>
  <?php 
    require 'templates/footer.php';
  
  ?> 