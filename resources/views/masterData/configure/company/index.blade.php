@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Company</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">Master Data</a>
                        </li>
                        <li class="breadcrumb-item">Configure</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/master-data/configure/company">Company</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-12">
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">All Companies</h3>
                    </div>
                    <div class="block-content">
                        <div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
                            <table>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('css_after')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/r-2.2.5/datatables.min.css"/>

@endsection

@section('js_after')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/r-2.2.5/datatables.min.js"></script>

@endsection
