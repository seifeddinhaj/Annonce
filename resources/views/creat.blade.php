@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="row">
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-1"  class="nrml active"><img src="icon/camera.png" alt="img of Ad"></a>
                    <p><small></small></p>
                </div>
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-2" class="nrml" disabled="disabled"><img src="icon/add.png" alt="desc of ad"></a>
                    <p><small></small></p>
                </div>
                <div class="stepwizard-step col-xs-4 col-md-4">
                    <a href="#step-3"  class="nrml" disabled="disabled"> <img src="icon/mapn.png" alt="localisation"> </a>
                    <p><small></small></p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form role="form" style="margin-top: 50px;">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="panel-title">add an ad</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                    </div>
                    <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                    <h3 class="panel-title">add an ad</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label" for="title">Title</label>
                        <textarea class="form-control" rows="2" id="title" minlength="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Description">Description</label>
                        <textarea class="form-control" rows="2" id="Description" minlength="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Description"> Catégorie</label>
                        <select class="form-control">
                            @foreach($req as $cat )
                            <option value="{{$cat->id}}">{{$cat->type}}</option>
                                @endforeach
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
                        <label class="control-label">Price</label>
                        <input  type="number" required="required" class="form-control" placeholder="0.00" value="0.00" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="location">Location</label>

                        <select class="form-control" id="location">
                            <option value="Tunis">Tunis</option>
                            <option value="Gabes">Gabes</option>
                            <option value="Sfax">Sfax</option>
                            <option value="Sousse">Sousse</option>
                        </select>
                    </div>
                    <input class="btn  btn-success nextBtn float-right" type="submit" value="Valid">
                </div>
            </div>


        </form>
        </div>
        </div>
    </div>

@endsection