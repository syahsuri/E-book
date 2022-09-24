@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-3">
                <div class="card-body">

                    {{-- tables --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2020573010031</td>
                                <td>M Tajul Munandar</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                                      </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{--  end tables  --}}

                </div>
            </div>
        </div>
    </div>
@endsection

