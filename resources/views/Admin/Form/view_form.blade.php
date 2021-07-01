@extends('Admin/admin_layout')
@section('admin_contant')

<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
	<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>All Listing</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">View Form</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>

                          <tr>
                            <th>ID</th>
                            <th>First</th>
                            <th>Second</th>
                            <th>Third</th>
                            <th>Action</th>
                          </tr>

                        </thead>

                        <tbody>


                          <tr>

                            <td>id</td>
                            <td>first</td>
                            <td>second</td>
                            <td>third</td>
                            <td>delete</td>
                            
                          </tr>

                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>


@endsection