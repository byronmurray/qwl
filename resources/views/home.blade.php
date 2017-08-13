@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Machine Name / Job Name 
                    <div class="pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                    </div>
                </div>

                <div class="panel-body">


                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Time</th>
                          <th>Code</th>
                          <th>Travel</th>
                          <th>Description</th>
                          <th>Parts</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>10:15 - 14:30</td>
                          <td>GWL1</td>
                          <td>55kms</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem minus facilis, illum neque numquam voluptatum iusto eos natus sequi odit assumenda quam nostrum, aliquid, deserunt quisquam quaerat non ex.</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>10:15 - 14:30</td>
                          <td>GWL1</td>
                          <td>55kms</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem minus facilis, illum neque numquam voluptatum iusto eos natus sequi odit assumenda quam nostrum, aliquid, deserunt quisquam quaerat non ex.</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>10:15 - 14:30</td>
                          <td>GWL1</td>
                          <td>55kms</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore exercitationem minus facilis, illum neque numquam voluptatum iusto eos natus sequi odit assumenda quam nostrum, aliquid, deserunt quisquam quaerat non ex.</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        </tr>
                      </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
@endsection
