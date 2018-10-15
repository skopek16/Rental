@extends('mainUserPanel')

@section('content')
        <div class="container">

                  <div class="card text-left" style="margin: auto;">
              <div class="card-body">
                <div class="list-group">

                  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pot1" style="float: right;">
                    Open modal
                  </button></a>
                  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pot2" style="float: right;">
                    Open modal
                  </button></a>
                  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pot3" style="float: right;">
                    Open modal
                  </button></a>

                </div>

              </div>
            </div>


                  <!-- Modals of pots  -->

            <div class="modal" id="pot1">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">pot1</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    Modal body pot 1
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>

            <div class="modal" id="pot2">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">pot2 </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    Modal body pot2
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
                        <div class="modal" id="pot3">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">pot3</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    Modal body pot3
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
        </div>
@endsection