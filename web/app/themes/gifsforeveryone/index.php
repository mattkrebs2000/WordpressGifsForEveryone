<div>
    <?php get_header(); ?>

    <body class="bg">
        <div class="centerModal" class="d-flex justify-content-center">
            <div id="photoModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" role="content">
                    <div class="modal-content" style="width:fit-content;">
                        <div class="modal-header" style="background:black;">
                            <h4 class="modal-title" style="color:dodgerblue;">"Click" to Animate</h4>
                            <button id="clearButton" type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" style="width:fit-content; background-color:#323232">
                            <div class="d-flex justify-content-center">
                                <div class="container d-xs-block">
                                    <div class="row row-content">
                                        <div class="col">
                                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                                <div id="gifs-appear-here" class="carousel-inner" role="listbox">

                                                </div>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" class="hidden">
            <div id="text2" class="text">
                <div class="container-fluid">

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <p id="title">

                                Gifs For Everyone</p>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">

                            <p class="directions">

                                Directions: <br>
                                Click Or Provide Input To Get Gifs</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <p>
                            <div id="form" class="row">
                                <input class="form-control" id="topic" placeholder="Enter Topic Here!"
                                    onfocus="this.value=''">

                                <button id="submit" class="btn btn-md">Submit</button>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6 offset-3">
                    <div class="d-flex justify-content-center">
                        <div id="buttons" class="btn btn-md">
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>
</body>
<?php get_footer(); ?>
</div>