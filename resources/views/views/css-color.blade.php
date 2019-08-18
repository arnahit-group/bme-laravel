@extends('admin.layouts.admin')
@section('vendor-css')
@endsection

@section('header')


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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Color</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="css-color.html#">CSS</a>
                                </li>
                                <li class="breadcrumb-item active">Color
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="css-color.html#!"><i
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
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption">Here is a color palette based on the material design base colors.
                                    Each of these colors is
                                    defined with a base color class and an optional lighten or darken class.</p>
                            </div>
                        </div>
                        <!--Color Usage-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default" id="background-color">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Background Color</h4>
                                                <p>To apply a background color, just add the color name and
                                                    light/darkness as a class to the element.</p>
                                            </div>
                                            <div class="col s12">
                                                <div class="card-panel light-blue lighten-2 white-text">This is a
                                                    card panel with a light-blue lighten-2
                                                    class
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="header">Text Color</h4>
                                                <p>To apply a text color, just append <code
                                                            class="languague-markup">-text</code> to the color class
                                                    like
                                                    this:</p>
                                            </div>
                                            <div class="col s12">
                                                <div class="card-panel">
                                                    <span class="blue-text text-darken-2">This is a card panel with dark blue text</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Dynamic Gradient Color-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default" id="gradient-color-palette">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <h4 class="card-title">Gradient Color Palette</h4>
                                            </div>
                                            <div class="col s12 m6 l4">
                                                <div class="gradient-45deg-amber-amber padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-amber-amber
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-blue-indigo padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-blue-indigo
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-indigo-light-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-indigo-light-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-red-pink padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-red-pink
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-light-blue-teal padding-5 medium-small">
                                                    gradient-45deg-light-blue-teal
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-light-blue-indigo padding-5 medium-small">
                                                    gradient-45deg-light-blue-indigo
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-yellow-green padding-5 medium-small">
                                                    gradient-45deg-yellow-green
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-orange-deep-orange padding-5 medium-small">
                                                    gradient-45deg-orange-deep-orange
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-deep-purple-purple padding-5 medium-small">
                                                    gradient-45deg-deep-purple-purple
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-light-green-amber padding-5 medium-small">
                                                    gradient-45deg-light-green-amber
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-purple-pink padding-5 medium-small">
                                                    gradient-45deg-purple-pink
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l4">
                                                <div class="gradient-45deg-indigo-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-indigo-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-brown-brown padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-brown-brown
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-blue-grey-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-blue-grey-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-purple-deep-orange padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-purple-deep-orange
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-green-teal padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-green-teal
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-indigo-light-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-indigo-light-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-teal-cyan padding-5 medium-small">
                                                    gradient-45deg-teal-cyan
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-blue-grey-blue-grey padding-5 medium-small">
                                                    gradient-45deg-blue-grey-blue-grey
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-cyan-light-green padding-5 medium-small">
                                                    gradient-45deg-cyan-light-green
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-orange-amber padding-5 medium-small">
                                                    gradient-45deg-orange-amber
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l4">
                                                <div class="gradient-45deg-indigo-purple padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-indigo-purple
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-deep-purple-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-deep-purple-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-deep-orange-orange padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-deep-orange-orange
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-light-blue-cyan padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-light-blue-cyan
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-purple-amber padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-purple-amber
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-purple-deep-purple padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-purple-deep-purple
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-purple-light-blue padding-5 medium-small"
                                                     style="color: rgba(255, 255, 255, 0.901961);">
                                                    gradient-45deg-purple-light-blue
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-cyan-cyan padding-5 medium-small">
                                                    gradient-45deg-cyan-cyan
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-yellow-teal padding-5 medium-small">
                                                    gradient-45deg-yellow-teal
                                                </div>
                                                <br>
                                                <div class="gradient-45deg-cyan-light-green padding-5 medium-small">
                                                    gradient-45deg-cyan-light-green
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Dynamic Color-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default" id="color-palette">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="dynamic-color">
                                                <div class="col s12 m12 l12 m-0">
                                                    <h4 class="card-title">Color Palette</h4>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="red lighten-5">#ffebee red lighten-5</div>
                                                    <div class="red lighten-4">#ffcdd2 red lighten-4</div>
                                                    <div class="red lighten-3">#ef9a9a red lighten-3</div>
                                                    <div class="red lighten-2">#e57373 red lighten-2</div>
                                                    <div class="red lighten-1">#ef5350 red lighten-1</div>
                                                    <div class="red">#f44336 red</div>
                                                    <div class="red darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#e53935 red
                                                        darken-1
                                                    </div>
                                                    <div class="red darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#d32f2f red
                                                        darken-2
                                                    </div>
                                                    <div class="red darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#c62828 red
                                                        darken-3
                                                    </div>
                                                    <div class="red darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#b71c1c red
                                                        darken-4
                                                    </div>
                                                    <div class="red accent-1">#ff8a80 red accent-1</div>
                                                    <div class="red accent-2">#ff5252 red accent-2</div>
                                                    <div class="red accent-3">#ff1744 red accent-3</div>
                                                    <div class="red accent-4">#d50000 red accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="pink lighten-5">#fce4ec pink lighten-5</div>
                                                    <div class="pink lighten-4">#f8bbd0 pink lighten-4</div>
                                                    <div class="pink lighten-3">#f48fb1 pink lighten-3</div>
                                                    <div class="pink lighten-2">#f06292 pink lighten-2</div>
                                                    <div class="pink lighten-1">#ec407a pink lighten-1</div>
                                                    <div class="pink">#e91e63 pink</div>
                                                    <div class="pink darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#d81b60 pink
                                                        darken-1
                                                    </div>
                                                    <div class="pink darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#c2185b pink
                                                        darken-2
                                                    </div>
                                                    <div class="pink darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ad1457 pink
                                                        darken-3
                                                    </div>
                                                    <div class="pink darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#880e4f pink
                                                        darken-4
                                                    </div>
                                                    <div class="pink accent-1">#ff80ab pink accent-1</div>
                                                    <div class="pink accent-2">#ff4081 pink accent-2</div>
                                                    <div class="pink accent-3">#f50057 pink accent-3</div>
                                                    <div class="pink accent-4">#c51162 pink accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="purple lighten-5">#f3e5f5 purple lighten-5</div>
                                                    <div class="purple lighten-4">#e1bee7 purple lighten-4</div>
                                                    <div class="purple lighten-3">#ce93d8 purple lighten-3</div>
                                                    <div class="purple lighten-2">#ba68c8 purple lighten-2</div>
                                                    <div class="purple lighten-1">#ab47bc purple lighten-1</div>
                                                    <div class="purple">#9c27b0 purple</div>
                                                    <div class="purple darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#8e24aa
                                                        purple darken-1
                                                    </div>
                                                    <div class="purple darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#7b1fa2
                                                        purple darken-2
                                                    </div>
                                                    <div class="purple darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#6a1b9a
                                                        purple darken-3
                                                    </div>
                                                    <div class="purple darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#4a148c
                                                        purple darken-4
                                                    </div>
                                                    <div class="purple accent-1">#ea80fc purple accent-1</div>
                                                    <div class="purple accent-2">#e040fb purple accent-2</div>
                                                    <div class="purple accent-3">#d500f9 purple accent-3</div>
                                                    <div class="purple accent-4">#aa00ff purple accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="deep-purple lighten-5">#ede7f6 deep-purple
                                                        lighten-5
                                                    </div>
                                                    <div class="deep-purple lighten-4">#d1c4e9 deep-purple
                                                        lighten-4
                                                    </div>
                                                    <div class="deep-purple lighten-3">#b39ddb deep-purple
                                                        lighten-3
                                                    </div>
                                                    <div class="deep-purple lighten-2">#9575cd deep-purple
                                                        lighten-2
                                                    </div>
                                                    <div class="deep-purple lighten-1">#7e57c2 deep-purple
                                                        lighten-1
                                                    </div>
                                                    <div class="deep-purple">#673ab7 deep-purple</div>
                                                    <div class="deep-purple darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#5e35b1
                                                        deep-purple
                                                        darken-1
                                                    </div>
                                                    <div class="deep-purple darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#512da8
                                                        deep-purple
                                                        darken-2
                                                    </div>
                                                    <div class="deep-purple darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#4527a0
                                                        deep-purple
                                                        darken-3
                                                    </div>
                                                    <div class="deep-purple darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#311b92
                                                        deep-purple
                                                        darken-4
                                                    </div>
                                                    <div class="deep-purple accent-1">#b388ff deep-purple accent-1
                                                    </div>
                                                    <div class="deep-purple accent-2">#7c4dff deep-purple accent-2
                                                    </div>
                                                    <div class="deep-purple accent-3">#651fff deep-purple accent-3
                                                    </div>
                                                    <div class="deep-purple accent-4">#6200ea deep-purple accent-4
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="indigo lighten-5">#e8eaf6 indigo lighten-5</div>
                                                    <div class="indigo lighten-4">#c5cae9 indigo lighten-4</div>
                                                    <div class="indigo lighten-3">#9fa8da indigo lighten-3</div>
                                                    <div class="indigo lighten-2">#7986cb indigo lighten-2</div>
                                                    <div class="indigo lighten-1">#5c6bc0 indigo lighten-1</div>
                                                    <div class="indigo">#3f51b5 indigo</div>
                                                    <div class="indigo darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#3949ab
                                                        indigo darken-1
                                                    </div>
                                                    <div class="indigo darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#303f9f
                                                        indigo darken-2
                                                    </div>
                                                    <div class="indigo darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#283593
                                                        indigo darken-3
                                                    </div>
                                                    <div class="indigo darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#1a237e
                                                        indigo darken-4
                                                    </div>
                                                    <div class="indigo accent-1">#8c9eff indigo accent-1</div>
                                                    <div class="indigo accent-2">#536dfe indigo accent-2</div>
                                                    <div class="indigo accent-3">#3d5afe indigo accent-3</div>
                                                    <div class="indigo accent-4">#304ffe indigo accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="blue lighten-5">#e3f2fd blue lighten-5</div>
                                                    <div class="blue lighten-4">#bbdefb blue lighten-4</div>
                                                    <div class="blue lighten-3">#90caf9 blue lighten-3</div>
                                                    <div class="blue lighten-2">#64b5f6 blue lighten-2</div>
                                                    <div class="blue lighten-1">#42a5f5 blue lighten-1</div>
                                                    <div class="blue">#2196f3 blue</div>
                                                    <div class="blue darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#1e88e5 blue
                                                        darken-1
                                                    </div>
                                                    <div class="blue darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#1976d2 blue
                                                        darken-2
                                                    </div>
                                                    <div class="blue darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#1565c0 blue
                                                        darken-3
                                                    </div>
                                                    <div class="blue darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#0d47a1 blue
                                                        darken-4
                                                    </div>
                                                    <div class="blue accent-1">#82b1ff blue accent-1</div>
                                                    <div class="blue accent-2">#448aff blue accent-2</div>
                                                    <div class="blue accent-3">#2979ff blue accent-3</div>
                                                    <div class="blue accent-4">#2962ff blue accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="light-blue lighten-5">#e1f5fe light-blue lighten-5
                                                    </div>
                                                    <div class="light-blue lighten-4">#b3e5fc light-blue lighten-4
                                                    </div>
                                                    <div class="light-blue lighten-3">#81d4fa light-blue lighten-3
                                                    </div>
                                                    <div class="light-blue lighten-2">#4fc3f7 light-blue lighten-2
                                                    </div>
                                                    <div class="light-blue lighten-1">#29b6f6 light-blue lighten-1
                                                    </div>
                                                    <div class="light-blue">#03a9f4 light-blue</div>
                                                    <div class="light-blue darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#039be5
                                                        light-blue
                                                        darken-1
                                                    </div>
                                                    <div class="light-blue darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#0288d1
                                                        light-blue
                                                        darken-2
                                                    </div>
                                                    <div class="light-blue darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#0277bd
                                                        light-blue
                                                        darken-3
                                                    </div>
                                                    <div class="light-blue darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#01579b
                                                        light-blue
                                                        darken-4
                                                    </div>
                                                    <div class="light-blue accent-1">#80d8ff light-blue accent-1
                                                    </div>
                                                    <div class="light-blue accent-2">#40c4ff light-blue accent-2
                                                    </div>
                                                    <div class="light-blue accent-3">#00b0ff light-blue accent-3
                                                    </div>
                                                    <div class="light-blue accent-4">#0091ea light-blue accent-4
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="cyan lighten-5">#e0f7fa cyan lighten-5</div>
                                                    <div class="cyan lighten-4">#b2ebf2 cyan lighten-4</div>
                                                    <div class="cyan lighten-3">#80deea cyan lighten-3</div>
                                                    <div class="cyan lighten-2">#4dd0e1 cyan lighten-2</div>
                                                    <div class="cyan lighten-1">#26c6da cyan lighten-1</div>
                                                    <div class="cyan">#00bcd4 cyan</div>
                                                    <div class="cyan darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#00acc1 cyan
                                                        darken-1
                                                    </div>
                                                    <div class="cyan darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#0097a7 cyan
                                                        darken-2
                                                    </div>
                                                    <div class="cyan darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#00838f cyan
                                                        darken-3
                                                    </div>
                                                    <div class="cyan darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#006064 cyan
                                                        darken-4
                                                    </div>
                                                    <div class="cyan accent-1">#84ffff cyan accent-1</div>
                                                    <div class="cyan accent-2">#18ffff cyan accent-2</div>
                                                    <div class="cyan accent-3">#00e5ff cyan accent-3</div>
                                                    <div class="cyan accent-4">#00b8d4 cyan accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="teal lighten-5">#e0f2f1 teal lighten-5</div>
                                                    <div class="teal lighten-4">#b2dfdb teal lighten-4</div>
                                                    <div class="teal lighten-3">#80cbc4 teal lighten-3</div>
                                                    <div class="teal lighten-2">#4db6ac teal lighten-2</div>
                                                    <div class="teal lighten-1">#26a69a teal lighten-1</div>
                                                    <div class="teal">#009688 teal</div>
                                                    <div class="teal darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#00897b teal
                                                        darken-1
                                                    </div>
                                                    <div class="teal darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#00796b teal
                                                        darken-2
                                                    </div>
                                                    <div class="teal darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#00695c teal
                                                        darken-3
                                                    </div>
                                                    <div class="teal darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#004d40 teal
                                                        darken-4
                                                    </div>
                                                    <div class="teal accent-1">#a7ffeb teal accent-1</div>
                                                    <div class="teal accent-2">#64ffda teal accent-2</div>
                                                    <div class="teal accent-3">#1de9b6 teal accent-3</div>
                                                    <div class="teal accent-4">#00bfa5 teal accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="green lighten-5">#e8f5e9 green lighten-5</div>
                                                    <div class="green lighten-4">#c8e6c9 green lighten-4</div>
                                                    <div class="green lighten-3">#a5d6a7 green lighten-3</div>
                                                    <div class="green lighten-2">#81c784 green lighten-2</div>
                                                    <div class="green lighten-1">#66bb6a green lighten-1</div>
                                                    <div class="green">#4caf50 green</div>
                                                    <div class="green darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#43a047 green
                                                        darken-1
                                                    </div>
                                                    <div class="green darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#388e3c green
                                                        darken-2
                                                    </div>
                                                    <div class="green darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#2e7d32 green
                                                        darken-3
                                                    </div>
                                                    <div class="green darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#1b5e20 green
                                                        darken-4
                                                    </div>
                                                    <div class="green accent-1">#b9f6ca green accent-1</div>
                                                    <div class="green accent-2">#69f0ae green accent-2</div>
                                                    <div class="green accent-3">#00e676 green accent-3</div>
                                                    <div class="green accent-4">#00c853 green accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="light-green lighten-5">#f1f8e9 light-green
                                                        lighten-5
                                                    </div>
                                                    <div class="light-green lighten-4">#dcedc8 light-green
                                                        lighten-4
                                                    </div>
                                                    <div class="light-green lighten-3">#c5e1a5 light-green
                                                        lighten-3
                                                    </div>
                                                    <div class="light-green lighten-2">#aed581 light-green
                                                        lighten-2
                                                    </div>
                                                    <div class="light-green lighten-1">#9ccc65 light-green
                                                        lighten-1
                                                    </div>
                                                    <div class="light-green">#8bc34a light-green</div>
                                                    <div class="light-green darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#7cb342
                                                        light-green
                                                        darken-1
                                                    </div>
                                                    <div class="light-green darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#689f38
                                                        light-green
                                                        darken-2
                                                    </div>
                                                    <div class="light-green darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#558b2f
                                                        light-green
                                                        darken-3
                                                    </div>
                                                    <div class="light-green darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#33691e
                                                        light-green
                                                        darken-4
                                                    </div>
                                                    <div class="light-green accent-1">#ccff90 light-green accent-1
                                                    </div>
                                                    <div class="light-green accent-2">#b2ff59 light-green accent-2
                                                    </div>
                                                    <div class="light-green accent-3">#76ff03 light-green accent-3
                                                    </div>
                                                    <div class="light-green accent-4">#64dd17 light-green accent-4
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="lime lighten-5">#f9fbe7 lime lighten-5</div>
                                                    <div class="lime lighten-4">#f0f4c3 lime lighten-4</div>
                                                    <div class="lime lighten-3">#e6ee9c lime lighten-3</div>
                                                    <div class="lime lighten-2">#dce775 lime lighten-2</div>
                                                    <div class="lime lighten-1">#d4e157 lime lighten-1</div>
                                                    <div class="lime">#cddc39 lime</div>
                                                    <div class="lime darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#c0ca33 lime
                                                        darken-1
                                                    </div>
                                                    <div class="lime darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#afb42b lime
                                                        darken-2
                                                    </div>
                                                    <div class="lime darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#9e9d24 lime
                                                        darken-3
                                                    </div>
                                                    <div class="lime darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#827717 lime
                                                        darken-4
                                                    </div>
                                                    <div class="lime accent-1">#f4ff81 lime accent-1</div>
                                                    <div class="lime accent-2">#eeff41 lime accent-2</div>
                                                    <div class="lime accent-3">#c6ff00 lime accent-3</div>
                                                    <div class="lime accent-4">#aeea00 lime accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="yellow lighten-5">#fffde7 yellow lighten-5</div>
                                                    <div class="yellow lighten-4">#fff9c4 yellow lighten-4</div>
                                                    <div class="yellow lighten-3">#fff59d yellow lighten-3</div>
                                                    <div class="yellow lighten-2">#fff176 yellow lighten-2</div>
                                                    <div class="yellow lighten-1">#ffee58 yellow lighten-1</div>
                                                    <div class="yellow">#ffeb3b yellow</div>
                                                    <div class="yellow darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#fdd835
                                                        yellow darken-1
                                                    </div>
                                                    <div class="yellow darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#fbc02d
                                                        yellow darken-2
                                                    </div>
                                                    <div class="yellow darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#f9a825
                                                        yellow darken-3
                                                    </div>
                                                    <div class="yellow darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#f57f17
                                                        yellow darken-4
                                                    </div>
                                                    <div class="yellow accent-1">#ffff8d yellow accent-1</div>
                                                    <div class="yellow accent-2">#ffff00 yellow accent-2</div>
                                                    <div class="yellow accent-3">#ffea00 yellow accent-3</div>
                                                    <div class="yellow accent-4">#ffd600 yellow accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="amber lighten-5">#fff8e1 amber lighten-5</div>
                                                    <div class="amber lighten-4">#ffecb3 amber lighten-4</div>
                                                    <div class="amber lighten-3">#ffe082 amber lighten-3</div>
                                                    <div class="amber lighten-2">#ffd54f amber lighten-2</div>
                                                    <div class="amber lighten-1">#ffca28 amber lighten-1</div>
                                                    <div class="amber">#ffc107 amber</div>
                                                    <div class="amber darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ffb300 amber
                                                        darken-1
                                                    </div>
                                                    <div class="amber darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ffa000 amber
                                                        darken-2
                                                    </div>
                                                    <div class="amber darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ff8f00 amber
                                                        darken-3
                                                    </div>
                                                    <div class="amber darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ff6f00 amber
                                                        darken-4
                                                    </div>
                                                    <div class="amber accent-1">#ffe57f amber accent-1</div>
                                                    <div class="amber accent-2">#ffd740 amber accent-2</div>
                                                    <div class="amber accent-3">#ffc400 amber accent-3</div>
                                                    <div class="amber accent-4">#ffab00 amber accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="orange lighten-5">#fff3e0 orange lighten-5</div>
                                                    <div class="orange lighten-4">#ffe0b2 orange lighten-4</div>
                                                    <div class="orange lighten-3">#ffcc80 orange lighten-3</div>
                                                    <div class="orange lighten-2">#ffb74d orange lighten-2</div>
                                                    <div class="orange lighten-1">#ffa726 orange lighten-1</div>
                                                    <div class="orange">#ff9800 orange</div>
                                                    <div class="orange darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#fb8c00
                                                        orange darken-1
                                                    </div>
                                                    <div class="orange darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#f57c00
                                                        orange darken-2
                                                    </div>
                                                    <div class="orange darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#ef6c00
                                                        orange darken-3
                                                    </div>
                                                    <div class="orange darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#e65100
                                                        orange darken-4
                                                    </div>
                                                    <div class="orange accent-1">#ffd180 orange accent-1</div>
                                                    <div class="orange accent-2">#ffab40 orange accent-2</div>
                                                    <div class="orange accent-3">#ff9100 orange accent-3</div>
                                                    <div class="orange accent-4">#ff6d00 orange accent-4</div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="deep-orange lighten-5">#fbe9e7 deep-orange
                                                        lighten-5
                                                    </div>
                                                    <div class="deep-orange lighten-4">#ffccbc deep-orange
                                                        lighten-4
                                                    </div>
                                                    <div class="deep-orange lighten-3">#ffab91 deep-orange
                                                        lighten-3
                                                    </div>
                                                    <div class="deep-orange lighten-2">#ff8a65 deep-orange
                                                        lighten-2
                                                    </div>
                                                    <div class="deep-orange lighten-1">#ff7043 deep-orange
                                                        lighten-1
                                                    </div>
                                                    <div class="deep-orange">#ff5722 deep-orange</div>
                                                    <div class="deep-orange darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#f4511e
                                                        deep-orange
                                                        darken-1
                                                    </div>
                                                    <div class="deep-orange darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#e64a19
                                                        deep-orange
                                                        darken-2
                                                    </div>
                                                    <div class="deep-orange darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#d84315
                                                        deep-orange
                                                        darken-3
                                                    </div>
                                                    <div class="deep-orange darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#bf360c
                                                        deep-orange
                                                        darken-4
                                                    </div>
                                                    <div class="deep-orange accent-1">#ff9e80 deep-orange accent-1
                                                    </div>
                                                    <div class="deep-orange accent-2">#ff6e40 deep-orange accent-2
                                                    </div>
                                                    <div class="deep-orange accent-3">#ff3d00 deep-orange accent-3
                                                    </div>
                                                    <div class="deep-orange accent-4">#dd2c00 deep-orange accent-4
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="brown lighten-5">#efebe9 brown lighten-5</div>
                                                    <div class="brown lighten-4">#d7ccc8 brown lighten-4</div>
                                                    <div class="brown lighten-3">#bcaaa4 brown lighten-3</div>
                                                    <div class="brown lighten-2">#a1887f brown lighten-2</div>
                                                    <div class="brown lighten-1">#8d6e63 brown lighten-1</div>
                                                    <div class="brown">#795548 brown</div>
                                                    <div class="brown darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#6d4c41 brown
                                                        darken-1
                                                    </div>
                                                    <div class="brown darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#5d4037 brown
                                                        darken-2
                                                    </div>
                                                    <div class="brown darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#4e342e brown
                                                        darken-3
                                                    </div>
                                                    <div class="brown darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#3e2723 brown
                                                        darken-4
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                    <div class="grey lighten-5">#fafafa grey lighten-5</div>
                                                    <div class="grey lighten-4">#f5f5f5 grey lighten-4</div>
                                                    <div class="grey lighten-3">#eeeeee grey lighten-3</div>
                                                    <div class="grey lighten-2">#e0e0e0 grey lighten-2</div>
                                                    <div class="grey lighten-1">#bdbdbd grey lighten-1</div>
                                                    <div class="grey">#9e9e9e grey</div>
                                                    <div class="grey darken-1"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#757575 grey
                                                        darken-1
                                                    </div>
                                                    <div class="grey darken-2"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#616161 grey
                                                        darken-2
                                                    </div>
                                                    <div class="grey darken-3"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#424242 grey
                                                        darken-3
                                                    </div>
                                                    <div class="grey darken-4"
                                                         style="color: rgba(255, 255, 255, 0.901961);">#212121 grey
                                                        darken-4
                                                    </div>
                                                </div>
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
                                                            class="sidenav-close" href="css-color.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="css-color.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="css-color.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="css-color.html#activity">
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
                                <a href="css-color.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
@endsection

@section('footer')
@endsection
