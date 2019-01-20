@extends('layouts.main')

@section('content')
  
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- TASKS LIST -->
          <div class="row">
            <div class="col">
              <div id="accordion">
                <div class="card task-card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Creation of Trade Remedy Division
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered task-table" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Attachments</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Attachments</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            <tr>
                              <td class="description">Approval to Budget</td>
                              <td>2018/04/25</td>
                              <td>none</td>
                            </tr>
                            <tr>
                              <td class="description">Submitted to DBM</td>
                              <td>2018/04/28</td>
                              <td>none</td>
                            </tr>
                            <tr>
                              <td class="description">Returned from DBM for Competion of Requirements</td>
                              <td>2018/05/20</td>
                              <td>none</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card task-card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Task #2
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered task-table" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Attachments</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>Description</th>
                              <th>Date</th>
                              <th>Attachments</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            <tr>
                              <td class="description">Update 1</td>
                              <td>2018/04/25</td>
                              <td>none</td>
                            </tr>
                            <tr>
                              <td class="description">Update 2</td>
                              <td>2018/04/28</td>
                              <td>none</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          
@endsection