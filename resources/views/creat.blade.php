@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="row">
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-2"  class="nrml active"><img src="icon/add.png" alt="img of Ad"></a>
                    <p><small></small></p>
                </div>
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-3" class="nrml" disabled="disabled"><img src="icon/mapn.png" alt="desc of ad"></a>
                    <p><small></small></p>
                </div>
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-1"  class="nrml" disabled="disabled"> <img src="icon/camera.png" alt="localisation"> </a>
                    <p><small></small></p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form role="form" method="post" style="margin-top: 50px;"action="CreatAn/store" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="panel-title">add an ad</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Photos</label>


                        <input type="file" class="form-control" multiple  name="imgAn[]"/>

                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                       <!-- <input type="file" class="form-control" multiple name="imgAn" />-->

                        <input type="file" class="form-control" multiple  name="files[]"/>

                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                        <input type="file" class="form-control" multiple name="imgAn" />


                    </div>
                    <div class="form-group">
                    </div>


                </div>
                <input class="btn  btn-success nextBtn float-right" type="submit" value="Valid">
            </div>

            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                    <h3 class="panel-title">add an ad</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                        <label class="control-label" for="title">Title</label>
                        <textarea class="form-control" name="title" rows="2" id="title" minlength="3" required></textarea>
                    </div>
                    <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                        <label class="control-label" for="Description">Description</label>
                        <textarea class="form-control" rows="2" name="description" id="Description" minlength="3" required></textarea>
                    </div>
                     
                    <div id="cat" class="form-group">
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                        <label class="control-label" for="Description"> Category</label>
                        
                        <select class="form-control categories" id="categories" name="categories">
                          <option>choose a category</option>
                            @foreach($req as $cat )
                            <option value="{{$cat->id}}">{{$cat->type}}</option>
                                @endforeach
                        </select>

                        <label class="control-label" for="Description">Sub  Category</label>
                        <!--{{var_dump($select)}}-->
                        <select class="form-control subcategory" name="subcategory">
                            <!-- @foreach($data as $row )
                            <option value="{{$row->id}}">{{$row->type}}</option>
                                @endforeach-->
                        </select>

                    </div>
        <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-heading">
                    <h3 class="panel-title">add an ad</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label" for="type">Type</label>

                        <select class="form-control" name="type" id="type" autofocus>
                            <option value="For sale">For sale</option>
                            <option value="For rent">For rent</option>
                            <option value="looking">looking</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Price</label>
                        <input  type="number" required="required" class="form-control" name="price" placeholder="0.00" value="0.00" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="location">Location</label>

                        <select class="form-control" name="location" id="location">
                            <option value="Tunis">Tunis</option>
                            <option value="Gabes">Gabes</option>
                            <option value="Sfax">Sfax</option>
                            <option value="Sousse">Sousse</option>
                        </select>
                    </div>
                    <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
                </div>
            </div>


        </form>
        </div>
        </div>
    </div>






@endsection