<!-- Default Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">Home<span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>
                <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


    <!-- Penjelasan -->

    <!-- class="{{ Request::is('') ? "active" : ""}}"  -->
    <!-- class diatas digunakan untuk melakukan pengecekan pada navbar mengenai halaman mana yg aktif
        1. Request adalah helper pada laravel untuk mengecek request dari user
        2. is('') pengecekkan halaman/object jika return true/falsa statment
        3. "active" return jika true maka akan menjalankan class active pada bootstrap
        4. "" statment untuk false   -->