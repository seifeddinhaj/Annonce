@extends('layouts.app')
@section('content')



  @foreach($q as $annonce)
                    <div class="col-md-3 text-center myads-fs">
                        <div class="panel panel-default">
                            <div class="panel-image">
                                <img src="{{asset($annonce->urlimg)}}" class="panel-image-preview" />
                                <label for="toggle-1"></label>
                            </div>
                            <h4>{{$annonce->title}}</h4>
                            <p>{{$annonce->price}} DT</p>
                            <div class="panel-footer text-center">
                                <a href="{{url('myads/remove/'.$annonce->id)}}"><button type="button" class="btn btn-outline-danger">Remove
                                    </button></a>
                                <a href="#"><button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">Edit</button></a>

                            </div>
                        </div>
                    </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit ad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form role="form" method="post" style="margin-top: 50px;"action="myads/edit" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="modal-body">

                                <input type="hidden" value="{{($annonce->id)}}" name="id">
                            <div class="form-group">
                                <label class="control-label">Photos</label>
                                <input type="file" class="form-control" multiple name="imgAn" />
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="title">Title</label>
                                <textarea class="form-control" name="title" rows="2" id="title" minlength="3"required >{{$annonce->title}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Description">Description</label>
                                <textarea class="form-control" rows="2" name="description" id="Description" minlength="3"  required>{{$annonce->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <input  type="number" required="required" class="form-control" name="price" placeholder="0.00" value="{{$annonce->price}}" />
                            </div>

                        </div>
                        <div class="modal-footer">

                            <input type="submit" class="btn btn-primary" value="Save changes"></input>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


                @endforeach











@endsection
