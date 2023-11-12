@extends('index')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Desa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nama Desa</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($datadesas as $datadesa)
                                    <tr>
                                        <td>{{$datadesa->nama_desa}}</td>
                                        <td>{{$datadesa->kecamatan}}</td>
                                        <td>{{$datadesa->user->name}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fees Collection</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Roll No</th>
                                        <th>Student Name</th>
                                        <th>Invoice number</th>
                                        <th>Fees Type </th>
                                        <th>Payment Type </th>
                                        <th>Status </th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Tiger Nixon</td>
                                        <td>#54605</td>
                                        <td>Library</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/04/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Garrett Winters</td>
                                        <td>#54687</td>
                                        <td>Library</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2011/07/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Ashton Cox</td>
                                        <td>#35672</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/01/12</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Cedric Kelly</td>
                                        <td>#57984</td>
                                        <td>Annual</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2012/03/29</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Airi Satou</td>
                                        <td>#12453</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2008/11/28</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Brielle Williamson</td>
                                        <td>#59723</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2012/12/02</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Herrod Chandler</td>
                                        <td>#98726</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/08/06</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Rhona Davidson</td>
                                        <td>#98721</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2010/10/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Colleen Hurst</td>
                                        <td>#54605</td>
                                        <td>Annual</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/09/15</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Sonya Frost</td>
                                        <td>#98734</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2008/12/13</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Jena Gaines</td>
                                        <td>#12457</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2008/12/19</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Quinn Flynn</td>
                                        <td>#36987</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2013/03/03</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Charde Marshall</td>
                                        <td>#98756</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2008/10/16</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Haley Kennedy</td>
                                        <td>#98754</td>
                                        <td>Library</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/12/18</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>#65248</td>
                                        <td>Annual</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2010/03/17</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Michael Silva</td>
                                        <td>#75943</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2012/11/27</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Paul Byrd</td>
                                        <td>#87954</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/06/09</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Gloria Little</td>
                                        <td>#98746</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/04/10</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Bradley Greer</td>
                                        <td>#98674</td>
                                        <td>Annual</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/10/13</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Dai Rios</td>
                                        <td>#69875</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2012/09/26</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Jenette Caldwell</td>
                                        <td>#54678</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/09/03</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Yuri Berry</td>
                                        <td>#98756</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2009/06/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Caesar Vance</td>
                                        <td>#86754</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/12/12</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Doris Wilder</td>
                                        <td>#34251</td>
                                        <td>Annual</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/09/20</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Angelica Ramos</td>
                                        <td>#65874</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2009/10/09</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Gavin Joyce</td>
                                        <td>#54605</td>
                                        <td>Female</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2010/12/22</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Jennifer Chang</td>
                                        <td>#54605</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/11/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Brenden Wagner</td>
                                        <td>#45687</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2011/06/07</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Fiona Green</td>
                                        <td>#23456</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2010/03/11</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Shou Itou</td>
                                        <td>#54605</td>
                                        <td>Annual</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2011/08/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>Patient ID</th>
                                        <th>Date Check in</th>
                                        <th>Patient Name</th>
                                        <th>Doctor Assgined</th>
                                        <th>Disease</th>
                                        <th>Status</th>
                                        <th>Room no</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td>#P-00001</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Tiger Nixon</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-001</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>												
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </td>
                                        <td>#P-00002</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Garrett Winters</td>
                                        <td>Dr. Cedric</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-002</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </td>
                                        <td>#P-00003</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Recovered
                                            </span>
                                        </td>
                                        <td>AB-003</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
                                                <label class="form-check-label" for="customCheckBox5"></label>
                                            </div>
                                        </td>
                                        <td>#P-00004</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-004</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </td>
                                        <td>#P-00005</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-005</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </td>
                                        <td>#P-00006</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Rhona</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-006</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </td>
                                        <td>#P-00007</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-007</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
                                                <label class="form-check-label" for="customCheckBox9"></label>
                                            </div>
                                        </td>
                                        <td>#P-00008</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Garrett </td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-008</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox10" required="">
                                                <label class="form-check-label" for="customCheckBox10"></label>
                                            </div>
                                        </td>
                                        <td>#P-00009</td>
                                        <td>25/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-009</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
                                                <label class="form-check-label" for="customCheckBox11"></label>
                                            </div>
                                        </td>
                                        <td>#P-00010</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-010</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox12" required="">
                                                <label class="form-check-label" for="customCheckBox12"></label>
                                            </div>
                                        </td>
                                        <td>#P-00011</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-011</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox13" required="">
                                                <label class="form-check-label" for="customCheckBox13"></label>
                                            </div>
                                        </td>
                                        <td>#P-00012</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Garrett</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-012</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox14" required="">
                                                <label class="form-check-label" for="customCheckBox14"></label>
                                            </div>
                                        </td>
                                        <td>#P-00013</td>
                                        <td>25/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-013</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox15" required="">
                                                <label class="form-check-label" for="customCheckBox15"></label>
                                            </div>
                                        </td>
                                        <td>#P-00014</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Garrett</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-014</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox16" required="">
                                                <label class="form-check-label" for="customCheckBox16"></label>
                                            </div>
                                        </td>
                                        <td>#P-00015</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-015</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox17" required="">
                                                <label class="form-check-label" for="customCheckBox17"></label>
                                            </div>
                                        </td>
                                        <td>#P-00016</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Garrett</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-016</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox18" required="">
                                                <label class="form-check-label" for="customCheckBox18"></label>
                                            </div>
                                        </td>
                                        <td>#P-00017</td>
                                        <td>25/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-017</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox19" required="">
                                                <label class="form-check-label" for="customCheckBox19"></label>
                                            </div>
                                        </td>
                                        <td>#P-00018</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Rhona</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-018</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox20" required="">
                                                <label class="form-check-label" for="customCheckBox20"></label>
                                            </div>
                                        </td>
                                        <td>#P-00019</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold & Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-019</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox21" required="">
                                                <label class="form-check-label" for="customCheckBox21"></label>
                                            </div>
                                        </td>
                                        <td>#P-00020</td>
                                        <td>25/02/2020, 12:42 AM</td>
                                        <td>Sonya Frost</td>
                                        <td>Dr. Garrett</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-020</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@stop