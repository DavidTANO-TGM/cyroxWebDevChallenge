<x-app-layout title="Patients">
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">Patients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" style="width:100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Occupation</th>
                                        <th>Gender</th>
                                        <th>Blood Group</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ $patient->email }}</td>
                                            <td>{{ $patient->mobile }}</td>
                                            <td>{{ $patient->occupation }}</td>
                                            <td>{{ $patient->gender == "M" ? "Male" : "Female" }}</td>
                                            <td>{{ $patient->blood_group }}</td>
                                            <td>
                                                <a class="mr-1 btn btn-sm btn-primary" href="javascript:;">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="mr-1 btn btn-sm btn-warning" href="javascript:;">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
