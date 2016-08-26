@extends('layouts.client.main')

@section('content')

    <div class="row">
        <div class="col-md-12 mb20">
            <button class="btn btn-info btn-quirk"  data-toggle="modal" data-target="#addCar">
                <span class="fa fa-plus"></span> Добавить транспортное средство
            </button>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <div class="panel-group" id="accordion8">

                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapse1" aria-expanded="true" class="">
                                 Мото техника <span class="badge"> 0 </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" aria-expanded="true">
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <div class="profile-left mb20">
                                        <div class="profile-left-heading">
                                            <h2 class="profile-name">KAWASAKI</h2>
                                            <h4 class="profile-designation">ZZR-400</h4>

                                            <ul class="list-group">
                                                <li class="list-group-item">Год <a href="#">2012</a></li>
                                                <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                            </ul>
                                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                        </div>
                                    </div><!-- profile-left -->
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <div class="profile-left mb20">
                                        <div class="profile-left-heading">
                                            <h2 class="profile-name">KAWASAKI</h2>
                                            <h4 class="profile-designation">ZZR-400</h4>

                                            <ul class="list-group">
                                                <li class="list-group-item">Год <a href="#">2012</a></li>
                                                <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                            </ul>
                                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                        </div>
                                    </div><!-- profile-left -->
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <div class="profile-left mb20">
                                        <div class="profile-left-heading">
                                            <h2 class="profile-name">KAWASAKI</h2>
                                            <h4 class="profile-designation">ZZR-400</h4>

                                            <ul class="list-group">
                                                <li class="list-group-item">Год <a href="#">2012</a></li>
                                                <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                            </ul>
                                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                        </div>
                                    </div><!-- profile-left -->
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <div class="profile-left mb20">
                                        <div class="profile-left-heading">
                                            <h2 class="profile-name">KAWASAKI</h2>
                                            <h4 class="profile-designation">ZZR-400</h4>

                                            <ul class="list-group">
                                                <li class="list-group-item">Год <a href="#">2012</a></li>
                                                <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                            </ul>
                                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                        </div>
                                    </div><!-- profile-left -->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapse2" aria-expanded="false">
                                Легковые автомобили  <span class="badge"> 0 </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">

                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">Honda</h2>
                                        <h4 class="profile-designation">Civic 4D</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">Mazda</h2>
                                        <h4 class="profile-designation">CX-5</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">Toyota</h2>
                                        <h4 class="profile-designation">Celica</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapse3" aria-expanded="false">
                                Коммерческий транспорт <span class="badge"> 0 </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapse4" aria-expanded="false">
                                Спец. техника <span class="badge"> 0 </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="profile-left mb20">
                                    <div class="profile-left-heading">
                                        <h2 class="profile-name">KAWASAKI</h2>
                                        <h4 class="profile-designation">ZZR-400</h4>

                                        <ul class="list-group">
                                            <li class="list-group-item">Год <a href="#">2012</a></li>
                                            <li class="list-group-item">VIN <a href="#">12345678912345678</a></li>
                                        </ul>
                                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Открыть</button>
                                    </div>
                                </div><!-- profile-left -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal bounceIn animated" id="addCar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Добавить транспортное средство</h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <select id="select1" class="form-control" style="width: 100%" data-placeholder="Марка">
                                    <option value="">&nbsp;</option>
                                    <option value="United States">Toyota</option>
                                </select>
                                <span class="help-block">Марка автомобиля. Обязательное к заполнению.</span>
                            </div>

                            <div class="form-group">
                                <select id="select2" class="form-control" style="width: 100%" data-placeholder="Модель">
                                    <option value="">&nbsp;</option>
                                    <option value="United States">Toyota</option>
                                </select>
                                <span class="help-block">Модель автомобиля. Обязательное к заполнению.</span>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Год" class="form-control">
                                <span class="help-block">Год автомобиля. Обязательное к заполнению.</span>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="VIN" class="form-control">
                                <span class="help-block">VIN автомобиля. Не обязательно но упростит поиск запчастей.</span>
                            </div>

                            <div class="form-group nomargin">
                                <textarea class="form-control" rows="3" placeholder="Дополнилельная информация"></textarea>
                                <span class="help-block">Здесь вы можете указать любую дополнительную информацию. Например тип трансмии, номер кузова, цвет и т.п..</span>
                            </div>

                            <div class="panel-group" id="accordion8">

                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion9" href="#collapse1-9" aria-expanded="true" class="">
                                                Мото техника <span class="badge"> 0 </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1-9" class="panel-collapse collapse" aria-expanded="true">
                                        <div class="panel-body">

                                            <div id="wizard-basic1" class="wizard-style2">
                                                <h3>Основные данные <small>Все поля обязательны.</small></h3>
                                                <div>
                                                    <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                                </div>
                                                <h3>Дополнительно <small>Все поля не обязательны.</small></h3>
                                                <div>
                                                    <p>Wonderful transition effects.</p>
                                                </div>
                                                <h3>Комментарий <small>Дополнительная информация.</small></h3>
                                                <div>
                                                    <p>The next and previous buttons help you to navigate through your content.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion9" href="#collapse2-9" aria-expanded="false">
                                                Легковые автомобили  <span class="badge"> 0 </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">



                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion9" href="#collapse3-9" aria-expanded="false">
                                                Коммерческий транспорт <span class="badge"> 0 </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">

                                            <div id="wizard-basic3" class="wizard-style2">
                                                <h3>Personal Details <small>Enter your personal information.</small></h3>
                                                <div>
                                                    <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                                </div>
                                                <h3>Shipping Details <small>Choose your shipping options.</small></h3>
                                                <div>
                                                    <p>Wonderful transition effects.</p>
                                                </div>
                                                <h3>Payment Details <small>Enter your card information.</small></h3>
                                                <div>
                                                    <p>The next and previous buttons help you to navigate through your content.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion9" href="#collapse4-9" aria-expanded="false">
                                                Спец. техника <span class="badge"> 0 </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">



                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->


@endsection

@section('js')

    <script src="/main/lib/select2/select2.js"></script>

    <script>
        $(function() {
            // Select2 Box
            $('#select1, #select2').select2();
        });
    </script>

@endsection