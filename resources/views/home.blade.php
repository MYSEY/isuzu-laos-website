@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}








                        <h5># Users</h5>
                        <a href="{{route('print')}}" class="btn btn-primary">Print</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Cars</th>
                                <th>Showrooms</th>
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
<td>' + value.name + '</td>\
<td>' + value.surname + '</td>\
<td>' + value.cars + '</td>\
<td>' + value.showrooms + '</td>\
</tr>');
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
    });
</script>
