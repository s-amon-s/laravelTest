@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">List of Objects</div>
                <div class="panel-body">
                    <div class="col-sm-4 col-md-4" ng-controller="customerCtrl2" ng-init="customerCtrl2.initialize()">
                        <div class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                        <a href="#" class="btn btn-primary" role="button">Object List<span class="caret"></span></a>
                        </div>
                        <ul class="dropdown-menu">
                        <li ng-repeat="x in myData">
                              <div>
                                    <strong style="color:<%x.objcolor%>"><%x.objcolor%>: </strong>
                                    <span class="pull-right text-muted">
                                        <em><%x.shape%></em>
                                    </span>
                                </div>
                               
                            <!-- <div class='divider'/>                           -->
                        </li>
                        </ul>
                        </div>
             
             
                    <div class="col-sm-4 col-md-4"><a href="" class="btn btn-success" role="button">Show All Objects</a></div>
                    <div class="col-sm-4 col-md-4"><a href="" class="btn btn-warning" role="button">Admin Page</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="panelContainer" style="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="objectDetail"></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div id="objectH"></div> 
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div id="objectW"></div> 
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div id="objectD"></div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div id="objectArea"></div> 
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                            <div id="objectDim"></div> 
                        </div>
                    </div> 
                    <div class="row">
                            <div class="col-md-offset-10 col-sm-2 col-md-2" id="objectURL"></div>   
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection