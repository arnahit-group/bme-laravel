@extends('admin.layouts.admin')
@section('vendor-css')
    <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('app-assets/vendors/data-tables/css/select.dataTables.min.css')}}" rel="stylesheet"
          type="text/css">

@endsection

@section('header')
    <link href="{{asset('app-assets/css/pages/data-tables.css')}}" rel="stylesheet" type="text/css">


@endsection

@section('main')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">DataTable</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="table-data-table.html#">Table</a>
                                </li>
                                <li class="breadcrumb-item active">DataTable
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="table-data-table.html#!"><i
                                        class="material-icons hide-on-med-and-up">settings</i><span
                                        class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                                class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                                    href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Tables are a nice way to organize a lot of data. We provide
                                    a few utility classes to help
                                    you style your table as easily as possible. In addition, to improve mobile
                                    experience, all tables on
                                    mobile-screen widths are centered automatically.</p>
                            </div>
                        </div>
                        <!-- DataTables example -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="button-trigger">
                                    <div class="card-content">
                                        <h4 class="card-title">DataTables example</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>DataTables has most features enabled by default, so all you need
                                                    to do to use it with your own tables
                                                    is to call the construction function.</p>
                                                <p>Searching, ordering, paging etc goodness will be immediately
                                                    added to the table, as shown in this
                                                    example.</p>
                                            </div>
                                            <div class="col s12">
                                                <table class="display" id="data-table-simple">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- DataTables Row grouping -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="button-trigger2">
                                    <div class="card-content">
                                        <h4 class="card-title">DataTables Row grouping</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Although DataTables doesn't have row grouping built-in (picking
                                                    one of the many methods available
                                                    would overly limit the DataTables core), it is most certainly
                                                    possible to give the look and feel of row
                                                    grouping.</p>
                                            </div>
                                            <div class="col s12">
                                                <table class="display" id="data-table-row-grouping">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Page Length Options</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="display" id="page-length-option">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scroll - vertical, dynamic height -->

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Scroll - vertical, dynamic height
                                        </h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="display" id="scroll-dynamic">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scroll - Vertical and Horizontal -->

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Scroll - vertical And Horizontal
                                        </h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="display nowrap" id="scroll-vert-hor">
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
                        </div>

                        <!-- Multi Select -->

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Multi Select
                                        </h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="display" id="multi-select">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input class="select-all" type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label>
                                                                    <input type="checkbox"/>
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a
                                                            class="sidenav-close"
                                                            href="table-data-table.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="table-data-table.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="table-data-table.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="table-data-table.html#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body">
                                    <div class="col s12" id="messages">
                                        <div class="collection border-none">
                                            <input class="header-search-input mt-4 mb-2" name="Search" placeholder="Search Messages"
                                                   type="text"/>
                                            <ul class="collection p-0">
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-2.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-3.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-4.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-5.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-6.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-8.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-9.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-10.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-11.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-12.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12" id="settings">
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12" id="activity">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Homepage mockup design <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    <span class="new badge amber"
                                                          data-badge-caption="Important"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Melissa liked your activity Drinks. <span
                                                                class="secondary-content">10 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge light-green"
                                                          data-badge-caption="Resolved"></span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        12 new users registered <span class="secondary-content">30 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Tina is attending your activity <span
                                                                class="secondary-content">2 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Josh is now following you <span class="secondary-content">5 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge red" data-badge-caption="Pending"></span>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        New order received urgent <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System shutdown. <span
                                                                class="secondary-content">5 min</span></div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue"
                                                          data-badge-caption="Urgent"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Database overloaded 89% <span class="secondary-content">20 min</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System error <span
                                                                class="secondary-content">10 min</span></div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Production server down. <span class="secondary-content">1 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue" data-badge-caption="Urgent"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul class="sidenav slide-out-right-sidenav-chat" id="slide-out-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="table-data-table.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
                                    Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive
                                                materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form action="javascript:void(0);" class="col s12" onsubmit="slide_out_chat()">
                                    <div class="input-field">
                                        <input class="search" id="icon_prefix" type="text"/>
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div class="fixed-action-btn direction-top" style="bottom: 50px; right: 19px;"><a
                                class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                                    class="material-icons">add</i></a>
                        <ul>
                            <li><a class="btn-floating blue" href="css-helpers.html"><i class="material-icons">help_outline</i></a>
                            </li>
                            <li><a class="btn-floating green" href="cards-extended.html"><i class="material-icons">widgets</i></a>
                            </li>
                            <li><a class="btn-floating amber" href="app-calendar.html"><i class="material-icons">today</i></a>
                            </li>
                            <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('vendor-js')
    <script src="{{asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/data-tables/js/dataTables.select.min.js')}}"
            type="text/javascript"></script>

@endsection

@section('footer')
    <script src="{{asset('app-assets/js/scripts/data-tables.js')}}" type="text/javascript"></script>

@endsection

