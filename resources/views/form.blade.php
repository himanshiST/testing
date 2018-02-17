<!DOCTYPE html>
<html lang="en">

  <head>
    @include('includes.head')
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      @include('includes.nav')
    </nav>

    <header class="masthead">
     @include('includes.header') 
    </header>

    <section class="download bg-primary " id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h3 class="section-heading">Registration</h3>
            <div class="badges">
			<form>
              <input type="text" class="form-group" placeholder="username" name="name" id="name"><br>
			  <input type="text"  class="form-group" placeholder="email" name="email" id="email"><br>
			  <input type="passwrd" class="form-group" placeholder="password" name="password" id="password"><br>
			  <input type="button" class="form-group" name="submit" value="submit" onclick="registration();">
			  </form>
            </div>
          </div>
        </div>
      </div>
    </section>
	@include('includes.footer')

  </body>

</html>
