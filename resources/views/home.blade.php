@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                        <div class="d-flex justify-content-between align-items-center my-4">
                            <h5># Test Drive</h5>
                            <a href="{{route('print')}}" class="btn btn-primary">Export Excel</a>
                        </div>


                        <table class="table table-bordered">
                            <tr>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Surname</th>
                                <th class="align-middle">Tel</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Cars</th>
                                <th class="align-middle">Showrooms</th>
                            </tr>
                            <tbody id="tbody">
                            </tbody>
                        </table>













                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--Firebase Tasks--}}
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        projectId: "{{ config('services.firebase.project_id') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
        appId: "{{ config('services.firebase.app_id') }}",
        measurementId: "{{ config('services.firebase.measurement_id') }}"
    };
    firebase.initializeApp(config);
    firebase.analytics();
    var database = firebase.database();
    var lastIndex = 0;
    // Get Data
    firebase.database().ref('isuzu/test_drive').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
<td class="align-middle">' + value.name + '</td>\
<td class="align-middle">' + value.surname + '</td>\
<td class="align-middle">' + value.tel + '</td>\
<td class="align-middle">' + value.email + '</td>\
<td class="align-middle">' + value.cars + '</td>\
<td class="align-middle">' + value.showrooms + '</td>\
</tr>');
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
    });
</script>
