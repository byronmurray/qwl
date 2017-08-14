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

      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          

          <form>

            <select class="custom-select">
              <option selected>Start Time</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>

            <select class="custom-select">
              <option selected>Finish Time</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>

            <div class="form-group">
              <label for="exampleSelect1">Job Code</label>
              <select class="form-control" id="exampleSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
     
            <div class="form-group">
              <label for="exampleTextarea">Job Description</label>
              <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleTextarea">Parts used</label>
              <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Select Date</label>
              <input type="text" class="form-control" placeholder="Enter date">
            </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>






      </div>
    </div>
  </div>
</div>
@endsection
