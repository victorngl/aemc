@extends(backpack_view('blank'))


@section('content')


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Enviar Arquivo</a></li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                                    synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                                    retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
                                    labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                    beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica
                                    VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson
                                    8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                                    stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                                        <div class="card-header"><strong>Enviar arquivo da enquete</strong></div>
                                        <div class="card-body">
                                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="enquetefile">Selecionar arquivo:</label>
                                                    <div class="col-md-9">
                                                        <input id="file-input" type="file" name="enquetefile">
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i>Enviar</button>
                                        </div>
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
