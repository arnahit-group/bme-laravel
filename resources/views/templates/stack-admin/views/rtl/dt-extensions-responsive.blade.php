@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    @endif


@endsection
@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Responsive Datatable</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="dt-extensions-responsive.html#">DataTables</a>
                                </li>
                                <li class="breadcrumb-item active">Responsive Datatable
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="ft-settings icon-left"></i> Settings
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a
                                        class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div>
                        <a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary"
                                                                                                                         href="timeline-center.html"><i
                                    class="ft-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Configuration option table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Configuration option</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on
                                            the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the
                                            boolean value true.
                                        </p>
                                        <table class="table table-striped table-bordered dataex-res-configuration">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Configuration option table -->

                <!-- `new` constructor table -->
                <section id="constructor">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">`new` constructor</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Responsive will automatically detect new DataTable instances being created on a page and initialize itself if it finds
                                            the responsive option or responsive class name on the table, as shown in the other examples.
                                        </p>
                                        <table class="table table-striped table-bordered dataex-res-constructor">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- `new` constructor table -->

                <!-- Immediately show hidden details table -->
                <section id="show-hidden">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Immediately show hidden details</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Responsive has the ability to display the details that it has hidden in a variety of different ways. Its default is to
                                            allow the end user to toggle the the display by clicking on a row and showing the information in a DataTables child row. At times it can
                                            be useful not to require end user interaction to display the hidden data in a responsive manner, which can be done with the
                                            childRowImmediate display type.
                                        </p>
                                        <table class="table table-striped table-bordered dataex-res-immediately">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Immediately show hidden details table -->

                <!-- Modal details display -->
                <section id="modal">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal details display</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Responsive's default mode to show information that is hidden due to columns being removed from the table is to show the
                                            hidden details in a child row (row().child()). However, you may wish to use the child row for other purposes or you may simply wish to
                                            use a different method of showing the row's information. This can be achieved with the modal display type.
                                        </p>
                                        <table class="table table-striped table-bordered dataex-res-modal">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Modal details display -->

                <!-- With Buttons - Column visibility table -->
                <section id="column-visibility">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Buttons - Column visibility</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Buttons is an extension for DataTables that provides a framework for control buttons, and also a number of default
                                            button sets. This example shows the use of Responsive with the colvis button type, demonstrating how Responsive works with column
                                            visibility in DataTables.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-visibility">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ With Buttons - Column visibility table -->

                <!-- With FixedHeader table -->
                <section id="fixedheader">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With FixedHeader</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">This example shows Responsive being used with the DataTables FixedHeader extension. FixedHeader will lock a table's
                                            header to the top of the table, ensuring that the user always knows what each column relates to.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-fixedheader">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ With FixedHeader table -->

                <!-- With ColReorder table -->
                <section id="colreorder">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With ColReorder</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">This example demonstrates the use of Responsive with the ColReorder extension for DataTables, which provides the
                                            ability to reorder columns using click and drag on the column headers.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-colreorder">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ With ColReorder table -->

                <!-- Column controlled child rows -->
                <section id="child-rows">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Column controlled child rows</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Responsive has two built in methods for displaying the controlling element of the child rows; inline which is the
                                            default option and shows the control in the first column, and column which set a control column as the control. The control column is
                                            shown only when there is some other column hidden, and is dedicated only to the show / hide control for the rows.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-controlled">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Column controlled child rows -->

                <!-- Column control - right table -->
                <section id="column-control">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Column control - right</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">When using the column child row control type, Responsive has the ability to use any column or element as the show /
                                            hide control for the row details. This is provided through the responsive.details.target option, which can be either a column index, or
                                            a jQuery selector.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-controlright">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Column control - right table -->

                <!-- Whole row child row control table -->
                <section id="child-row-control">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Whole row child row control</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">When using the column details type in Responsive the responsive.details.target option provides the ability to control
                                            what element is used to show / hide the child rows when the table is collapsed.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-rowcontrol">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Whole row child row control table -->

                <!-- Vertical scrolling table -->
                <section id="scrolling">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical scrolling</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">This example shows Responsive in use with the scrollY option to present a scrolling table (instead of using paging as
                                            the other Responsive examples do). Responsive will automatically work with the table in such a configuration.
                                        </p>
                                        <table class="table table-striped table-bordered responsive dataex-res-scrolling">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett</td>
                                                    <td>Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona</td>
                                                    <td>Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen</td>
                                                    <td>Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya</td>
                                                    <td>Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena</td>
                                                    <td>Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn</td>
                                                    <td>Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde</td>
                                                    <td>Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley</td>
                                                    <td>Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana</td>
                                                    <td>Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul</td>
                                                    <td>Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria</td>
                                                    <td>Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai</td>
                                                    <td>Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette</td>
                                                    <td>Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri</td>
                                                    <td>Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris</td>
                                                    <td>Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                    <td>3023</td>
                                                    <td>d.wilder@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                    <td>8822</td>
                                                    <td>g.joyce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                    <td>9239</td>
                                                    <td>j.chang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona</td>
                                                    <td>Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                    <td>2947</td>
                                                    <td>f.green@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou</td>
                                                    <td>Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                    <td>8899</td>
                                                    <td>s.itou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle</td>
                                                    <td>House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                    <td>2769</td>
                                                    <td>m.house@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki</td>
                                                    <td>Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                    <td>6832</td>
                                                    <td>s.burks@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott</td>
                                                    <td>Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                    <td>3606</td>
                                                    <td>p.bartlett@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin</td>
                                                    <td>Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                    <td>2860</td>
                                                    <td>g.cortez@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena</td>
                                                    <td>Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                    <td>8240</td>
                                                    <td>m.mccray@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity</td>
                                                    <td>Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                    <td>5384</td>
                                                    <td>u.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard</td>
                                                    <td>Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                    <td>7031</td>
                                                    <td>h.hatfield@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope</td>
                                                    <td>Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                    <td>6318</td>
                                                    <td>h.fuentes@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian</td>
                                                    <td>Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                    <td>9422</td>
                                                    <td>v.harrell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy</td>
                                                    <td>Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                    <td>7580</td>
                                                    <td>t.mooney@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson</td>
                                                    <td>Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                    <td>1042</td>
                                                    <td>j.bradshaw@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia</td>
                                                    <td>Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                    <td>2120</td>
                                                    <td>o.liang@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura</td>
                                                    <td>Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                    <td>9383</td>
                                                    <td>s.yamamoto@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor</td>
                                                    <td>Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                    <td>8327</td>
                                                    <td>t.walton@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn</td>
                                                    <td>Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                    <td>2927</td>
                                                    <td>f.camacho@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge</td>
                                                    <td>Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                    <td>8352</td>
                                                    <td>s.baldwin@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida</td>
                                                    <td>Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                    <td>7439</td>
                                                    <td>z.frank@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita</td>
                                                    <td>Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                    <td>4389</td>
                                                    <td>z.serrano@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer</td>
                                                    <td>Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                    <td>3431</td>
                                                    <td>j.acosta@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Vertical scrolling table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('vendor-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/tables/datatables-extensions/datatable-responsive.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
