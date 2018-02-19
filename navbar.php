<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">IKLC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <form class="form-inline my-2 my-md-0" action="index.php" method="get">
          <input class="form-control" type="text" placeholder="KDP 1" id="search-grup" name="grup">
            <input type="submit" value="Cari" class="btn btn-primary ml-1">
        </form>
          <?php
          if (!isset($_SESSION['kodeA'])){
            echo
         '<a href="logout.php" class="btn btn-primary ml-auto">'.'Login'.'</a>';
          }
          else {
            echo
         '<a href="logout.php" class="btn btn-primary ml-auto">'.'Logout'.'</a>';
          }
          ?>
      </div>
</nav>
