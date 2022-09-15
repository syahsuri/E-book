@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <h3>Materi 1</h3>
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
                                <td>2020573010006</td>
                                <td>Alvin Syahri</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                      </div>
                                </td>
                        </tbody>
                    </table>
                    {{--  end tables  --}}

                </div>
            </div>
        </div>
    </div>
@endsection

