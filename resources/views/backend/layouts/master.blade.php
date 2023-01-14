<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.layouts.partials.head')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      @include('backend.layouts.partials.navbar')
      @include('backend.layouts.partials.sidebar')
      <div class="content-wrapper">
          @include('backend.layouts.partials.content-header')
          <section class="content">
            <div class="container-fluid">
              @yield('content')
            </div>
          </section>
      </div>
      @include('backend.layouts.partials.footer')
    </div>
    @include('backend.layouts.partials.scripts')
  </body>
</html>
