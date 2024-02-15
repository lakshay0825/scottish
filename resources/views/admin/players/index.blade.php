@extends('layouts.app')
  
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Players List</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-4">
              <table id="players-table" class="display">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Optional Round</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    </tr>
                </thead>
            </table>

            <script>
                $(document).ready(function () {
                    $('#players-table').DataTable({
                        processing: true,
                        serverSide: true,
                        paging: true,
                        searching: true,
                        ordering: true,
                        responsive: true,
                        lengthMenu: [10, 25, 50, 100],
                        pageLength: 10,
                        ajax: "{{ route('admin.players.getPlayers') }}",
                        columns: [
                            { data: 'id', name: 'id', className: 'text-xs text-secondary mb-0' },
                            {
                                data: null,
                                name: 'name',
                                render: function (data, type, full, meta) {
                                // Combine 'Name' and 'Profile Photo' into a single column
                                return '<div class="d-flex px-2 py-1">' +
                                    '<div>' +
                                    '<img src="' + '{{ asset('storage/') }}' + '/' + full.profile_photo + '" alt="Profile Photo" class="avatar avatar-sm me-3 border-radius-lg">' +
                                    '</div>' +
                                    '<div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">' + full.name + '</h6><p class="text-xs text-secondary mb-0">' + full.email + '</p></div><div>';
                            }
                            },
                            { data: 'country', name: 'country', className: 'text-xs text-secondary mb-0' },
                            { data: 'phone', name: 'phone', className: 'text-xs text-secondary mb-0' },
                            { data: 'category', name: 'category', className: 'text-xs text-secondary mb-0' },
                            {
                                data: 'optional_round',
                                name: 'optional_round',
                                className: 'text-xs text-secondary mb-0',
                                render: function (data, type, full, meta) {
                                    // Convert boolean value to "Yes" or "No"
                                    return data ? 'Yes' : 'No';
                                }
                            },
                            {
                                data: 'created_at',
                                name: 'created_at',
                                className: 'text-xs text-secondary mb-0',
                                render: function (data, type, full, meta) {
                                    // Parse the ISO date string and format it
                                    var date = new Date(data);
                                    return date.toLocaleString(); // Adjust the formatting based on your needs
                                }
                            }
                        ],
                        // Set the table width to 100%
                       
                        "autoWidth": false,
                        "columnDefs": [
                            { "width": "5%", "targets": 0 },
                            { "width": "20%", "targets": 1 }, // Adjust column width as needed
                            { "width": "10%", "targets": 2 },
                            { "width": "15%", "targets": 3 },
                            { "width": "10%", "targets": 4 },
                            { "width": "10%", "targets": 5 },
                            { "width": "15%", "targets": 6 }
                        ]
                    });
                });
            </script>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection