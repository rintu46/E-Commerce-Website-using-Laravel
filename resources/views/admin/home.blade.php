

<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->


        @include('admin.sidebar')
        @include('admin.navbar')


        <!-- partial -->
        @include('admin.body')
          <!-- partial -->

          @include('admin.script')
  </body>
</html>