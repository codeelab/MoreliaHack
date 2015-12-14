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
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  red white-text">
                                <p class="card-stats-title"> APIs de Facebook y Twitter</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  6</h4>
                            </div>
                        <div class="card-action  red lighten-1">
                        <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                        </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  purple white-text">
                                <p class="card-stats-title"> Crawling</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  3</h4>
                            </div>
                        <div class="card-action  purple lighten-1">
                            <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                        </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  lime white-text">
                                <p class="card-stats-title"> Datos abiertos</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  2</h4>
                            </div>
                        <div class="card-action  lime lighten-1">
                            <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                        </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title"> Geo localización</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  1</h4>
                            </div>
                            <div class="card-action  green darken-2">
                                <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  teal white-text">
                                <p class="card-stats-title"> Procesamiento de lenguaje natural</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  3</h4>
                            </div>
                            <div class="card-action  teal lighten-1">
                                <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  blue white-text">
                                <p class="card-stats-title"> Visualización de datos</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  4</h4>
                            </div>
                            <div class="card-action  blue lighten-1">
                                <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  orange white-text">
                                <p class="card-stats-title"> Resiliencia</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  1</h4>
                            </div>
                            <div class="card-action  orange lighten-1">
                                <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  brown white-text">
                                <p class="card-stats-title"> Movilidad</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  2</h4>
                            </div>
                            <div class="card-action  brown lighten-1">
                                <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  grey white-text">
                                <p class="card-stats-title"> Prevención del delito</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  3</h4>
                            </div>
                                <div class="card-action  grey lighten-1">
                                    <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
                                </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  deep-orange white-text">
                                <p class="card-stats-title"> Fractal</p>
                                    <h4 class="card-stats-number"><i class="mdi-action-face-unlock"></i>  1</h4>
                            </div>
                                <div class="card-action  deep-orange lighten-1">
                                    <span class="green-text text-lighten-5"><a href="{{url('grupo')}}">Detalles</a></span>
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