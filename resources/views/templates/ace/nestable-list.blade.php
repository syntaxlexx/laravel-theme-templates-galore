@extends('templates.' . $theme . '.layouts.main')

@section('styles')

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-sm-6">
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">
                                Item 1
                                <i class="pull-right bigger-130 ace-icon fa fa-exclamation-triangle orange2"></i>
                            </div>
                        </li>

                        <li class="dd-item" data-id="2">
                            <div class="dd-handle">Item 2</div>

                            <ol class="dd-list">
                                <li class="dd-item" data-id="3">
                                    <div class="dd-handle">
                                        Item 3
                                        <a data-rel="tooltip" data-placement="left" title="Change Date" href="#" class="pull-right tooltip-info btn btn-primary btn-mini btn-white btn-bold">
                                            <i class="bigger-120 ace-icon fa fa-calendar"></i>
                                        </a>
                                    </div>
                                </li>

                                <li class="dd-item" data-id="4">
                                    <div class="dd-handle">
                                        <span class="orange">Item 4</span>
                                        <span class="lighter grey">
                                            &nbsp; with some description
                                        </span>
                                    </div>
                                </li>

                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">
                                        Item 5
                                        <div class="pull-right action-buttons">
                                            <a class="blue" href="#">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <ol class="dd-list">
                                        <li class="dd-item item-orange" data-id="6">
                                            <div class="dd-handle"> Item 6 </div>
                                        </li>

                                        <li class="dd-item item-red" data-id="7">
                                            <div class="dd-handle">Item 7</div>
                                        </li>

                                        <li class="dd-item item-blue2" data-id="8">
                                            <div class="dd-handle">Item 8</div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="dd-item" data-id="9">
                                    <div class="dd-handle btn-yellow no-hover">Item 9</div>
                                </li>

                                <li class="dd-item" data-id="10">
                                    <div class="dd-handle">Item 10</div>
                                </li>
                            </ol>
                        </li>

                        <li class="dd-item" data-id="11">
                            <div class="dd-handle">
                                Item 11
                                <span class="sticker">
                                    <span class="label label-success arrowed-in">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                    </span>
                                </span>
                            </div>
                        </li>

                        <li class="dd-item" data-id="12">
                            <div class="dd-handle">Item 12</div>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="vspace-16-sm"></div>

            <div class="col-sm-6">
                <div class="dd dd-draghandle">
                    <ol class="dd-list">
                        <li class="dd-item dd2-item" data-id="13">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon ace-icon fa fa-comments blue bigger-130"></i>

                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                            </div>
                            <div class="dd2-content">Click on an icon to start dragging</div>
                        </li>

                        <li class="dd-item dd2-item" data-id="14">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon ace-icon fa fa-clock-o pink bigger-130"></i>

                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                            </div>
                            <div class="dd2-content">Recent Posts</div>
                        </li>

                        <li class="dd-item dd2-item" data-id="15">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon ace-icon fa fa-signal orange bigger-130"></i>

                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                            </div>
                            <div class="dd2-content">Statistics</div>

                            <ol class="dd-list">
                                <li class="dd-item dd2-item" data-id="16">
                                    <div class="dd-handle dd2-handle">
                                        <i class="normal-icon ace-icon fa fa-user red bigger-130"></i>

                                        <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                    </div>
                                    <div class="dd2-content">Active Users</div>
                                </li>

                                <li class="dd-item dd2-item dd-colored" data-id="17">
                                    <div class="dd-handle dd2-handle btn-info">
                                        <i class="normal-icon ace-icon fa fa-pencil-square-o bigger-130"></i>

                                        <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                    </div>
                                    <div class="dd2-content btn-info no-hover">Published Articles</div>
                                </li>

                                <li class="dd-item dd2-item" data-id="18">
                                    <div class="dd-handle dd2-handle">
                                        <i class="normal-icon ace-icon fa fa-eye green bigger-130"></i>

                                        <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                    </div>
                                    <div class="dd2-content">Visitors</div>
                                </li>
                            </ol>
                        </li>

                        <li class="dd-item dd2-item" data-id="19">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon ace-icon fa fa-bars blue bigger-130"></i>

                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                            </div>
                            <div class="dd2-content">Menu</div>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection