    @extends('template.wrapp')

    @section('page-title')
        Colaboradores
    @endsection

    @section('content')

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                <div id="card-stats" class="seaction">

                <div class="row">
                <div class="col s6 m4 l3">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="{!! asset('layout03/images/user-profiles.jpg') !!}" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="{!! asset('layout03/images/avatar.jpg') !!}" alt="" class="circle responsive-img activator card-profile-image">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-hardware-keyboard"></i>
                      </a>

                        <span class="card-title activator black-text text-darken-4">Roger Waters</span>
                      <p><i class="mdi-action-perm-identity"></i> Twitter</p>
                      <p><i class="mdi-action-perm-identity"></i> Facebook</p>
                      <p><i class="mdi-action-perm-identity"></i> Github</p>
                      <p><i class="mdi-communication-email"></i> yourmail@domain.com</p>

                    </div>
                  </div>
                </div>
            </div>



                </div><!--end container-->
            </section><!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


    @endsection
    @section ('scripts')
        <!-- google map api -->
    <script type="text/javascript" src="#"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/vectormap-script.js') !!}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins.js') !!}"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Bienvenido a Morelia Hacks!!.</span>', 1500);
        }, 2500);
    });

    </script>
    @endsection