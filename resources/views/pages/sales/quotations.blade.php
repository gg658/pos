
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')

 
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card"><a href="sale_quotation_new" id="addRow" class="btn btn-success btn-block mb-2"><i class="feather icon-plus"></i>&nbsp; Add new Quotations</a>
                  <div class="card-header">
                      <h4 class="card-title">Quotations</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                         
                               <table class="table table-striped dataex-html5-selectors"> 
                               
                                  <thead>
                                      <tr>
                                          <th width="68">Quote ID</th>
                                          <th>Customer</th>
                                          <th>Create date</th>
                                          <th>Due Date</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>0001</td>
                                          <td>Rock Tower</td>
                                          <td>22/12/2020</td>
                                          <td>31/12/2020</td>
                                          <td>196.000</td>
                                          <td>Pending</td>
                                          <td>View - Edit</td>
                                      </tr>
                                    
                                     
                                     
                                     
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Zero configuration table -->



  
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
@endsection
